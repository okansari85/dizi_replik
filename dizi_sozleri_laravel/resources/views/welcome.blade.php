<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#ffffff">
        <meta name="twitter:title" content="Dizi Sözleri ">
        <meta name="og:title" content="Dizi Sözleri ">
        <meta name="theme-color" content="#ffffff">
        <meta name="color-scheme" content="light">

        <title>Dizi Sözleri</title>

        <!-- Styles -->
        <link href="https://fonts.bunny.net/css?family=Miriam+Libre:400,700|Merriweather" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/nice-select.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" />
    </head>
    <body>
    <!-- ======= Hero Section ======= -->
    <!-- ======= Hero Section ======= -->



    <div class="sticky-wrapper" style="height: 80px;">

        <header class="header_area sticky-header" style="">
            <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->

            <div class="main_menu">
                <nav class="navbar navbar-expand-lg navbar-light main_box">
                    <div class="container">
                        <a class="navbar-brand logo_h" href="http://localhost:8000"><img src="{{ asset('images/logo/dizi_sozleri_logo.png') }}" alt="Dizi Sözleri Logo" width="100"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item"><a class="nav-link" href="#">Hakkımızda</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="nav-item"></li>
                                <li class="nav-item">
                                    <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="search_input" id="search_input_box" style="display: none;">
                <div class="container">
                    <form class="d-flex justify-content-between">
                        <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                        <button type="submit" class="btn"></button>
                        <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
                    </form>
                </div>
            </div>
        </header>
    </div>

   <section class="banner-area organic-breadcrumb" >

       <div class="container">

            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">

                <div class="col-first">
                    <h1>Dizi Sözleri</h1>
                    <nav class="d-flex align-items-center">
                        <a href="https://preview.colorlib.com/theme/karma/index.html">Anasayfa<span class="lnr lnr-arrow-right"></span></a>
                        <a href="https://preview.colorlib.com/theme/karma/category.html">Blog</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <div class="band">
        <div class="item-1">
            <a href="https://design.tutsplus.com/articles/international-artist-feature-malaysia--cms-26852" class="card">
                <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/flex-1.jpg);"></div>
                <article>
                    <h1>International Artist Feature: Malaysia</h1>
                    <span>Mary Winkler</span>
                </article>
            </a>
        </div>
        <div class="item-2">
            <a href="https://webdesign.tutsplus.com/articles/how-to-conduct-remote-usability-testing--cms-27045" class="card">
                <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/users-2.png);"></div>
                <article>
                    <h1>How to Conduct Remote Usability Testing</h1>
                    <span>Harry Brignull</span>
                </article>
            </a>
        </div>
        <div class="item-3">
            <a href="https://design.tutsplus.com/articles/envato-tuts-community-challenge-created-by-you-july-edition--cms-26724" class="card">
                <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/flex-5.jpg);"></div>
                <article>
                    <h1>Created by You, July Edition</h1>
                    <p>Welcome to our monthly feature of fantastic tutorial results created by you, the Envato Tuts+ community! </p>
                    <span>Melody Nieves</span>
                </article>
            </a>
        </div>
        <div class="item-4">
            <a href="https://webdesign.tutsplus.com/tutorials/how-to-code-a-scrolling-alien-lander-website--cms-26826" class="card">
                <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/landing.png);"></div>
                <article>
                    <h1>How to Code a Scrolling “Alien Lander” Website</h1>
                    <p>We’ll be putting things together so that as you scroll down from the top of the page you’ll see an “Alien Lander” making its way to touch down.</p>
                    <span>Kezz Bracey</span>
                </article>
            </a>
        </div>
        <div class="item-5">
            <a href="https://design.tutsplus.com/tutorials/stranger-things-inspired-text-effect--cms-27139" class="card">
                <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/strange.jpg);"></div>
                <article>
                    <h1>How to Create a “Stranger Things” Text Effect in Adobe Photoshop</h1>
                    <span>Rose</span>
                </article>
            </a>
        </div>
        <div class="item-6">
            <a href="https://photography.tutsplus.com/articles/5-inspirational-business-portraits-and-how-to-make-your-own--cms-27338" class="card">
                <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/flor.jpg);"></div>
                <article>
                    <h1>5 Inspirational Business Portraits and How to Make Your Own</h1>

                    <span>Marie Gardiner</span>
                </article>
            </a>
        </div>
        <div class="item-7">
            <a href="https://webdesign.tutsplus.com/articles/notes-from-behind-the-firewall-the-state-of-web-design-in-china--cms-22281" class="card">
                <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/china.png);"></div>
                <article>
                    <h1>Notes From Behind the Firewall: The State of Web Design in China</h1>
                    <span>Kendra Schaefer</span>
                </article>
            </a>
        </div>
    </div>


    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery.nice-select.js')}}"></script>
    <script src="{{ asset('js/jquery.sticky.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/main.js')}}"></script>
    <script>
        $(window).on('load', function(){
            $('.post-module').hover(function() {
                $(this).find('.description').stop().animate({
                    height: "toggle",
                    opacity: "toggle"
                }, 300);
            });
        });
    </script>

    </body>
</html>
