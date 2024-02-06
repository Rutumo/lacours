<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Education - List of Meetings</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <!--

    TemplateMo 569 Edu Meeting

    https://templatemo.com/tm-569-edu-meeting

    -->
</head>

<body>



<!-- Sub Header -->
<div class="sub-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-8">
                <div class="left-content">
                    <p>This is an educational <em>HTML CSS</em> template by TemplateMo website.</p>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        Iot security
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.html" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="#contact">Categories</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6>Here are our upcoming meetings</h6>
                <h2>Upcoming Meetings</h2>
            </div>
        </div>
    </div>
</section>


    <section class="contact-us" id="contact">
        <div class="container">
            <div class="row">

            <div class="col-lg-6 align-self-left">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>Mots clés de recherche</h2>
                                </div>
                                @if(Session::get('success'))
                                    <div class="alert alert-success">
                                        {{Session::get('success')}}
                                    </div>
                                @endif

                                @if(Session::get('fail'))
                                    <div class="alert alert-danger">
                                        {{Session::get('fail')}}
                                    </div>
                                @endif

                                <form action="insertKeywords" method="post">
                                    @csrf
                                    <div class="col-lg-8">
                                        <fieldset>
                                            <select name="categorie" id="categorie" class="form-select form-select-lg mb-3">
                                                <option></option>
                                                @foreach($categories as $data)
                                                    <option>{{$data->categorie}}</option>
                                                @endforeach
                                            </select>
                                        </fieldset>
                                        <span style="color:red">@error('categorie'){{$message}} @enderror</span>
                                    </div>
                                    <div class="col-lg-8">
                                        <fieldset>
                                            <input name="keyword" type="text" id="keyword" placeholder="MOT CLE POUR LA RECHERCHE">
                                            <span style="color:red">@error('keyword'){{$message}} @enderror</span>
                                        </fieldset>
                                    </div>

                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="button">INSERT</button>
                                        </fieldset>
                                    </div>
                                </form>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            </div>
        </div>
        </div>


        <div class="footer">
            <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved.
                <br>
                Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a>
                <br>
                Distibuted By: <a href="https://themewagon.com" target="_blank" title="Build Better UI, Faster">ThemeWagon</a>
            </p>
        </div>
    </section>


<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/tabs.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/video.js"></script>
<script src="assets/js/slick-slider.js"></script>
<script src="assets/js/custom.js"></script>
<script>
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
        var
            direction = section.replace(/#/, ''),
            reqSection = $('.section').filter('[data-section="' + direction + '"]'),
            reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
            $('body, html').animate({
                    scrollTop: reqSectionPos },
                800);
        } else {
            $('body, html').scrollTop(reqSectionPos);
        }

    };

    var checkSection = function checkSection() {
        $('.section').each(function () {
            var
                $this = $(this),
                topEdge = $this.offset().top - 80,
                bottomEdge = topEdge + $this.height(),
                wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
                var
                    currentId = $this.data('section'),
                    reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                reqLink.closest('li').addClass('active').
                siblings().removeClass('active');
            }
        });
    };

    $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
        e.preventDefault();
        showSection($(this).attr('href'), true);
    });

    $(window).scroll(function () {
        checkSection();
    });
</script>
</body>


</body>

</html>
