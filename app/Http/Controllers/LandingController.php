<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Carbon\Carbon;
use File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LandingController extends Controller
{
    public function index()
    {
        $expired = Link::where('expired', '!=', 'no-limit')->where('expired', '<', Carbon::now())->get();

        foreach ($expired as $key => $value) {
            if ($value->category == 'image') {
                File::delete(public_path('images/' . substr($value->url, strrpos($value->url, '/') + 1)));

                $value->delete();
            } else {
                $value->delete();
            }
        }

        return view('layouts.app');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function support()
    {
        return view('pages.support');
    }

    public function copyrightPolicy()
    {
        return view('pages.copyright-policy');
    }

    public function termsConditions()
    {
        return view('pages.terms-conditions');
    }

    public function privacyPolicy()
    {
        return view('pages.privacy-policy');
    }

    public function check_kode(Request $request)
    {
        $kode = Link::where('kode', $request->kode)->first();

        if ($kode) {
            if ($kode->expired != 'no-limit' && !is_null($kode->expired) && Carbon::parse($kode->expired)->isPast()) {
                return response()->json([
                    'status' => 'error-expired',
                    'message' => 'Kode sudah kadaluarsa!',
                ]);
            } else if ($kode->password) {
                return response()->json([
                    'status' => 'success-password',
                    'message' => 'Kode ditemukan!',
                ]);
            } else {
                return response()->json([
                    'status' => 'success-no-password',
                    'message' => 'Kode ditemukan!',
                ]);
            }
        } else {
            return response()->json([
                'status' => 'error-not-exist',
                'message' => 'Kode tidak ditemukan!',
            ]);
        }
    }

    public function create(Request $request)
    {
        if (!$request->hasFile('image')) {
            $request->request->add(['image' => null]);
        }

        $q = Link::where('kode', $request->kode)->first();

        if ($q && !is_null($q->password) && !preg_match('#((https?|ftp)://(\S*?\.\S*?))([\s)\[\]{},;"\':<]|\.\s|$)#i', $request->kode)) {
            // check password and expired
            $password_req_field = $request->password_req_field;
            $kode = Link::where('kode', $request->kode)->first();

            if (password_verify($password_req_field, $kode->password)) {
                if ($kode->expired != 'no-limit' && !is_null($kode->expired) && Carbon::parse($kode->expired)->isPast()) {
                    return back()->with('error', [
                        'message' => 'Kode sudah kadaluarsa!',
                    ]);
                }
            } else {
                return back()->with('error', [
                    'message' => 'Password salah!',
                ]);
            }
        }

        $category = $request->category;
        $array = ['kode', 'image', 'text'];

        if (!in_array($category, $array)) {
            return back()->with('error', [
                'message' => 'Harap masukan category dengan benar.',
            ]);
        }

        foreach ($array as $key => $value) {
            if ($value == $category && !$request->all()[strtolower($value)]) {
                return back()->with('error', [
                    'message' => 'Harap masukan kode dengan benar.',
                ]);

                if ($category == 'image') {
                    $validator = Validator::make(request()->all(), [
                        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    ]);
                    if ($validator->fails()) {
                        return back()->with('error', [
                            'message' => 'Harap masukan gambar dengan benar.',
                        ]);
                    }
                }
            } else if ($value != $category && $request->all()[strtolower($value)]) {
                return back()->with('error', [
                    'message' => 'Pilih salah satu! Kode atau Gambar atau Teks.',
                ]);
            }
        }

        if ($request->optional_settings) {
            $validator = Validator::make(request()->all(), [
                'password' => 'required',
                'expired' => 'required',
            ]);
            if ($validator->fails()) {
                return back()->with('error', [
                    'message' => 'Harap masukan password dan expired dengan benar.',
                ]);
            }
        }

        $kode = $request->all()[strtolower($category)];
        $password = $request->optional_settings ? bcrypt($request->password) : null;
        $expired = !$request->optional_settings ? null : ($request->expired == '0' ? 'no-limit' : Carbon::parse(Carbon::now()->addMinutes($request->expired))->format('Y-m-d H:i:s'));

        if ($category == "kode") {
            return $this->store_kode($kode, $category, $password, $expired);
        } else if ($category == "image") {
            return $this->store_image($request->file('image'), $category, $password, $expired);
        } else if ($category == "text") {
            return $this->store_text($kode, $category, $password, $expired);
        } else {
            return back()->with('error', [
                'message' => 'Harap masukan kode dengan benar.',
            ]);
        }
    }

    public function store_kode($kode, $category, $password, $expired)
    {
        if (preg_match('#((https?|ftp)://(\S*?\.\S*?))([\s)\[\]{},;"\':<]|\.\s|$)#i', $kode)) {
            $kd = env('APP_KODE') . '-' . Str::upper(Str::random(4));
            if (!Link::where('kode', $kd)->exists()) {
                $data = Link::create([
                    'url' => $kode,
                    'kode' => $kd,
                    'category' => $category,
                    'password' => $password,
                    'expired' => $expired,
                ]);
                return back()->with('success', [
                    'message' => 'Berhasil membuat ' . env('APP_NAME') . '.',
                    'url' => $data->url,
                    'kode' => $data->kode,
                    'jenis' => 'success-create-kode',
                ]);
            }
        } elseif (preg_match('/' . env('APP_KODE') . '-(.+)/', $kode)) {
            $kd = $kode;
            if (Link::where('kode', $kd)->exists()) {
                $data = Link::where('kode', $kd)->first();
                return back()->with('success', [
                    'message' => 'Berhasil mengakses ' . env('APP_NAME') . '.',
                    'url' => $data->url,
                    'kode' => $data->kode,
                    'jenis' => 'success-show-kode',
                    'category' => $data->category,
                    'image_name' => substr($data->url, strrpos($data->url, '/') + 1),
                ]);
            }
        } elseif (preg_match('/((?:[a-z\d](?:[a-z\d-]{0,63}[a-z\d])?|\*)\.)+[a-z\d][a-z\d-]{0,63}[a-z\d]/', $kode)) {
            return back()->with('error', [
                'message' => 'Pastikan url yang di submit benar.',
            ]);
        } else {
            return back()->with('error', [
                'message' => 'Harap masukan kode dengan benar.',
            ]);
        }
    }

    public function store_image($image, $category, $password, $expired)
    {
        $file = $image;
        $name = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $name);
        $path = public_path('images/' . $name);

        $kd = env('APP_KODE') . '-IMG-' . Str::upper(Str::random(4));
        if (!Link::where('kode', $kd)->exists()) {
            $data = Link::create([
                'url' => $path,
                'kode' => $kd,
                'category' => $category,
                'password' => $password,
                'expired' => $expired,
            ]);
            return back()->with('success', [
                'message' => 'Berhasil membuat ' . env('APP_NAME') . '.',
                'url' => $data->url,
                'kode' => $data->kode,
                'jenis' => 'success-create-image',
                'image_name' => $name,
            ]);
        }
    }

    public function store_text($kode, $category, $password, $expired)
    {
        $kd = env('APP_KODE') . '-TXT' . Str::upper(Str::random(4));
        if (!Link::where('kode', $kd)->exists()) {
            $data = Link::create([
                'url' => $kode,
                'kode' => $kd,
                'category' => $category,
                'password' => $password,
                'expired' => $expired,
            ]);
            return back()->with('success', [
                'message' => 'Berhasil membuat ' . env('APP_NAME') . '.',
                'url' => $data->url,
                'kode' => $data->kode,
                'jenis' => 'success-create-text',
            ]);
        }
    }
}
