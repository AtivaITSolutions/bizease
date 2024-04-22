<style>
  /* The popup chat - hidden by default */
  .chat-popup {
    display: block;
    position: fixed;
    bottom: 0;
    right: 15px;
    border: 3px solid #f1f1f1;
    z-index: 9;
  }
</style>
<footer>
  <div class="container">
    <div class="upperFooter">
      <div class="left">
        <a href="index.html" class="logo" aria-label="BizEase">
          <img src="{{ asset('landing-page-assets/assets/images/logo.png')}}" alt="BizEase" width="100" height="115" title="BizEase" loading="eager" />
        </a>
      </div>
      <div class="right">
        <ul>
          <li class="titleLi">
            Links
          </li>
          <li>
            <a href="javascript:void(0);" class="logo" aria-label="Our Story">Try Mobile app</a>
          </li>
          <li>
            <a  href="{{ action([\Modules\Superadmin\Http\Controllers\PricingController::class, 'index']) }}" class="logo" aria-label="Careers">pricing</a>
          </li>
        </ul>
        <ul>
          <li class="titleLi">
            Company
          </li>
          <li>
            <a href="javascript:void(0);" class="logo" aria-label="Our Cakes ">about us </a>
          </li>
          <!-- <li>
            <a href="javascript:void(0);" class="logo" aria-label="Bakers Portal">media</a>
          </li>
          <li>
            <a href="javascript:void(0);" class="logo" aria-label="Bakers Portal">Blogs</a>
          </li>
          <li>
            <a href="javascript:void(0);" class="logo" aria-label="Bakers Portal">Faqs</a>
          </li> -->
        </ul>
        <ul>
          <li class="titleLi">
            Contact us
          </li>
          <li>
            Email: <a href="mailto:" aria-label="Email">support@bizease.com</a>
          </li>
          <li>
            Phone: <a href="tel:" aria-label="Mobile">+91 9023651918</a>
          </li>
          <li class="socailMedia">
            <div class="socailmediaBox">
              <span class="socIcon">
                <a href="https://www.facebook.com/profile.php?id=61556159078298" target="_blank" aria-label="facebook" title="facebook">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M26.3347 0C28.3577 0 30 1.64238 30 3.66527V26.3347C30 28.3576 28.3576 30 26.3347 30H20.0964V18.6964H23.9987L24.7412 13.8553H20.0964V10.7137C20.0964 9.3893 20.7452 8.0983 22.8257 8.0983H24.9375V3.97682C24.9375 3.97682 23.0209 3.64975 21.1886 3.64975C17.3631 3.64975 14.8628 5.96824 14.8628 10.1656V13.8553H10.6104V18.6964H14.8628V30H3.66527C1.64238 30 0 28.3576 0 26.3347V3.66527C0 1.64238 1.64232 0 3.66527 0L26.3347 0Z" fill="currentColor" />
                  </svg>
                </a>
              </span>
              <span class="socIcon">
                <a href="https://www.instagram.com/bizease.app/?hl=en" target="_blank" aria-label="instagram" title="instagram">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M26.3347 0C28.3577 0 30 1.64238 30 3.66527V26.3347C30 28.3576 28.3576 30 26.3347 30H3.66527C1.64238 30 0 28.3576 0 26.3347V3.66527C0 1.64238 1.64232 0 3.66527 0L26.3347 0ZM15 4.74609C12.2152 4.74609 11.866 4.75787 10.7723 4.80779C9.68092 4.8576 8.93555 5.03092 8.28328 5.28445C7.60898 5.54648 7.03717 5.89711 6.46711 6.46711C5.89705 7.03717 5.54643 7.60904 5.28439 8.28328C5.03092 8.93555 4.8576 9.68092 4.80773 10.7723C4.75787 11.866 4.74609 12.2152 4.74609 15C4.74609 17.7848 4.75787 18.134 4.80773 19.2277C4.8576 20.3191 5.03092 21.0645 5.28439 21.7167C5.54643 22.391 5.89705 22.9628 6.46711 23.5329C7.03717 24.1029 7.60898 24.4536 8.28328 24.7156C8.93555 24.9691 9.68092 25.1424 10.7723 25.1922C11.866 25.2421 12.2152 25.2539 15 25.2539C17.7848 25.2539 18.134 25.2421 19.2277 25.1922C20.3191 25.1424 21.0645 24.9691 21.7167 24.7156C22.391 24.4536 22.9628 24.1029 23.5329 23.5329C24.1029 22.9628 24.4536 22.391 24.7156 21.7167C24.9691 21.0645 25.1424 20.3191 25.1922 19.2277C25.2421 18.134 25.2539 17.7848 25.2539 15C25.2539 12.2152 25.2421 11.866 25.1922 10.7723C25.1424 9.68092 24.9691 8.93555 24.7156 8.28328C24.4536 7.60904 24.1029 7.03717 23.5329 6.46711C22.9628 5.89711 22.391 5.54648 21.7167 5.28445C21.0645 5.03092 20.3191 4.8576 19.2277 4.80779C18.134 4.75787 17.7848 4.74609 15 4.74609ZM15 6.59367C17.7379 6.59367 18.0622 6.6041 19.1435 6.65344C20.1432 6.69908 20.6861 6.86613 21.0475 7.00647C21.5261 7.1925 21.8677 7.41475 22.2265 7.77352C22.5853 8.13234 22.8075 8.47394 22.9935 8.95254C23.1339 9.31389 23.301 9.85682 23.3466 10.8565C23.3959 11.9378 23.4064 12.2621 23.4064 15C23.4064 17.7379 23.3959 18.0622 23.3466 19.1435C23.301 20.1432 23.1339 20.6861 22.9935 21.0475C22.8075 21.5261 22.5853 21.8677 22.2265 22.2265C21.8677 22.5853 21.5261 22.8075 21.0475 22.9935C20.6861 23.1339 20.1432 23.301 19.1435 23.3466C18.0624 23.3959 17.7381 23.4064 15 23.4064C12.2619 23.4064 11.9377 23.3959 10.8565 23.3466C9.85682 23.301 9.31389 23.1339 8.95254 22.9935C8.47389 22.8075 8.13234 22.5853 7.77352 22.2265C7.41469 21.8677 7.19244 21.5261 7.00647 21.0475C6.86607 20.6861 6.69902 20.1432 6.65338 19.1435C6.60404 18.0622 6.59361 17.7379 6.59361 15C6.59361 12.2621 6.60404 11.9378 6.65338 10.8565C6.69902 9.85682 6.86607 9.31389 7.00647 8.95254C7.19244 8.47394 7.41469 8.13234 7.77352 7.77352C8.13234 7.41475 8.47389 7.1925 8.95254 7.00647C9.31389 6.86613 9.85682 6.69908 10.8565 6.65344C11.9378 6.6041 12.2621 6.59367 15 6.59367ZM15 9.73447C12.0919 9.73447 9.73447 12.0919 9.73447 15C9.73447 17.9081 12.0919 20.2655 15 20.2655C17.9081 20.2655 20.2655 17.9081 20.2655 15C20.2655 12.0919 17.9081 9.73447 15 9.73447ZM15 18.4179C13.1123 18.4179 11.5821 16.8877 11.5821 15C11.5821 13.1123 13.1123 11.5821 15 11.5821C16.8877 11.5821 18.4179 13.1123 18.4179 15C18.4179 16.8877 16.8877 18.4179 15 18.4179ZM21.7041 9.52647C21.7041 10.206 21.1531 10.7569 20.4735 10.7569C19.794 10.7569 19.2431 10.206 19.2431 9.52647C19.2431 8.84689 19.794 8.296 20.4735 8.296C21.1531 8.296 21.7041 8.84689 21.7041 9.52647Z" fill="currentColor" />
                  </svg>
                </a>
              </span>
              <span class="socIcon">
                <a href="javascript:void(0);" target="_blank" aria-label="linkedin" title="linkedin">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M26.3347 0C28.3577 0 30 1.64238 30 3.66527V26.3347C30 28.3576 28.3576 30 26.3347 30H3.66527C1.64238 30 0 28.3576 0 26.3347V3.66527C0 1.64238 1.64232 0 3.66527 0L26.3347 0ZM9.40201 24.8014V11.5758H5.00514V24.8014H9.40201ZM25.2539 24.8014V17.2171C25.2539 13.1546 23.0849 11.2648 20.1925 11.2648C17.8603 11.2648 16.8155 12.5475 16.2306 13.4484V11.5758H11.8348C11.8931 12.8169 11.8348 24.8014 11.8348 24.8014H16.2305V17.4154C16.2305 17.02 16.259 16.6248 16.3755 16.3422C16.6927 15.5527 17.4165 14.7347 18.631 14.7347C20.2209 14.7347 20.858 15.948 20.858 17.7252V24.8014H25.2539ZM7.23328 5.19855C5.72895 5.19855 4.74609 6.18756 4.74609 7.48383C4.74609 8.75285 5.69906 9.7691 7.1751 9.7691H7.20346C8.73656 9.7691 9.69088 8.75285 9.69088 7.48383C9.66246 6.18937 8.73926 5.20137 7.23328 5.19855Z" fill="currentColor" />
                  </svg>
                </a>
              </span>
              <span class="socIcon">
                <a href="javascript:void(0);" target="_blank" aria-label="youtube" title="youtube">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M26.3347 0C28.3577 0 30 1.64238 30 3.66527V26.3347C30 28.3576 28.3576 30 26.3347 30H3.66527C1.64238 30 0 28.3576 0 26.3347V3.66527C0 1.64238 1.64232 0 3.66527 0L26.3347 0ZM25.1062 10.2908C24.8637 9.38326 24.1489 8.66854 23.2414 8.42602C21.5962 7.98516 15 7.98516 15 7.98516C15 7.98516 8.40381 7.98516 6.75861 8.42602C5.85123 8.66854 5.13639 9.38326 4.89381 10.2908C4.45313 11.9358 4.45312 15.3681 4.45312 15.3681C4.45312 15.3681 4.45313 18.8003 4.89381 20.4451C5.13639 21.3527 5.85123 22.0676 6.75861 22.3101C8.40381 22.7508 15 22.7508 15 22.7508C15 22.7508 21.5962 22.7508 23.2414 22.3101C24.1489 22.0676 24.8637 21.3527 25.1062 20.4451C25.5469 18.8003 25.5469 15.3681 25.5469 15.3681C25.5469 15.3681 25.5469 11.9358 25.1062 10.2908ZM12.8905 18.5322V12.204L18.3708 15.3681L12.8905 18.5322Z" fill="currentColor" />
                  </svg>
                </a>
              </span>
            </div>
          </li>
        </ul>
        <ul>
          <li class="titleLi">
            Products
          </li>
          <li>
            <a href="javascript:void(0);" class="logo" aria-label="Discounts & Offers">CRM to All Businesses</a>
          </li>

        </ul>
      </div>
    </div>
    <!-- <div class="chat-popup" id='tawk_6615685ca0c6737bd129ff02'></div> -->
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
      var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
      (function() {
        var s1 = document.createElement("script"),
          s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/66157cbd1ec1082f04e08ab2/1hr1uuhfo';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
      })();
    </script>
    <!--End of Tawk.to Script-->
  </div>
  <div class="lowFooter">
    <p>2024 Bizease Company. All rights reserved</p>
    <div class="lowerrigt">
      <a href="javascript:void(0);" aria-label="Cookies Policy">Cookies Policy</a>
      <a href="javascript:void(0);" aria-label="Cookies Preferences">Cookies Preferences</a>
    </div>
  </div>


</footer>

<script>
  $('.Gustbillslider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    arrows: true,
    // autoplay: true,
    // autoplaySpeed: 2000,
  });
</script>