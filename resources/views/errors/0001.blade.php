
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ $status }}</title>

  <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv='cache-control' content='no-cache'>
        <meta http-equiv='expires' content='0'>
        <meta http-equiv='pragma' content='no-cache'>
        <meta content="{{ csrf_token() }}" name="csrf-token" id="csrf-token">

		<title>Maintenance Mode</title>

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&amp;display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('customer/vendor/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('customer/vendor/fontawesome-free/css/all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('customer/vendor/animate/animate.compat.css') }}">
		<link rel="stylesheet" href="{{ asset('customer/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
		<link rel="stylesheet" href="{{ asset('customer/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('customer/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('customer/vendor/magnific-popup/magnific-popup.min.css') }}">
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('customer/css/theme.css') }}">
		<link rel="stylesheet" href="{{ asset('customer/css/theme-elements.css') }}">
		<link rel="stylesheet" href="{{ asset('customer/css/theme-blog.css') }}">
		<link rel="stylesheet" href="{{ asset('customer/css/theme-shop.css') }}">

		<!-- Revolution Slider CSS -->
		<link rel="stylesheet" href="{{ asset('customer/vendor/rs-plugin/css/settings.css') }}">
		<link rel="stylesheet" href="{{ asset('customer/vendor/rs-plugin/css/layers.css') }}">
		<link rel="stylesheet" href="{{ asset('customer/vendor/rs-plugin/css/navigation.css') }}">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="{{ asset('customer/vendor/circle-flip-slideshow/css/component.css') }}">
		<link id="skinCSS" rel="stylesheet" href="{{ asset('customer/css/default.css') }}">

  <style id="" media="all">
    /* cyrillic-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 900;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/montserrat/v25/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCvC73w0aXpsog.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    * {
      -webkit-box-sizing: border-box;
      box-sizing: border-box
    }

    body {
      padding: 0;
      margin: 0
    }

    #notfound {
      position: relative;
      height: 100vh
    }

    #notfound .notfound {
      position: absolute;
      left: 50%;
      top: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%)
    }

    .notfound {
      max-width: 520px;
      width: 100%;
      line-height: 1.4;
      text-align: center
    }

    .notfound .notfound-404 {
      position: relative;
      height: 240px;
      /* margin-bottom:25px; */
    }

    .notfound .notfound-404 h1 {
      font-family: montserrat, sans-serif;
      position: absolute;
      left: 50%;
      top: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      font-size: 252px;
      font-weight: 900;
      margin: 0;
      color: #262626;
      text-transform: uppercase;
      letter-spacing: -40px;
      margin-left: -20px
    }

    .notfound .notfound-404 h1>span {
      text-shadow: -8px 0 0 #fff
    }

    .notfound .notfound-404 h3 {
      font-family: cabin, sans-serif;
      position: relative;
      font-size: 16px;
      font-weight: 700;
      text-transform: uppercase;
      color: #262626;
      margin: 0;
      letter-spacing: 3px;
      padding-left: 6px
    }

    .notfound h2 {
      font-family: cabin, sans-serif;
      font-size: 20px;
      font-weight: 400;
      text-transform: uppercase;
      color: #000;
      margin-top: 0;
      margin-bottom: 25px
    }

    @media only screen and (max-width: 767px) {
      .notfound .notfound-404 {
        height: 200px
      }

      .notfound .notfound-404 h1 {
        font-size: 200px
      }
    }

    @media only screen and (max-width: 480px) {
      .notfound .notfound-404 {
        height: 162px
      }

      .notfound .notfound-404 h1 {
        font-size: 162px;
        height: 150px;
        line-height: 162px
      }

      .notfound h2 {
        font-size: 16px
      }
    }
  </style>

  <meta name="robots" content="noindex, follow">
</head>

<body>
  <div id="notfound">
    <div class="notfound">
      <div class="notfound-404">
        <img width="250" height="50" src="{{ asset('customer/logo/rvl_logo.png') }}" class="img-fluid" alt="">
            <h3 class="mb-0">MAINTENANCE MODE</h3>
            <p class="text-3 my-3 line-height-8">
                The website is undergoing some scheduled maintenance.<br>Please come back later.
            </p>
        </div>
        {{-- <div class="mt-5">
            <a class="btn btn-primary rounded-5 fw-bolder" href="{{ route($return_url) }}">{{ $return_at }}</a>
        </div> --}}
      </div>
    </div>
  </div>
</body>

</html>
