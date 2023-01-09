<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    {!! ReCaptcha::htmlScriptTagJsApi() !!}

    <style>
        /* check if user on phone */
        @media (max-width: 767px) {
            #label_optional_settings {
                font-size: 12px;
            }

            #check-optional-settings {
                width: 12px;
                height: 12px;
            }
        }

        /* check if user on tablet */
        @media (min-width: 768px) and (max-width: 991px) {
            #label_optional_settings {
                font-size: 14px;
            }

            #check-optional-settings {
                width: 14px;
                height: 14px;
            }
        }

        /* check if user on desktop */
        @media (min-width: 992px) and (max-width: 1199px) {
            #label_optional_settings {
                font-size: 15px;
            }

            #check-optional-settings {
                width: 15px;
                height: 15px;
            }
        }

        /* check if user on large desktop */
        @media (min-width: 1200px) {
            #label_optional_settings {
                font-size: 17px;
            }

            #check-optional-settings {
                width: 17px;
                height: 17px;
            }
        }
    </style>
</head>

<body>
    <div class="overflow-hidden">
        <div class="bg__purple">
            <nav class="navbar navbar-expand-lg wrapper__navbar fixed position-relative z-2 ">
                <div class="container">
                    <a class="navbar-brand d-flex align-items-center z-3" href="#">
                        <img src="{{ asset('assets/images/Frame (1).png') }}" alt="" />
                        <span class="bold font__size--22 text__22-1024 color__white ml-2 nunito">
                            {{env('APP_NAME')}}
                        </span>
                    </a>
                    <div class="navbar__toogle d-flex d-lg-none" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="collapse navbar-collapse navbar__menu centered" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link bold font__size--12 text__12-1024 color__white"
                                    href="#click-collection"> COLLECTIONS </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bold font__size--12 text__12-1024 color__white" href="#click-studio">
                                    STUDIO </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bold font__size--12 text__12-1024 color__white"
                                    href="#click-testimonial"> TESTIMONIAL </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bold font__size--12 text__12-1024 color__white" href="#click-faq">
                                    FAQ </a>
                            </li>
                            <li class="nav-item">
                                <a href="#click-contact"
                                    class="btn__contact bold font__size--14 text__14-1024 color__white d-inline-block mx-auto d-lg-none">
                                    Contact Us </a>
                            </li>
                            <li class="nav-item d-block d-lg-none">
                                <hr class="hr__menu" />
                                <div class="wrapper__sosmed-list d-flex justify-content-center align-items-center">
                                    <a href="#!">
                                        <img src="{{ asset('assets/images/Frame (3).png') }}" alt="" />
                                    </a>
                                    <a href="#!">
                                        <img src="{{ asset('assets/images/Frame (4).png') }}" alt="" />
                                    </a>
                                    <a href="#!">
                                        <img src="{{ asset('assets/images/Frame (5).png') }}" alt="" />
                                    </a>
                                    <a href="#!">
                                        <img src="{{ asset('assets/images/Frame (6).png') }}" alt="" />
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href="#click-contact"
                        class="btn__contact ml-auto bold font__size--14 text__14-1024 color__white d-none d-lg-block">
                        Contact Us </a>
                </div>
            </nav>
            <section class="section__head position-relative pt-4 overflow-hidden">
                <img src="{{ asset('assets/images/Group 2672.png') }}" class="path__5" alt="" />
                <div class="container position-relative">
                    <div class="wrapper__character d-none d-lg-block">
                        <div class="position-relative">
                            <img src="{{ asset('assets/images/aseet 2.png') }}" class="path__2 animate__roateRight"
                                alt="" />
                            <img src="{{ asset('assets/images/aseet 1.png') }}" class="path__3 animate__scaleROtate"
                                alt="" />
                            <img src="{{ asset('assets/images/aseet 3.png') }}" class="path__4 animate__jump-1"
                                alt="" />
                            <img src="{{ asset('assets/images/Group 3403.png') }}" class="chacter" alt="" />
                        </div>
                    </div>
                    <div class="row mt__4">
                        <div class="col-lg-9 col-xl-7 position-relative text-center text-lg-left z-3">
                            <h1 class="bold font__size--60 text__60-1024 text__60-sm color__white mb-0"> Let's create
                                beautiful <br class="d-none d-lg-block" /> music <span
                                    class="position-relative wrapper__round-text">
                                    <img src="{{ asset('assets/images/Highlight_07.png') }}" class="round" alt="" />
                                    with us </span>
                            </h1>
                            <p class="medium lh-2 font__size--18 text__18-1024 text__18-xs color__white mt-4 mb-4"> We
                                are the best musical instrument rental place in London. We <br
                                    class="d-none d-xl-block" /> provide a variety of musical instruments that you can
                                rent <br class="d-none d-xl-block" /> anytime and anywhere 😍 </p>
                            <div
                                class="wrapper__box-price wrap__flex-sm-50 text-center text-md-left justify-content-between align-items-center">
                                <form action="{{url('create')}}" method="post" id="{{getFormId()}}"
                                    enctype="multipart/form-data" id="the_only_form">
                                    @csrf

                                    <!-- Choose Category -->
                                    <div class="form-group" id="div_choose_category">
                                        <select class="form-control" id="choose-category" name="category">
                                            <option value="kode">Kode/Url</option>
                                            {{-- <option value="image">Image</option> --}}
                                            <option value="text">Text</option>
                                        </select>
                                    </div>
                                    <div class="form-check" id="div_check_optional_settings">
                                        <input class="form-check-input" type="checkbox" name="optional_settings"
                                            id="check-optional-settings">
                                        <label class="form-check-label" for="check-optional-settings"
                                            id="label_optional_settings">
                                            Optional Settings (With Password)
                                        </label>
                                        <hr />
                                    </div>


                                    <!-- Data Type (Kode/Url, Image, Text) -->
                                    <div class="form-group" id="kode_category" style="display: block">
                                        <h5 class="semi-bold font__size--14 text__14-1024 color__gray-1"> URL /
                                            {{env('APP_NAME')}} </h5>
                                        <input type="text" class="form-control @error('kode') is-invalid @enderror"
                                            name="kode" id="kode_field" autocomplete="off">
                                    </div>
                                    {{-- <div class="form-group" id="image_category" style="display: none">
                                        <h5 class="semi-bold font__size--14 text__14-1024 color__gray-1"> Image </h5>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                                            name="image" id="image_field" autocomplete="off">
                                    </div> --}}
                                    <div class="form-group" id="text_category" style="display: none">
                                        <h5 class="semi-bold font__size--14 text__14-1024 color__gray-1"> Text </h5>
                                        <textarea class="form-control @error('text') is-invalid @enderror" name="text"
                                            id="text_field" rows="5" autocomplete="off"></textarea>
                                    </div>

                                    <!-- Password Required -->
                                    <div class="form-group" id="div_password_req_field" style="display: none;">
                                        <h5 class="semi-bold font__size--14 text__14-1024 color__gray-1">
                                            Password
                                        </h5>
                                        <input type="password" class="form-control" name="password_req_field"
                                            id="password_req_field" autocomplete="off">
                                    </div>



                                    <!-- Password Options -->
                                    <div class="row" id="password-options" style="display: none">
                                        <div class="col-md-6">
                                            <!-- password -->
                                            <div class="form-group">
                                                <h5 class="semi-bold font__size--14 text__14-1024 color__gray-1">
                                                    Password
                                                </h5>
                                                <input type="password" class="form-control" name="password"
                                                    id="password_field" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- expired -->
                                            <div class="form-group">
                                                <h5 class="semi-bold font__size--14 text__14-1024 color__gray-1">
                                                    Expired
                                                </h5>
                                                <select class="form-control" name="expired" id="expired_select"
                                                    autocomplete="off">
                                                    <option value="0">No Limit</option>
                                                    <option value="1">1 Minute</option>
                                                    <option value="5">5 Minute</option>
                                                    <option value="30">30 Minute</option>
                                                    <option value="60">1 Hour</option>
                                                    <option value="360">6 Hours</option>
                                                    <option value="1440">1 Days</option>
                                                    <option value="4320">3 Days</option>
                                                    <option value="10080">7 Days</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Button Things -->
                                    {{-- {!! htmlFormButton("GO", ['class' => 'btn__contact ml-auto bold font__size--14
                                    text__14-1024 color__white']) !!} --}}
                                    <div class="form-group" style="display: none" id="div_go_submit_btn">
                                        <button type="submit"
                                            class="btn__contact ml-auto bold font__size--14 text__14-1024 color__white"
                                            id="go_submit_btn">
                                            GO
                                        </button>
                                    </div>
                                    <div class="form-group" style="display: none" id="div_go_check_btn">
                                        <button type="button"
                                            class="btn__contact ml-auto bold font__size--14 text__14-1024 color__white"
                                            id="go_check_btn">
                                            CHECK
                                        </button>
                                    </div>
                                </form>
                            </div>
                            @if (session('success'))
                            <div class="wrapper__box-price wrap__flex-sm-50 text-center text-md-left w-auto justify-content-around align-items-center mt-3"
                                id="result_kode">
                                <div class="list grid mb-4 mb-md-0">
                                </div>
                                <h5 class="semi-bold font__size--14 text__14-1024 color__gray-1"> Result </h5>
                                <div class="inline-block">
                                    <h3 id="resultKode">{{session('success')['kode']}}</h3>
                                </div>
                                @include('layouts.result')
                                @endif
                            </div>
                        </div>
                    </div>
            </section>
        </div>
        <section>
            <div class="container">
                <div class="wrapper__chooce bg__white w-100">
                    <div class="text-center">
                        <h1 class="extra-bold font__size--55 text__50-1024 text__50-sm mb-4"> Why <span
                                class="color__purple">choose us?</span>
                        </h1>
                        <p class="lh-2 semi-bold font__size--14 text__14-1024 color__black opacity__5"> We have various
                            advantages and conveniences that we offer you as the best musical <br
                                class="d-none d-md-block" /> instrument rental place and we make sure you are happy for
                            it </p>
                        <div class="row justify-content-center mt-5">
                            <div class="col-xl-10">
                                <div class="row justify-content-center">
                                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                                        <div class="wrapper__list-choose flex-fill h-100 text-center">
                                            <img src="{{ asset('assets/images/Group 3407.png') }}" alt="" />
                                            <h5 class="bold font__size--18 text__18-1024 text__18-xs color__black"> Book
                                                and cancel anytime </h5>
                                            <p class="medium font__size--14 text__14-1024 color__gray-1 lh-2 m-0"> When
                                                you rent a musical instrument in our shop, you can decide when you want
                                                to rent it and cancel it at any time </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                                        <div class="wrapper__list-choose flex-fill h-100 text-center">
                                            <img src="{{ asset('assets/images/Group 3408.png') }}" alt="" />
                                            <h5 class="bold font__size--18 text__18-1024 text__18-xs color__black"> Very
                                                low rental rates </h5>
                                            <p class="medium font__size--14 text__14-1024 color__gray-1 lh-2 m-0"> We
                                                have a variety of rental items with good quality but believe me, even so
                                                it will not drain your pocket </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="wrapper__list-choose flex-fill h-100 text-center">
                                            <img src="{{ asset('assets/images/Group 3409.png') }}" alt="" />
                                            <h5 class="bold font__size--18 text__18-1024 text__18-xs color__black"> Free
                                                shipping anywhere </h5>
                                            <p class="medium font__size--14 text__14-1024 color__gray-1 lh-2 m-0"> If
                                                you have made a rental but you can't pick up your item at our shop,
                                                don't worry, we will deliver it to you </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="click-collection">
            <div class="container">
                <div class="row text-center text-lg-left">
                    <div class="col-lg-4">
                        <h2 class="extra-bold font__size--55 text__50-1024 text__50-sm position-relative"> Our best
                            <span class="color__purple">collections</span>
                            <img src="{{ asset('assets/images/Underline_06.png') }}"
                                class="path__underline d-none d-lg-block" alt="" />
                        </h2>
                    </div>
                    <div class="col-lg-5">
                        <p class="medium font__size--14 text__14-1024 color__gray-1 lh-2 "> We always prepare various
                            items with the best quality, take a look at the various best collections we have for you,
                            all of our collections are the best in their class </p>
                    </div>
                    <div class="col-lg-3 text=lg-right">
                        <a href="#!"
                            class="btn btn__outlined--black btn__more shadow font__size--16 text__16-1024 border-50 semi-bold no__opacity">
                            See more items </a>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-sm-6 col-lg-3">
                        <div
                            class="wrapper__list-items overflow-hidden position-relative z-3 d-flex justify-content-center align-items-center mt-4 mt-sm-0">
                            <img src="{{ asset('assets/images/Mask Group (2).png') }}" class="bg" alt="" />
                            <img src="{{ asset('assets/images/gitar kunto aji(1) 1.png') }}"
                                class="item position-relative z-1" alt="" />
                            <div class="desc bg__white d-flex justify-content-between z-2">
                                <div class="lh-1">
                                    <h5 class="font__size--20 text__20-1024 bold color__black mb-0 text-capitalize">
                                        Guitar </h5>
                                    <p class="mb-0 font__size--12 text__12-1024 color__gray-1"> 12 Item </p>
                                </div>
                                <a href="#!" class="d-flex justify-content-center align-items-center popup">
                                    <img src="{{ asset('assets/images/Frame (1as).png') }}" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div
                            class="wrapper__list-items overflow-hidden position-relative z-3 d-flex justify-content-center align-items-center mt-4 mt-sm-5">
                            <img src="{{ asset('assets/images/Mask Group (2).png') }}" class="bg" alt="" />
                            <img src="{{ asset('assets/images/Mask Group (1).png') }}"
                                class="item position-relative z-1" alt="" />
                            <div class="desc bg__white d-flex justify-content-between z-2">
                                <div class="lh-1">
                                    <h5 class="font__size--20 text__20-1024 bold color__black mb-0 text-capitalize">
                                        guitar keyboard </h5>
                                    <p class="mb-0 font__size--12 text__12-1024 color__gray-1"> 12 Item </p>
                                </div>
                                <a href="#!" class="d-flex justify-content-center align-items-center popup">
                                    <img src="{{ asset('assets/images/Frame (1as).png') }}" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div
                            class="wrapper__list-items overflow-hidden position-relative z-3 d-flex justify-content-center align-items-center mt-4 mt-sm-0">
                            <img src="{{ asset('assets/images/Mask Group (2).png') }}" class="bg" alt="" />
                            <img src="{{ asset('assets/images/snare.png') }}" class="item position-relative z-1"
                                alt="" />
                            <div class="desc bg__white d-flex justify-content-between z-2">
                                <div class="lh-1">
                                    <h5 class="font__size--20 text__20-1024 bold color__black mb-0 text-capitalize">
                                        Snare </h5>
                                    <p class="mb-0 font__size--12 text__12-1024 color__gray-1"> 10 Item </p>
                                </div>
                                <a href="#!" class="d-flex justify-content-center align-items-center popup">
                                    <img src="{{ asset('assets/images/Frame (1as).png') }}" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div
                            class="wrapper__list-items overflow-hidden position-relative z-3 d-flex justify-content-center align-items-center mt-4 mt-sm-5">
                            <img src="{{ asset('assets/images/Mask Group (2).png') }}" class="bg" alt="" />
                            <img src="{{ asset('assets/images/sound.png') }}" class="item position-relative z-1"
                                alt="" />
                            <div class="desc bg__white d-flex justify-content-between z-2">
                                <div class="lh-1">
                                    <h5 class="font__size--20 text__20-1024 bold color__black mb-0 text-capitalize">
                                        Sound </h5>
                                    <p class="mb-0 font__size--12 text__12-1024 color__gray-1"> 8 Item </p>
                                </div>
                                <a href="#!" class="d-flex justify-content-center align-items-center popup">
                                    <img src="{{ asset('assets/images/Frame (1as).png') }}" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="click-studio" class="bg__black position-relative">
            <img src="{{ asset('assets/images/Mask Group (13e).png') }}" class="path__13" alt="" />
            <div class="container position-relative z-2">
                <div class="text-center">
                    <h2 class="extra-bold font__size--55 text__50-1024 text__50-sm color__white"> Visit our <span
                            class="color__purple">studio</span>
                    </h2>
                    <p class="medium font__size--14 text__14-1024 color__gray-1 lh-2 "> Visit our studio to choose the
                        musical instrument you want, we will be very happy if you come <br class="d-none d-md-block" />
                        to our studio and see the various collections we have </p>
                    <div class="position-relative wrapper__map mt-5">
                        <img src="{{ asset('assets/images/Arrow_09.png') }}" class="arrow__1 d-none d-lg-block"
                            alt="" />
                        <img src="{{ asset('assets/images/Arrow_01.png') }}" class="arrow__2 d-none d-lg-block"
                            alt="" />
                        <div class="wrapper__item-map mb-4 mb-lg-0">
                            <div class="position-relative">
                                <div class="object__map bg__white text-left">
                                    <img src="{{ asset('assets/images/unsplash_p6od5RKDF8o.png') }}" class="cover__img"
                                        alt="" />
                                    <h5 class="bold font__size--14 text__14-1024 color__black mt-3 mb-2">
                                        {{env('APP_NAME')}} Studio - Studio 2
                                    </h5>
                                    <p class="medium font__size--14 text__14-1024 color__gray-2 mb-3"> 24, Pink Triangle
                                        Park - London </p>
                                    <a href="#!"
                                        class="semi-bold text-center font__size--18 text__18-1024 text__18-xs color__white btn__get">
                                        Get Direction </a>
                                </div>
                                <div class="point mt-5 position-relative d-none d-lg-block">
                                    <div
                                        class="position-relative mx-auto  z-2 dot d-flex justify-content-center align-items-center">
                                        <div></div>
                                    </div>
                                    <div class="bg-dot"></div>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper__item-map two">
                            <div class="position-relative">
                                <div class="object__map bg__white text-left">
                                    <img src="{{ asset('assets/images/unsplash_7KWhvhFftpk.png') }}" class="cover__img"
                                        alt="" />
                                    <h5 class="bold font__size--14 text__14-1024 color__black mt-3 mb-2">
                                        {{env('APP_NAME')}} Studio - Studio 1
                                    </h5>
                                    <p class="medium font__size--14 text__14-1024 color__gray-2 mb-3"> 24, Guererro
                                        Street. UK - London </p>
                                    <a href="#!"
                                        class="semi-bold text-center font__size--18 text__18-1024 text__18-xs color__white btn__get">
                                        Get Direction </a>
                                </div>
                                <div class="point mt-5 position-relative d-none d-lg-block">
                                    <div
                                        class="position-relative mx-auto  z-2 dot d-flex justify-content-center align-items-center">
                                        <div></div>
                                    </div>
                                    <div class="bg-dot"></div>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('assets/images/Rectangle 399.png') }}" class="map d-none d-lg-block"
                            alt="" />
                    </div>
                </div>
            </div>
        </section>
        <section id="click-testimonial">
            <div class="container">
                <div class="wrapper__customer position-relative">
                    <img src="{{ asset('assets/images/,,.png') }}" class="path__6 d-none d-md-block" alt="" />
                    <div class="row text-center text-lg-left">
                        <div class="col-lg-5 my-auto">
                            <h2 class="extra-bold font__size--55 text__50-1024 text__50-sm"> What our customers <span
                                    class="color__purple">say</span>
                            </h2>
                        </div>
                        <div class="col-lg-5 my-auto">
                            <p class="medium font__size--14 text__14-1024 color__gray-1 lh-2 "> The satisfaction of our
                                customers is our priority, see how they give their testimonials to our services </p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-11">
                            <div class="wrapper__slick-customer">
                                <div class="items-slick">
                                    <div class="wrap">
                                        <div class="d-flex star justify-content-start align-items-center">
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                        </div>
                                        <p class="medium font__size--14 text__14-1024 color__gray-1 lh-2 my-4 ">
                                            {{env('APP_NAME')}} is the best place to rent a variety of musical
                                            instruments. Absolutely love it! You should try it too.
                                        </p>
                                        <div class="d-flex align-items-center desc">
                                            <img src="{{ asset('assets/images/Group 3384.png') }}" class="profile"
                                                alt="" />
                                            <div class="ml-2">
                                                <h5 class="bold font__size--14 text__14-1024 mb-0"> Roman Nifty </h5>
                                                <p class="medium font__size--14 text__14-1024 m-0 color__gray-1">
                                                    Musician </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="items-slick">
                                    <div class="wrap">
                                        <div class="d-flex star justify-content-start align-items-center">
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                        </div>
                                        <p class="medium font__size--14 text__14-1024 color__gray-1 lh-2 my-4 ">
                                            {{env('APP_NAME')}} is the best place to rent a variety of musical
                                            instruments. Absolutely love it! You should try it too.
                                        </p>
                                        <div class="d-flex align-items-center desc">
                                            <img src="{{ asset('assets/images/Group 3385.png') }}" class="profile"
                                                alt="" />
                                            <div class="ml-2">
                                                <h5 class="bold font__size--14 text__14-1024 mb-0"> Roman Nifty </h5>
                                                <p class="medium font__size--14 text__14-1024 m-0 color__gray-1">
                                                    Musician </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="items-slick">
                                    <div class="wrap">
                                        <div class="d-flex star justify-content-start align-items-center">
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                        </div>
                                        <p class="medium font__size--14 text__14-1024 color__gray-1 lh-2 my-4 ">
                                            {{env('APP_NAME')}} is the best place to rent a variety of musical
                                            instruments. Absolutely love it! You should try it too.
                                        </p>
                                        <div class="d-flex align-items-center desc">
                                            <img src="{{ asset('assets/images/Group 3386.png') }}" class="profile"
                                                alt="" />
                                            <div class="ml-2">
                                                <h5 class="bold font__size--14 text__14-1024 mb-0"> Roman Nifty </h5>
                                                <p class="medium font__size--14 text__14-1024 m-0 color__gray-1">
                                                    Musician </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="items-slick">
                                    <div class="wrap">
                                        <div class="d-flex star justify-content-start align-items-center">
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                        </div>
                                        <p class="medium font__size--14 text__14-1024 color__gray-1 lh-2 my-4 ">
                                            {{env('APP_NAME')}} is the best place to rent a variety of musical
                                            instruments. Absolutely love it! You should try it too.
                                        </p>
                                        <div class="d-flex align-items-center desc">
                                            <img src="{{ asset('assets/images/Group 3384.png') }}" class="profile"
                                                alt="" />
                                            <div class="ml-2">
                                                <h5 class="bold font__size--14 text__14-1024 mb-0"> Roman Nifty </h5>
                                                <p class="medium font__size--14 text__14-1024 m-0 color__gray-1">
                                                    Musician </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="items-slick">
                                    <div class="wrap">
                                        <div class="d-flex star justify-content-start align-items-center">
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                        </div>
                                        <p class="medium font__size--14 text__14-1024 color__gray-1 lh-2 my-4 ">
                                            {{env('APP_NAME')}} is the best place to rent a variety of musical
                                            instruments. Absolutely love it! You should try it too.
                                        </p>
                                        <div class="d-flex align-items-center desc">
                                            <img src="{{ asset('assets/images/Group 3385.png') }}" class="profile"
                                                alt="" />
                                            <div class="ml-2">
                                                <h5 class="bold font__size--14 text__14-1024 mb-0"> Roman Nifty </h5>
                                                <p class="medium font__size--14 text__14-1024 m-0 color__gray-1">
                                                    Musician </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="items-slick">
                                    <div class="wrap">
                                        <div class="d-flex star justify-content-start align-items-center">
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                            <img src="{{ asset('assets/images/Frame (11).png') }}" alt="" />
                                        </div>
                                        <p class="medium font__size--14 text__14-1024 color__gray-1 lh-2 my-4 ">
                                            {{env('APP_NAME')}} is the best place to rent a variety of musical
                                            instruments. Absolutely love it! You should try it too.
                                        </p>
                                        <div class="d-flex align-items-center desc">
                                            <img src="{{ asset('assets/images/Group 3386.png') }}" class="profile"
                                                alt="" />
                                            <div class="ml-2">
                                                <h5 class="bold font__size--14 text__14-1024 mb-0"> Roman Nifty </h5>
                                                <p class="medium font__size--14 text__14-1024 m-0 color__gray-1">
                                                    Musician </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 text-center text-lg-left my-auto">
                            <div
                                class="wrapper__arrows d-flex d-lg-block justify-content-center align-items-center mt-4 mt-lg-0">
                                <div
                                    class="d-flex left order-lg-1 order-12 justify-content-center align-items-center pointer ml-3 ml-lg-0">
                                    <img src="{{ asset('assets/images/Arrow - Right 3.png') }}" alt="" />
                                </div>
                                <div
                                    class="d-flex right order-1 order-lg-12 justify-content-center align-items-center pointer mt-lg-3">
                                    <img src="{{ asset('assets/images/Arrow - Right 3 (1).png') }}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="click-faq">
            <div class="container">
                <div class="text-center position-relative">
                    <img src="{{ asset('assets/images/_.png') }}" class="d-none d-md-block path__7" alt="" />
                    <img src="{{ asset('assets/images/_ (1).png') }}" class="d-none d-md-block path__8" alt="" />
                    <h1 class="extra-bold font__size--55 text__50-1024 text__50-sm mb-4"> Frequently asked <span
                            class="color__purple">questions</span>
                    </h1>
                    <p class="lh-2 semi-bold font__size--14 text__14-1024 color__gray-1"> Don't worry if you have any
                        questions for us, we will always be ready to help you and <br /> answer all the questions you
                        have for us </p>
                </div>
                <div class="mt-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <div class="wrapper__accordion mb-4">
                                <div class="head d-flex justify-content-between align-items-center pointer">
                                    <h3 class="bold font__size--14 text__14-1024 color__black m-0"> How do I get rentals
                                        on Musically? </h3>
                                    <div class="icon-close position-relative flex-shrink-0 ml-2"></div>
                                </div>
                                <div class="desc">
                                    <p class="lh-2 normal font__size--14 text__14-1024 color__gray-1 m-0"> You can come
                                        to our studio and choose your own musical instrument that you will rent. If you
                                        don't have time to come to our studio, you can make a rental via our website or
                                        contact us at the contact information provided </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="wrapper__accordion mb-4">
                                <div class="head d-flex justify-content-between align-items-center pointer">
                                    <h3 class="bold font__size--14 text__14-1024 color__black m-0"> How do I get rentals
                                        on Musically? </h3>
                                    <div class="icon-close position-relative flex-shrink-0 ml-2"></div>
                                </div>
                                <div class="desc">
                                    <p class="lh-2 normal font__size--14 text__14-1024 color__gray-1 m-0"> You can come
                                        to our studio and choose your own musical instrument that you will rent. If you
                                        don't have time to come to our studio, you can make a rental via our website or
                                        contact us at the contact information provided </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="wrapper__accordion mb-4">
                                <div class="head d-flex justify-content-between align-items-center pointer">
                                    <h3 class="bold font__size--14 text__14-1024 color__black m-0"> How do I get rentals
                                        on Musically? </h3>
                                    <div class="icon-close position-relative flex-shrink-0 ml-2"></div>
                                </div>
                                <div class="desc">
                                    <p class="lh-2 normal font__size--14 text__14-1024 color__gray-1 m-0"> You can come
                                        to our studio and choose your own musical instrument that you will rent. If you
                                        don't have time to come to our studio, you can make a rental via our website or
                                        contact us at the contact information provided </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="wrapper__accordion mb-4">
                                <div class="head d-flex justify-content-between align-items-center pointer">
                                    <h3 class="bold font__size--14 text__14-1024 color__black m-0"> How do I get rentals
                                        on Musically? </h3>
                                    <div class="icon-close position-relative flex-shrink-0 ml-2"></div>
                                </div>
                                <div class="desc">
                                    <p class="lh-2 normal font__size--14 text__14-1024 color__gray-1 m-0"> You can come
                                        to our studio and choose your own musical instrument that you will rent. If you
                                        don't have time to come to our studio, you can make a rental via our website or
                                        contact us at the contact information provided </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="wrapper__accordion mb-4">
                                <div class="head d-flex justify-content-between align-items-center pointer">
                                    <h3 class="bold font__size--14 text__14-1024 color__black m-0"> How do I get rentals
                                        on Musically? </h3>
                                    <div class="icon-close position-relative flex-shrink-0 ml-2"></div>
                                </div>
                                <div class="desc">
                                    <p class="lh-2 normal font__size--14 text__14-1024 color__gray-1 m-0"> You can come
                                        to our studio and choose your own musical instrument that you will rent. If you
                                        don't have time to come to our studio, you can make a rental via our website or
                                        contact us at the contact information provided </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="wrapper__accordion mb-4">
                                <div class="head d-flex justify-content-between align-items-center pointer">
                                    <h3 class="bold font__size--14 text__14-1024 color__black m-0"> How do I get rentals
                                        on Musically? </h3>
                                    <div class="icon-close position-relative flex-shrink-0 ml-2"></div>
                                </div>
                                <div class="desc">
                                    <p class="lh-2 normal font__size--14 text__14-1024 color__gray-1 m-0"> You can come
                                        to our studio and choose your own musical instrument that you will rent. If you
                                        don't have time to come to our studio, you can make a rental via our website or
                                        contact us at the contact information provided </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="wrapper__accordion mb-4">
                                <div class="head d-flex justify-content-between align-items-center pointer">
                                    <h3 class="bold font__size--14 text__14-1024 color__black m-0"> How do I get rentals
                                        on Musically? </h3>
                                    <div class="icon-close position-relative flex-shrink-0 ml-2"></div>
                                </div>
                                <div class="desc">
                                    <p class="lh-2 normal font__size--14 text__14-1024 color__gray-1 m-0"> You can come
                                        to our studio and choose your own musical instrument that you will rent. If you
                                        don't have time to come to our studio, you can make a rental via our website or
                                        contact us at the contact information provided </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="click-contact" class="pt-0">
            <div class="container">
                <div class="wrapper__contact bg__purple text-center position-relative z-3">
                    <img src="{{ asset('assets/images/Mask Group (24).png') }}" class="path__9" alt="" />
                    <img src="{{ asset('assets/images/Mask Group (145).png') }}" class="path__10" alt="" />
                    <img src="{{ asset('assets/images/aseet 4.png') }}" class="path__11 d-none d-md-block animate__jump"
                        alt="" />
                    <div class="position-relative z-2">
                        <h3 class="bold font__size--40 text__40-1024 color__white mb-0"> Let's choose a musical
                            instrument <br class="d-none d-md-block" /> that you like right now </h3>
                        <p class="medium font__size--14 text__14-1024 color__white opacity__5 my-4"> No need to hesitate
                            anymore to determine where you will rent various musical instruments <br
                                class="d-none d-md-block" /> with the best service, and the most complete collection. we
                            are the only one you should go to </p>
                        <a href="#!" class="btn__contact ml-auto bold font__size--14 text__14-1024 color__white">
                            Contact Us </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg__black pb-0 position-relative">
            <img src="{{ asset('assets/images/Mask Group (12).png') }}" class="path__12" alt="" />
            <div class="container mt__5 position-relative z-3">
                <div class="row mt-5 mt-lg-0 text-center text-md-left">
                    <div class="col-md-4 mb-5 mb-md-4 mb-lg-0 col-lg-2">
                        <div class="d-flex justify-content-md-start justify-content-center align-items-center">
                            <img src="{{ asset('assets/images/Frame (11a).png') }}" alt="" />
                            <span class="bold font__size--22 text__22-1024 color__white ml-2 nunito">
                                {{env('APP_NAME')}}
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 mb-lg-0 col-lg-4 offset-md-1">
                        <div class="row">
                            <div class="col-xl-6 mb-4">
                                <div
                                    class="d-md-flex justify-content-md-start justify-content-center align-items-start">
                                    <img src="{{ asset('assets/images/Call.png') }}" al class="mb-2 mb-md-0" t="" />
                                    <div class="ml-md-3">
                                        <h5 class="bold font__size--14 text__14-1024 color__white mb-2"> Phone </h5>
                                        <p class="medium font__size--12 text__12-1024 color__gray-1 mb-0"> +41 - 654 -
                                            763 -875 </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 mb-4">
                                <div
                                    class="d-md-flex justify-content-md-start justify-content-center align-items-start">
                                    <img src="{{ asset('assets/images/Message.png') }}" class="mb-2 mb-md-0" alt="" />
                                    <div class="ml-md-3">
                                        <h5 class="bold font__size--14 text__14-1024 color__white mb-2"> Email </h5>
                                        <p class="medium font__size--12 text__12-1024 color__gray-1 mb-0">
                                            hi@musiclystudio.co </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div
                                    class="d-md-flex justify-content-md-start justify-content-center align-items-start">
                                    <img src="{{ asset('assets/images/Home.png') }}" al class="mb-2 mb-md-0" t="" />
                                    <div class="ml-md-3">
                                        <h5 class="bold font__size--14 text__14-1024 color__white mb-2"> Studio </h5>
                                        <p class="medium font__size--12 text__12-1024 color__gray-1 mb-0"> 24, Guererro
                                            Street. UK - London (Studio 1) </p>
                                        <p class="medium font__size--12 text__12-1024 color__gray-1 mb-0"> 24, Pink
                                            Triangle Park - London (Studio 2) </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-1">
                        <div
                            class="wrapper__sosmed-list d-flex justify-content-lg-end justify-content-center align-items-center">
                            <a href="#!">
                                <img src="{{ asset('assets/images/Frame (3).png') }}" alt="" />
                            </a>
                            <a href="#!">
                                <img src="{{ asset('assets/images/Frame (4).png') }}" alt="" />
                            </a>
                            <a href="#!">
                                <img src="{{ asset('assets/images/Frame (5).png') }}" alt="" />
                            </a>
                            <a href="#!">
                                <img src="{{ asset('assets/images/Frame (6).png') }}" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
                <hr class="hr__footer mt__5 mb-0" />
                <div class="row py-4">
                    <div
                        class="col-md-6 mb-2 my-md-auto semi-bold font__size--12 text__12-1024 color__gray-1 text-center text-md-left">
                        Copyright © 2021 {{env('APP_NAME')}} - All Right Reserved </div>
                    <div class="col-md-6 my-auto text-md-right text-center">
                        <div class="d-flex justify-content-md-end justify-content-center align-items-center">
                            <a href="{{url('terms-conditions')}}"
                                class="semi-bold font__size--12 text__12-1024 color__gray-1 mr-3"> Terms of conditions
                            </a>
                            <a href="{{url('privacy-policy')}}"
                                class="semi-bold font__size--12 text__12-1024 color__gray-1 mr-3"> Privacy Policy </a>
                            <a href="{{url('copyright-policy')}}"
                                class="semi-bold font__size--12 text__12-1024 color__gray-1"> Copyright Policy </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="{{ asset('assets/js/index.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js">
</script>

<script>
    $(document).ajaxStart(function(){
        $.LoadingOverlay("show");
    });
    $(document).ajaxStop(function(){
        $.LoadingOverlay("hide");
    });
</script>

<script>
    const isValidUrl = urlString=> {
	  	var urlPattern = new RegExp('^(https?:\\/\\/)?'+ // validate protocol
	    '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // validate domain name
	    '((\\d{1,3}\\.){3}\\d{1,3}))'+ // validate OR ip (v4) address
	    '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // validate port and path
	    '(\\?[;&a-z\\d%_.~+=-]*)?'+ // validate query string
	    '(\\#[-a-z\\d_]*)?$','i'); // validate fragment locator
	  return !!urlPattern.test(urlString);
	}

    $('#kode_field').on('input', function () {
        let kode_field = $('#kode_field').val();

        if (isValidUrl(kode_field)) {
            $('#div_go_submit_btn').show();
            $('#div_go_check_btn').hide();
        } else if (kode_field.length == 0) {
            $('#div_go_submit_btn').hide();
            $('#div_go_check_btn').hide();
        } else {
            $('#div_go_check_btn').show();
            $('#div_go_submit_btn').hide();
        }
    })

    $('#go_check_btn').click(function () {
        // ajax request to check if kode has password
        let kode_field = $('#kode_field').val();

        $.ajax({
            url: "{{url('check-kode')}}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                kode: kode_field,
            },
            success: function (response) {
                if (response.status == 'error-expired') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: response.message,
                    })

                    $('#kode_field').val('');
                    $('#div_go_check_btn').hide();
                    $('#result_kode').hide();
                } else if (response.status == 'error-not-exist') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: response.message,
                    })

                    $('#kode_field').val('');
                    $('#div_go_check_btn').hide();
                    $('#result_kode').hide();
                } else if (response.status == 'success-password') {
                    $('#div_go_check_btn').hide();
                    $('#div_go_submit_btn').show();

                    $('#div_check_optional_settings').hide();
                    $('#div_choose_category').hide();
                    $('#div_password_req_field').show();

                    $('#kode_field').attr('readonly', true);
                    $('#password_req_field').attr('required', true);
                    $('#result_kode').hide();
                } else if (response.status == 'success-no-password') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: response.message + ' Silahkan submit data!',
                    })

                    $('#div_go_check_btn').hide();
                    $('#div_go_submit_btn').show();

                    $('#div_check_optional_settings').hide();
                    $('#div_choose_category').hide();
                    $('#div_password_req_field').hide();

                    $('#kode_field').attr('readonly', true);
                    $('#password_req_field').attr('required', false);
                    $('#result_kode').hide();
                }
            },
            error: function (error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                })
                $('#result_kode').hide();
            }
        });
    })
</script>

<script>
    $(document).ready(function () {
        $('#check-optional-settings').click(function () {
            if ($(this).is(':checked')) {
                // set to required
                $('#password_field').attr('required', true);
                $('#expired_select').attr('required', true);

                $('#password-options').show();
            } else {
                // set to not required
                $('#password_field').attr('required', false);
                $('#expired_select').attr('required', false);

                $('#password-options').hide();
            }
        });
    });
</script>

<script>
    $(document).ready(function () {
        $('#kode_field').attr('required', true);

        $('#choose-category').change(function () {
            var category = $(this).val();
            if (category == 'kode') {
                $('#div_go_submit_btn').hide();
                $('#kode_category').show();

                $('#image_category').hide();
                $('#text_category').hide();

                $('#kode_field').attr('required', true);
                $('#image_field').attr('required', false);
                $('#text_field').attr('required', false);
            } else if (category == 'image') {
                $('#div_go_submit_btn').show();
                $('#image_category').show();

                $('#kode_category').hide();
                $('#text_category').hide();

                $('#kode_field').attr('required', false);
                $('#image_field').attr('required', true);
                $('#text_field').attr('required', false);
            } else if (category == 'text') {
                $('#div_go_submit_btn').show();
                $('#text_category').show();

                $('#kode_category').hide();
                $('#image_category').hide();

                $('#kode_field').attr('required', false);
                $('#image_field').attr('required', false);
                $('#text_field').attr('required', true);
            } else {
                $('#kode_category').hide();
                $('#image_category').hide();
                $('#text_category').hide();

                $('#kode_field').attr('required', false);
                $('#image_field').attr('required', false);
                $('#text_field').attr('required', false);
            }
        })
    })
</script>

@if (Session::get('success')) <script>
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000,
      onOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    })
    Toast.fire({
      icon: 'success',
      title: "{{ session('success')['message'] }}"
    })
</script> @elseif(Session::get('error')) <script>
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000,
      onOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    })
    Toast.fire({
      icon: 'error',
      title: "{{ Session::get('error')['message'] }}"
    })
</script> @endif

</html>