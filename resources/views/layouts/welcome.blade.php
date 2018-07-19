<!DOCTYPE html>
<html>
<head>
    <title>Kofix Technologies Resources</title>

    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    
    <!-- CSS Files -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/material-kit.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vertical-nav.css') }}" rel="stylesheet">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
         (adsbygoogle = window.adsbygoogle || []).push({
              google_ad_client: "ca-pub-8061712990718999",
              enable_page_level_ads: true
         });
    </script>
    <script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js"></script>
</head>
<body>
    <amp-auto-ads type="adsense"
              data-ad-client="ca-pub-8061712990718999">
</amp-auto-ads>
     <!-- Begin BidVertiser code -->
<SCRIPT data-cfasync="false" SRC="//bdv.bidvertiser.com/BidVertiser.dbm?pid=736599&bid=1951870" TYPE="text/javascript"></SCRIPT>


<!-- End BidVertiser code --> 

    <!-- Body Start Here -->

        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="/logo.png" style="max-height: 30px;"></a>
                </div>

                <div class="collapse navbar-collapse" id="navigation-example">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="/">
                                <i class="material-icons">home</i> Home
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">view_day</i> Training &amp; Courses
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu dropdown-with-icons">
                                <li>
                                    <a href="/courses/teensandkids"> 
                                        <i class="material-icons">dns</i> Teens &amp; Kids Program
                                    </a>
                                </li>
                                <li>
                                    <a href="/courses/collegeanduniversities">
                                        <i class="material-icons">dns</i> College &amp; Universities Program
                                    </a>
                                </li>
                                <li>
                                    <a href="/courses/corporateandprivate">
                                        <i class="material-icons">dns</i> Corporate &amp; Private Program
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="/schedule">
                                <i class="material-icons">date_range</i> Training Schedule
                            </a>
                        </li>

                       {{--  <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">work</i> Projects &amp; Products
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu dropdown-with-icons">
                                <li>
                                    <a href="#"> 
                                        <i class="material-icons">apps</i> Mobile Apps
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="material-icons">web</i> Web Development
                                    </a>
                                </li>
                            </ul>
                        </li> --}}

                        <li>
                            <a href="/about_us">
                                <i class="material-icons">business</i> About Us
                            </a>
                        </li>

                        <li>
                            <a href="/contact_us">
                                <i class="material-icons">contacts</i> Contact Us
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>


        @yield('content')


        <footer class="footer">
            <div class="container">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Right -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8061712990718999"
     data-ad-slot="8886941248"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Kofix Technologies
                </div>
            </div>
        </footer>
    <!-- Body End Here -->

    <!--   Core JS Files   -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/material.min.js') }}"></script>

    <!--    Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('js/nouislider.min.js') }}"></script>

    <!--    Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>

    <!--    Plugin for Select Form control, full documentation here: https://github.com/FezVrasta/dropdown.js -->
    <script src="{{ asset('js/jquery.dropdown.js') }}"></script>

    <!--    Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
    <script src="{{ asset('js/jquery.tagsinput.js') }}"></script>

    <!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="{{ asset('js/material-kit.js') }}"></script>
</body>
</html>