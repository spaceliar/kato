<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="{{asset('')}}">
        <meta charset="utf-8" />
        <title>Giới thiệu - Katosangyo Việt Nam</title>
        <!-- Description, Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="author" content="Katosangyo" />
        <meta name="description"
              content="Katosangyo Việt Nam chuyên xuất khẩu, nhập khẩu và phân phối các mặt hàng như thức ăn, đồ uống và nhu yếu phẩm hằng ngày khác vào các hệ thống siêu thị và chuỗi cửa hàng tiện lợi tại thị trường Việt Nam." />
        <meta name="keywords" content="Katosangyo Việt NAm, katosangyo vietnam, katosangyo, Osaka Chu-Chu, Bánh hạt chia, Yakisoba, Okonomi, Sushi Yaki, Wasabi Aji Okazu, Aji Okazu, Rong biển khô tẩm gia vị Aji Gin 6 gói" />
        <meta property="og:title" content="Katosangyo Việt Nam - katosangyo.com.vn" />
        <meta property="og:image" content="http://katosangyo.com.vn/vi/img/logo.png" />
        <meta property="og:description"
              content="Katosangyo Việt Nam chuyên xuất khẩu, nhập khẩu và phân phối các mặt hàng như thức ăn, đồ uống và nhu yếu phẩm hằng ngày khác vào các hệ thống siêu thị và chuỗi cửa hàng tiện lợi tại thị trường Việt Nam." />
        <meta property="og:url" content="http://katosangyo.com.vn/" />
        <meta name="geo.placename" content="Central Garden, Võ Văn Kiệt Cô Giang, Quận 1 Hồ Chí Minh, Việt Nam" />
        <meta name="geo.region" content="VN-Hồ Chí Minh" />

        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css' />

        <!-- Stylesheets -->

        <link rel="stylesheet" href="public/css/smoothzoom.css">

        <link href="public/style/bootstrap.css" rel="stylesheet" />
        <link href="public/style/flexslider.css" rel="stylesheet" />
        <link href="public/style/prettyPhoto.css" rel="stylesheet" />
        <link rel="stylesheet" href="public/style/font-awesome.css" />
        <!--[if IE 7]>
        <link rel="stylesheet" href="style/font-awesome-ie7.css">
        <![endif]-->        
        <link href="public/style/style.css" rel="stylesheet" />
        <!-- Color Stylesheet - orange, blue, pink, brown, red or green-->
        <link href="public/style/blue.css" rel="stylesheet" />    
        <link href="public/style/bootstrap-responsive.css" rel="stylesheet" />

        <!-- HTML5 Support for IE -->
        <!--[if lt IE 9]>
        <script src="js/html5shim.js"></script>
        <![endif]-->

        <!-- Favicon -->
        <link rel="shortcut icon" href="public/img/favicon/favicon.ico" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

    <body>

        @include('header')

        <!-- Navigation Starts -->

        <!-- Note down the syntax before editing. It is the default twitter bootstrap navigation -->

        @include('nav')

        <!-- Content strats -->

        @yield('content')

        <!-- Content ends --> 

        @include('footer')

        <!-- JS -->
        <script src="public/js/jquery.js"></script>
        <script src="public/js/bootstrap.js"></script>
        <script src="public/js/jquery.flexslider-min.js"></script>
        <script src="public/js/jquery.isotope.js"></script>
        <script src="public/js/jquery.prettyPhoto.js"></script>
        <script src="public/js/filter.js"></script>

        <script src="public/js/custom.js"></script>

        <script type="text/javascript" src="public/js/easing.js"></script>
        <script type="text/javascript" src="public/js/smoothzoom.min.js"></script>

        <script type="text/javascript">
            $(window).load(function() {
                $('img').smoothZoom({
                    // Options go here
                });
            });
        </script>
    </body>
</html>