<header fetchpriority="high" class="header" id="myHeader">
  <div class="container">
    <div class="row-wrap">
      <div class="logo-wrap">
        <div class="logo">
          <a href="index.html" target="_blank">
            <img src="{{ asset('landing-page-assets/assets/images/logo.png')}}" alt="BizEase" width="80" height="92" title="BizEase">
          </a>
        </div>
      </div>
      <div class="nav-wrap">
        <ul class="nav-list">
          <li class="submenuMain active">
            <a href="javascript:void(0);">
              <svg width="18" height="26" viewBox="0 0 18 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 26H3C2.20435 26 1.44129 25.6839 0.87868 25.1213C0.316071 24.5587 0 23.7956 0 23V3C0 2.20435 0.316071 1.44129 0.87868 0.87868C1.44129 0.316071 2.20435 0 3 0H15C15.7956 0 16.5587 0.316071 17.1213 0.87868C17.6839 1.44129 18 2.20435 18 3V23C18 23.7956 17.6839 24.5587 17.1213 25.1213C16.5587 25.6839 15.7956 26 15 26ZM3 2C2.73478 2 2.48043 2.10536 2.29289 2.29289C2.10536 2.48043 2 2.73478 2 3V23C2 23.2652 2.10536 23.5196 2.29289 23.7071C2.48043 23.8946 2.73478 24 3 24H15C15.2652 24 15.5196 23.8946 15.7071 23.7071C15.8946 23.5196 16 23.2652 16 23V3C16 2.73478 15.8946 2.48043 15.7071 2.29289C15.5196 2.10536 15.2652 2 15 2H3Z" fill="currentColor" />
                <path d="M11 4H7C6.46957 4 5.96086 3.78929 5.58579 3.41421C5.21071 3.03914 5 2.53043 5 2V1C5 0.734784 5.10536 0.48043 5.29289 0.292893C5.48043 0.105357 5.73478 0 6 0H12C12.2652 0 12.5196 0.105357 12.7071 0.292893C12.8946 0.48043 13 0.734784 13 1V2C13 2.53043 12.7893 3.03914 12.4142 3.41421C12.0391 3.78929 11.5304 4 11 4Z" fill="currentColor" />
              </svg>&nbsp; Try Moile App</a>
            <div class="mobiescanBox">
              <div class="innerbox">
                <div class="scannerimg">
                  <img src="{{ asset('landing-page-assets/assets/images/qrcode.png')}}" alt="QR cocde" width="200" height="200">
                </div>
                <div class="webContent">
                  <p class="boxTitle">Scan with your mobile camera</p>
                  <p>Monitor your business activity from anywhere in the world, sync mobile app with desktop app.</p>
                  <div class="formdata">
                    <input type="text" class="formInput" placeholder="Enter Mobile Number">
                    <button class="btnprimay">Get the App</button>
                  </div>
                </div>
              </div>
            </div>
          </li>

          @if(Auth::check())
          <li><a href="{{ action([\App\Http\Controllers\HomeController::class, 'index']) }}">@lang('home.home')</a></li>
          @endif
          @if(Route::has('frontend-pages') && config('app.env') != 'demo'
          && !empty($frontend_pages))
          @foreach($frontend_pages as $page)
          <li><a href="{{ action([\Modules\Superadmin\Http\Controllers\PageController::class, 'showPage'], $page->slug) }}">{{$page->title}}</a></li>
          @endforeach
          @endif
          @if(Route::has('pricing') && config('app.env') != 'demo')
          <li><a href="{{ action([\Modules\Superadmin\Http\Controllers\PricingController::class, 'index']) }}">@lang('superadmin::lang.pricing')</a></li>
          @endif
          @if(Route::has('repair-status'))
          <li>
            <a href="{{ action([\Modules\Repair\Http\Controllers\CustomerRepairStatusController::class, 'index']) }}">
              @lang('repair::lang.repair_status')
            </a>
          </li>
          @endif


          <li class="submenuMain">
            <button class="submenu">Company</button>
            <div class="sub-menu-alt">
              <a href="{{ route('about-us') }}">About us</a>
              <!-- <a href="javascript:void(0);">Media</a>
              <a href="javascript:void(0);">Blogs</a>
              <a href="javascript:void(0);">Faqs</a> -->
            </div>
          </li>
          @if (Route::has('login'))
          @if(!Auth::check())
          <li><a href="{{ route('login') }}">@lang('lang_v1.login')</a></li>
          @if(config('constants.allow_registration'))
          <li><a href="{{ route('business.getRegister') }}">@lang('lang_v1.register')</a></li>
          @endif
          @endif
          @endif
        </ul>
      </div>
      <div class="hamburger">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </div>
    </div>
  </div>
</header>