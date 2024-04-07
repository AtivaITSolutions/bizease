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
          <li class="active">
            <a href="javascript:void(0);">Try Moile App</a>
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
              <a href="javascript:void(0);">About us</a>
              <a href="javascript:void(0);">Media</a>
              <a href="javascript:void(0);">Blogs</a>
              <a href="javascript:void(0);">Faqs</a>
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