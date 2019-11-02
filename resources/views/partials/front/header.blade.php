<!--header-->
<header class="header d-block">
   <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="{{ url('') }}"><img src="{{ asset('/storage/settings/'.$site_settings['MAIN_LOGO'])  }}" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="{{ url('') }}"><i class="fas fa-home"></i></a></li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ABOUT US</a>
               <div class="dropdown-menu">
                  <ul>
                     <li><a class="dropdown-item" href="#">Dropdown 1</a></li>
                     <li><a class="dropdown-item" href="#">Dropdown 2</a></li>
                     <li><a class="dropdown-item" href="#">Dropdown 3</a></li>
                     <li><a class="dropdown-item" href="#">Dropdown 4</a></li>
                  </ul>
               </div>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">How it works</a>
               <div class="dropdown-menu">
                  <ul>
                     <li><a class="dropdown-item" href="#">Dropdown 1</a></li>
                     <li><a class="dropdown-item" href="#">Dropdown 2</a></li>
                     <li><a class="dropdown-item" href="#">Dropdown 3</a></li>
                     <li><a class="dropdown-item" href="#">Dropdown 4</a></li>
                  </ul>
               </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">Cargo categories</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Become a Carrier</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact us</a></li>
         </ul>
         <ul class="head-sub-info mobile">
            <li><a href="tel:+61458666456"><i class="fas fa-phone-volume"></i>+61 458 666 456</a></li>
            <li><a href="#">Get a quote</a></li>
            <li><a href="#">Get loads</a></li>
            <li><a href="#">Find Pilots</a></li>
            <li><a href="mailto:info@roadtrans.com.au"><i class="fas fa-envelope"></i>info@roadtrans.com.au</a></li>
         </ul>
      </div>
      <a href="{{ url('user/login') }}" class="btn-custom">MEMBER LOGIN</a>
   </nav>
   <div class="head-sub-info desktop">
      <div class="row justify-conent-center">
         <div class="col-auto"><a href="tel:{{ $site_settings['TELEPHONE']  }}"><i><img src="{{asset('img/html-images/phone-icon.png')}}" alt="phone"></i>{{ $site_settings['TELEPHONE']  }}</a></div>
         <div class="col-auto">
            <ul>
               <li><a href="#">Get a quote</a></li>
               <li><a href="#">Get loads</a></li>
               <li><a href="#">Find Pilots</a></li>
            </ul>
         </div>
         <div class="col-auto"><a href="mailto:{{ $site_settings['CONTACT_EMAIL']  }}"><i><img src="{{asset('img/html-images/mail-icon.png')}}" alt="phone"></i>{{ $site_settings['CONTACT_EMAIL']  }}</a></div>
      </div>
   </div>
</header>
<!--header-->