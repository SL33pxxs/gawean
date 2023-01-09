@extends('layouts.app')

@section('content')
<div id="fullpage">
    <!--Begin Hero Section-->
    <section id="home" class="full-height section hero hero-9 bg6">
      <div class="container">
        <div class="row">
          <div class="col-md-9 mx-auto">
            <div class="hero-text text-center pd-tp-0">
              <h2 class="text-white">URL Shortener <br /> {{env('APP_NAME')}}
                </b>
              </h2>
              <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br />incididunt ut labore et dolore magna aliqua. </p>
              <div class="form_contact center-contact-form w-50 mx-auto mt-4">
                <form action="{{url('create')}}" method="post" id="{{getFormId()}}"> @csrf <div class="form-group mb-2 clearfix">
                    <input type="text" class="form-control @error('kode') is-invalid @enderror" placeholder="URL / {{env('APP_NAME')}}" name="kode" required>
                    <i class="uil uil-globe"></i> 
                    {!! htmlFormButton("GO", ['class' => 'btn btn-primary mb-2 ml-0 mt-4']) !!}
                    {{-- <button type="submit" class="btn btn-primary mb-2 ml-0 mt-4">GO</button> --}}
                  </div>
                </form>
              </div>
              @if (session('success'))
                <div class="element_box text-center mt-5">
                    <div class="element_box_info text-dark">
                        <h1 style="font-weight: bolder" id="resultKode">{{session('success')['kode']}}</h1>
                        <h6><b>URL</b> : {!!session('success')['jenis'] == 'encode' ? '<a href="'.session("success")["url"].'" target="_blank">'.session("success")["url"].'</a></h6>' : '<a href="'.session("success")["url"].'" class="btn btn-primary bg-color-3" target="_blank">Klik Disini</a></h6>'!!}</h6>
                        @if (session('success')['jenis'] == 'encode') <button class="btn btn-primary text-uppercase bg-color-2" id="copy">Salin</button> @endif
                    </div>
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--END Hero Section-->
    <section id="services" class=" hero bg7 full-height section">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="element_box">
              <i class="uil uil-grin bg-color-2"></i>
              <div class="element_box_info">
                <h3>Kualitas</h3>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla </p>
              </div>
            </div>
            <div class="element_box">
              <i class="uil uil-lock bg-color-3"></i>
              <div class="element_box_info">
                <h3>Keamanan</h3>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla </p>
              </div>
            </div>
            <div class="element_box">
              <i class="uil uil-box bg-color-5"></i>
              <div class="element_box_info">
                <h3>Digital Agency</h3>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla </p>
              </div>
            </div>
            {{-- <a href="" class="btn w-100 btn-transparent ">Explore All Features </a> --}}
          </div>
          <div class="col-md-6"></div>
        </div>
      </div>
    </section>
    <section id="cta" class=" bg-color-5 full-height section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="block-text pd-tp-120 text-white">
              <span class="text-white">Elements Design</span>
              <h2 class="text-white">Young in our spirits and modern look. Bold in execution and smooth delivery. </h2>
              <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
              <a href="#" class="btn btn-white">Learn More</a>
            </div>
          </div>
          <div class="right-img-block clearfix">
            <div class="image-inner">
              <img src="{{ url('assets/images/image1.svg') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
  <section id="contact" class=" hero bg8 full-height section">
    <div class="container">
      <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-5">
          <div class="block-text pd-tp-50 text-white">
            <span class="text-white">Contact</span>
            <h2 class="text-white">Get In Touch With Us </h2>
          </div>
          <div class="form-contact">
            <form action="action.php" method="POST">
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Enter please your mane">
              </div>
              <div class="form-group">
                <input class="form-control" type="email" placeholder="Enter please your e-mail">
              </div>
              <div class="form-group">
                <textarea name="your-message" rows="10" class="form-control" placeholder="Enter please your message"></textarea>
              </div>
              <div class="form-group">
                <button class="btn btn-white" type="button">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>
@endsection