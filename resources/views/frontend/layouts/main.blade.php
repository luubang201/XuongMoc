<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="/frontend/slick/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="/frontend/slick/slick/slick-theme.css" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/frontend/css/global.css">
    <link rel="stylesheet" type="text/css" href="/frontend/css/style.css">
    <link rel="stylesheet" type="text/css" href="/frontend/css/responsive.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="icon" href="/frontend/images/AnhCat/logo.png" type="image/png">
    <title>Xưởng Mộc Giá Tốt</title>
    <script src="/frontend/all/js/jquery-3.3.1.js"></script>
    <script src="/frontend/all/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/frontend/all/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/frontend/fonts/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/frontend/css/style.css">
    <link rel="stylesheet" href="/frontend/all/css/cart.css">
</head>

<body>
<div id="main-content" class="wrap">
    @include('frontend.layouts.header')

    <div class="content-wrap">
        @yield('content')
    </div>


    @include('frontend.layouts.footer')

</div>

<div id="search-nav" class="search-sidebar search-form-wrapper">
    <div id="site-search" class="site-nav-container search-form-open">
        <div class="site-nav-container-last">
            <p class="title">Tìm kiếm</p>
            <div class="search-box wpo-wrapper-search">
                <form action="/search" class="searchform searchform-categoris ultimate-search navbar-form">
                    <div class="wpo-search-inner">
                        <input type="hidden" name="type" value="product">
                        <input required="" id="inputSearchAuto" name="q" maxlength="40" autocomplete="off"
                               class="searchinput input-search search-input" type="text" size="20"
                               placeholder="Tìm kiếm sản phẩm...">
                    </div>
                    <button type="submit" class="btn-search btn" id="search-header-btn">
                        <i class="fas fa-search"></i>
                        S
                    </button>
                </form>

            </div>
        </div>
    </div>
    <button id="site-close-handle" class="site-close-handle" aria-label="Đóng" title="Đóng">
        <span class="hamburger-menu active" aria-hidden="true"><span class="bar animate">X</span></span>
    </button>
</div>
<div id="site-overlay" class="site-overlay"></div>
</body>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/bf61fecb7c.js" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<!-- JQuery -->
<script type="text/javascript" src="/frontend/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="/frontend/js/jquery-migrate-1.2.1.min.js"></script>
<!-- Slick -->
<script type="text/javascript" src="/frontend/slick/slick/slick.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

<!-- Script -->
<script type="text/javascript" src="/frontend/js/javascript.js"></script>

</html>

