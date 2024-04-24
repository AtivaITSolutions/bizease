<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>


    <meta property="og:locale" content="en_US" key="og:locale" />
    <meta property="og:type" content="website" key="og:type" />
    <meta property="og:title" content="BizEase" key="og:title" />
    <meta property="og:description" content="BizEase." key="og:description" />
    <meta property="og:url" content="http://127.0.0.1:5501/index.html" key="og:url" />
    <meta property="og:site_name" content="BizEase" key="og:site_name" />
    <meta property="og:image" content="image" key="og:image" />
    <meta property="og:image:width" content="1200" key="og:image:width" />
    <meta property="og:image:height" content="628" key="og:image:height" />
    <meta property="og:image:type" content="image/png" key="og:image:type" />

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('landing-page-assets/assets/images/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('landing-page-assets/assets/images/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('landing-page-assets/assets/images/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('landing-page-assets/assets/images/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('landing-page-assets/assets/images/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('landing-page-assets/assets/images/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('landing-page-assets/assets/images/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('landing-page-assets/assets/images/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('landing-page-assets/assets/images/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('landing-page-assets/assets/images/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('landing-page-assets/assets/images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('landing-page-assets/assets/images/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('landing-page-assets/assets/images/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('landing-page-assets/assets/images/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">



    <link rel="preload" as="style" href="{{ asset('landing-page-assets/assets/style/bootstrap-style.min.css')}}" fetchpriority="high" onload="this.rel='stylesheet'" />
    <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css'> -->
    <link rel="preload" as="style" href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css' fetchpriority="high" onload="this.rel='stylesheet'" />
    <link rel="preload" as="style" href="{{ asset('landing-page-assets/assets/style/style.min.css')}}" fetchpriority="high" onload="this.rel='stylesheet'" />
    <link href="{{ asset('landing-page-assets/assets/style/custom.css')}}">

    <script src="{{ asset('landing-page-assets/lib/jquery/jquery.min.js')}}" fetchpriority="low"></script>
    <script src="{{ asset('landing-page-assets/lib/bootstrap/js/bootstrap.bundle.min.js') }}" fetchpriority="low"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js' fetchpriority="low"></script>
    <script src="{{ asset('landing-page-assets/assets/scripts/script.js')}}" fetchpriority="low"></script>

</head>

<body>
    @include('layouts.landing.header')

    <!-- hero section start -->
    <section class="heroMainWrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="rightBox">
                        <img src="{{ asset('landing-page-assets/assets/images/img1.jpg')}}" alt="hero1" fetchpriority="low" width="600" height="500" title="hero1" loading="lazy" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="leftBox">
                        <p>
                            Bizease offers a FREE Business Accounting Software tailored for Indian small businesses,
                            facilitating tasks such as invoicing, inventory management, and accounting. Its primary
                            objective is to streamline the daily operations of businessmen, enabling them to focus
                            on business expansion rather than administrative burdens.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero section end -->
    <!-- left right section start -->
    <section class="twocolumnSectionMain">
        <div class="repatedSection">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12 ">
                        <div class="imagebox">
                            <img src="{{ asset('landing-page-assets/assets/images/img1.jpg')}}" alt="hero1" fetchpriority="low" width="600" height="500" title="hero1" loading="lazy" />
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="contentbox">
                            <p>Even now, 70% of SMEs in India still resort to paper for generating bills, resulting
                                in extensive time devoted to manual data entry and calculations. When minor mishaps
                                arise, the entire business is at risk due to the absence of backup options. The
                                dearth of resources can greatly burden business owners, diverting them from
                                essential tasks. Small Business Accounting Software is in dire need of a digital
                                transformation—an upgrade that is both uncomplicated and efficient. We endeavor to
                                introduce a streamlined solution tailored to their needs, thus introducing Bizease!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="repatedSection">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="contentbox">
                            <p>We're discussing the enhancement of the largest segment in our nation, namely the
                                'Small Business Sector,' which serves as the heartbeat of our economy. One of the
                                primary challenges faced by small and medium enterprises (SMEs) is the limited
                                access to adequate technology. Alleviating this situation will significantly
                                contribute to the nurturing and sustainability of SMEs. To ensure India's emergence
                                as a prominent economic player in the years to come, businesses need to prioritize
                                generating revenue over being bogged down in financial calculations. Bizease
                                essentially facilitates easier business accounting through modern digital methods!
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 ">
                        <div class="imagebox">
                            <img src="{{ asset('landing-page-assets/assets/images/img1.jpg')}}" alt="hero1" fetchpriority="low" width="600" height="500" title="hero1" loading="lazy" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- left right section end -->
    <!-- bussiness app section start -->
    <section class="businessappsection">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bussinessbox">
                        <div class="leftboxse">
                            <div class="binnerbox">
                                <div class="innercardview">
                                    <span class="iconset">
                                        <img src="http://www.listercarterhomes.com/wp-content/uploads/2013/11/dummy-image-square-150x150.jpg" alt="img">
                                    </span>
                                    <p><span>platforms</span></p>
                                    <p>Android and windows</p>
                                </div>
                            </div>
                            <div class="binnerbox">
                                <div class="innercardview">
                                    <span class="iconset">
                                        <img src="http://www.listercarterhomes.com/wp-content/uploads/2013/11/dummy-image-square-150x150.jpg" alt="img">
                                    </span>
                                    <p><span>platforms</span></p>
                                    <p>Android and windows</p>
                                </div>
                            </div>
                            <div class="binnerbox">
                                <div class="innercardview">
                                    <span class="iconset">
                                        <img src="http://www.listercarterhomes.com/wp-content/uploads/2013/11/dummy-image-square-150x150.jpg" alt="img">
                                    </span>
                                    <p><span>platforms</span></p>
                                    <p>Android and windows</p>
                                </div>
                            </div>
                            <div class="binnerbox">
                                <div class="innercardview">
                                    <span class="iconset">
                                        <img src="http://www.listercarterhomes.com/wp-content/uploads/2013/11/dummy-image-square-150x150.jpg" alt="img">
                                    </span>
                                    <p><span>platforms</span></p>
                                    <p>Android and windows</p>
                                </div>
                            </div>
                        </div>
                        <div class="rightbox">
                            <div class="innercard">
                                <p>A Business Accounting App like Bizease (accessible as both an Android and Desktop
                                    App) ensures that the financial data of the business is always maintained with
                                    100% accuracy. It operates offline, enabling users to utilize it even without a
                                    reliable internet connection. Bizease App provides a comprehensive overview of
                                    assets, liabilities, and business equity, serving as a foundation for effective
                                    planning of accounting activities. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- bussiness app section end -->

    @include('layouts.landing.footer')

</body>

</html>