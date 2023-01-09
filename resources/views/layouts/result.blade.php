<div class="inline-block">
    @if (session('success')['jenis'] == 'success-create-kode' || session('success')['jenis'] == 'success-show-kode')
        @if (session('success')['category'] == 'kode')
            <h5 class="semi-bold font__size--14 text__14-1024 color__gray-1 mb-3"> URL </h5>
            <h4 class="bold font__size--18 text__18-1024 text__18-xs mb-3">{!!session('success')['jenis'] == 'success-create-kode' ?
                ' <a href="'.session("success")["url"].'"target="_blank">'.session("success")["url"].'</a>' : '<a
                    href="'.session("success")["url"].'"target="_blank" class="btn btn-primary">KLIK
                    DISINI
                </a>'!!}
            </h4>
        @endif
        @if (session('success')['category'] == 'image')
            <h5 class="semi-bold font__size--14 text__14-1024 color__gray-1 mb-3"> URL </h5>
            <h4 class="bold font__size--18 text__18-1024 text__18-xs mb-3">
                <a href="{{ asset('images/'.session('success')['image_name']) }}" target="_blank" class="btn btn-primary">PREVIEW IMAGE</a>
            </h4>
        @endif
        @if (session('success')['category'] == 'text')
            <h5 class="semi-bold font__size--14 text__14-1024 color__gray-1 mb-3"> URL </h5>
            <h4 class="bold font__size--18 text__18-1024 text__18-xs mb-3">
                <p class="text__14-1024 text__14-xs">
                    {!! session('success')['url'] !!}
                </p>
            </h4>
        @endif
    <button class="btn btn-sm btn__outlined--black btn__more shadow mt-3 semi-bold no__opacity text-uppercase"
        id="copy"> SALIN {{env('APP_NAME')}} </button>
    @endif

    @if (session('success')['jenis'] == 'success-create-image')
    <h5 class="semi-bold font__size--14 text__14-1024 color__gray-1 mb-3"> IMAGE </h5>
    <h4 class="bold font__size--18 text__18-1024 text__18-xs mb-3">
        {{-- <img src="{{ asset('images/'.session('success')['image_name']) }}" alt="image" class="img-thumbnail" style="width: 200px; height: 200px;"> --}}

        <a href="{{ asset('images/'.session('success')['image_name']) }}" target="_blank" class="btn btn-primary">PREVIEW IMAGE</a>
    </h4>
    <button class="btn btn-sm btn__outlined--black btn__more shadow mt-3 semi-bold no__opacity text-uppercase"
        id="copy"> SALIN {{env('APP_NAME')}} </button>
    @endif

    @if (session('success')['jenis'] == 'success-create-text')
    <h5 class="semi-bold font__size--14 text__14-1024 color__gray-1 mb-3"> TEXT </h5>
    <h4 class="bold font__size--18 text__18-1024 text__18-xs mb-3">
        <p class="text__14-1024 text__14-xs">
            {!! session('success')['url'] !!}
        </p>
    </h4>
    <button class="btn btn-sm btn__outlined--black btn__more shadow mt-3 semi-bold no__opacity text-uppercase"
        id="copy"> SALIN {{env('APP_NAME')}} </button>
    @endif
</div>
