<!DOCTYPE HTML>
<html lang="en">


<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Frame Game Studio</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <!--=============== css  ===============-->

    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="{{asset('public/frontEnd/')}}/css/reset.css">
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="{{asset('public/frontEnd/')}}/css/plugins.css">
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="{{asset('public/frontEnd/')}}/css/style.css">
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="{{asset('public/frontEnd/')}}/css/style-dark.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="images/bg/fav-fgs.png">

    <style>
        .fa {

            font-size: 15px;
            padding: 10px;

        }

        @media only screen and (max-width: 600px) {
            .bg {
                top: 51px !important;
            }
        }
    </style>




</head>

<body>
    @include('frontEnd.include.header')
    <!-- banner -->


    @yield('mainContent')

    <!-- footer -->
    {{--  @include('frontEnd.include.footer')  --}}



    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.4.0/dist/lazyload.min.js"></script>

    <script>
        var lazyLoadInstance = new LazyLoad({
            elements_selector: ".lazy"
            // ... more custom settings?
        });
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/635aceaddaff0e1306d45a81/1ggdbem28';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <!--=============== scripts  ===============-->
    <script defer type="text/javascript" src="{{asset('public/frontEnd/')}}/js/jquery.min.js"></script>
    <script defer type="text/javascript" src="{{asset('public/frontEnd/')}}/js/plugins.js"></script>
    <script defer type="text/javascript" src="{{asset('public/frontEnd/')}}/js/scripts.js"></script>
</body>


</html>
