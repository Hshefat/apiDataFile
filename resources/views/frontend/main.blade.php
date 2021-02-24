<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- <title>Laravel</title> --}}
    <title>App Name - @yield('title')</title>

    <!-- Fonts -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> --}}
    <!-- Styles -->


    <!-- Font Awesome -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    {{-- <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}"> --}}
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/owl.theme.default.min.css') }}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/meanmenu.css') }}">
    <!-- Icofonts CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/icofont.min.css') }}">
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/slick-theme.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ url('assets/css/magnific-popup.css') }}">
    <!-- Wow CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/animate.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/responsive.css') }}">
    <!-- Media Query -->
    <link rel="stylesheet" href="{{ url('assets/css/media-queries.css') }}">

    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    {{-- end --}}

    {{-- paging --}}
    <link href="{{ asset('backend/paginator/jquery.paginate.css') }}" rel="stylesheet" type="text/css">

    {{-- DataTables --}}
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables/jquery.dataTables.css') }}" rel="stylesheet"
        type="text/css" />
    {{-- End --}}

    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        /*

        .form-group div:after {
            position: absolute;
            content: '*';
            color: red;
            top: 0;
        } */

    </style>
</head>

<body>
    <section>
        <!-- Header Top -->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-9 col-lg-10">
                        <div class="header-top-item">
                            <div class="header-top-left">

                                <marquee style="font-family:" Times New Roman, Times, serif; color: blue;
                                    scrollamount="2" class="" behavior="scroll" direction="left"
                                    onmouseover="this.stop();" onmouseout="this.start();">
                                    <div onload="renderTime();">
                                        <div id="clockDisplay" class="container"></div>
                                    </div>
                                </marquee>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-2">
                        <div class="header-top-item">
                            <div class="header-top-right">
                                <ul>
                                    <li class="">
                                        <a href="mailto:support@telocure.com">
                                            <i class="icofont-envelope"></i>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="tel:09614501100">
                                            <i class="icofont-phone"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item trigger">
                                        <a class="" href="#">
                                            <i class="icofont-globe"></i>
                                        </a>
                                        <ul class="sub">
                                            <li class="nav-item item">
                                                <a href="#" class="">English</a>
                                            </li>
                                            <li class="nav-item item">
                                                <a href="#" class="active">Bangla</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        @include('frontend.navBar')

        <main class="">
            @yield('content')
        </main>
    </section>




    <!-- Footer -->
    <section>
        <footer class="">

            <div class="" style=" ">
                <img class="footerImage img-responsive"
                    src="https://img1.nickiswift.com/img/gallery/facts-you-may-not-know-about-sssniperwolf-upgrade/intro-1590580265.jpg"
                    style="width:100%;  " />
            </div>

            <div class="container" style="padding-top:20px;   margin-top: 0px;">
                <div class="row">
                    <div class="col-lg-4  col-md-3 col-sm-7">
                        <a class="" href="#" style="">
                            <img class="footer-img" alt="" src="{{ asset('assets/img/logo_2.png') }}" />
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <form class="form-inline subscribe-mail" action="{{ url('subscribe') }}" method="post">
                            @csrf
                            {{-- <div class="subscribe-mail"> --}}
                            <input type="email" class="form-control" id="footer-email" required
                                placeholder="Email Address" name="email" style="border:0;border-radius: 0;">
                            <button type="submit" style="padding: 7px;"
                                class="drop-btn btn btn-primary">Subscribe</button>
                            {{-- </div> --}}
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-7">
                        <ul class="social">
                            <li class="list-inline-item"><a href="https://www.facebook.com/TeloCure-111729097199298/">
                                    <i class="icofont-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/TeloCure"><i
                                        class="icofont-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.instagram.com/telocure/"><i
                                        class="icofont-instagram"></i></a></li>
                            {{-- <li class="list-inline-item"><a href="javascript:void();"><i class="icofont-google-plus"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="icofont-envelope"></i></a></li> --}}
                            <li class="list-inline-item"><a href="https://www.youtube.com/watch?v=YPdOR-I6zHU"><i
                                        class="icofont-youtube"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.linkedin.com/company/telocureapp/"
                                    target="_blank"><i class="icofont-linkedin"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.pinterest.com/Telocure" target="_blank"><i
                                        class="icofont-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div style="margin-bottom: 2px;"></div>

                <div class="row">

                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-item">
                            <div class="footer-contact footer-quick">
                                <h3>Contact Us</h3>
                                <ul>
                                    <li>
                                        <i class="icofont-ui-message"></i>
                                        <!-- <a href="mailto:info@medisev.com">hr@stis.com.bd</a> -->
                                        <a href="mailto:support@telocure.com">support@telocure.com</a>
                                    </li>
                                    <li>
                                        <i class="icofont-stock-mobile"></i>
                                        <!-- <a href="tel:+07554332322">Call: +8801743440907</a> -->
                                        <a href="tel:+8801743440907">Call: 09614501100</a>
                                    </li>
                                    <li>
                                        <i class="icofont-location-pin"></i>
                                        House #34, Road #3, Section #11, Block #D, Mirpur, Dhaka 1216
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-2">
                        <div class="footer-item">
                            <div class="footer-quick">
                                <h3>Product & Service</h3>
                                <ul>
                                    <li>
                                        <a href="{{ url('service/patient') }}">Patient</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('service/doctor') }}">Doctor</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('service/hospital') }}">Hospital</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('service/e-prescription') }}">E-prescription</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-2">
                        <div class="footer-item">
                            <div class="footer-quick">
                                <h3>Quick Links</h3>
                                <ul>

                                    <li>
                                        <a href="https://telocure.com/loginarea">My Account</a>
                                    </li>
                                    <li>
                                        <a href="https://telocure.com/registerarea">Sign Up</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('help/faq') }}"">FAQ</a>
                                    </li>
                                    <li>
                                        <a href=" {{ url('help/howitworks') }}"">How TeloCure Works</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-2">
                        <div class="footer-item">
                            <div class="footer-quick">
                                <h3>Others</h3>
                                <ul>
                                    <li>
                                        <a href="{{ url('privacy') }}">Privacy</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('appsprivacy') }}" target="_blank">Apps Privacy</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="{{ url('terms') }}">Terms and Conditions</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="{{ url('refund') }}">Payment and Refund Policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-item">
                            <div class="footer-quick">
                                <h3>Powered By</h3>
                                <ul>
                                    <li>
                                        <a href="{{ url('https://stis.com.bd') }}" target="_blank">Smarttech IT
                                            Solution
                                            Ltd.</a>
                                    </li>
                                    <li>
                                        <!-- <a href="{{ url('appsprivacy') }}" target="_blank">Apps Privacy</a> -->
                                        <!-- <a href="https://stis.com.bd" target="_blank"><img src="{{ asset('assets/img/about-us/STIS.jpg') }}" width="100%" style="border:1px solid #2c7059" alt="Service"></a> -->
                                        <a href="https://stis.com.bd" target="_blank"><img
                                                src="{{ asset('assets/img/about-us/smarttechsolution.png') }}"
                                                width="100%" style="border:1px solid #2c7059" alt="Service"></a>

                                    </li>
                                    <li>
                                        <a href="https://www.sslcommerz.com" target="_blank"><img
                                                src="{{ asset('assets/img/ssl.png') }}" width="100%" alt="ssl"></a>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <hr>

                <div class="row">
                    <ul class="footer-bottom">
                        <li class="list-inline-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                        <li class="list-inline-item"><a class="nav-link">|</a></li>
                        <li class="list-inline-item"><a href="{{ url('about') }}" class="nav-link">About</a></li>
                        <li class="list-inline-item"><a class="nav-link">|</a></li>
                        <li class="list-inline-item"><a href="{{ url('contact') }}" class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </section>
    <!-- End Footer -->
    </div>


    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->

    {{-- DataTables --}}
    <script src="{{ asset('backend/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="extensions/mobile/bootstrap-table-mobile.js"></script>
    {{-- End --}}

    {{-- custom js --}}
    <script src="{{ asset('backend/dist/js/custom.js') }}"></script>

    <script src="{{ asset('backend/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)

    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('backend/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('backend/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('backend/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('backend/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('backend/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}">
    </script>
    <!-- Summernote -->
    <script src="{{ asset('backend/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('backend/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('backend/dist/js/pages/dashboard.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('backend/dist/js/demo.js') }}"></script>
    {{-- Paginator --}}
    <script src="{{ asset('backend/paginator/jquery.paginate.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#search").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });

        $(document).ready(function() {
            $('table').paginate({
                'elemsPerPage': 5,
                'maxButtons': 6
            });
        });

        $(document).ready(function() {
            $('.dp li a').click(function() {
                let v = $(this).attr('href');
                $('v').addClasses('btn-success');
                $('v').removeClass('btn-success');

            });
        });


        $(document).ready(function() {
            $('#responsive').DataTable({
                responsive: true,
            });
        });

    </script>


    <script>
        $(function() {
            $('#table').bootstrapTable()
        })

    </script>




    <script>
        function renderTime() {
            var myDate = new Date();
            var year = myDate.getYear();
            if (year < 1000) {
                year += 1900
            }
            var day = myDate.getDay();
            var month = myDate.getMonth();
            var daym = myDate.getDate();
            var dayarray = new Array("Saturday", "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
            var montharray = new Array("January", "February", "March", "April", "May", "June", "July", "August",
                "September", "October", "November", "December");


            //Time

            var currentTime = new Date();
            var h = currentTime.getHours();
            var m = currentTime.getMinutes();
            var s = currentTime.getSeconds();
            var session = "AM";
            if (h == 0) {
                h = 12;
            }
            if (h >= 12) {
                session = "PM";
            }


            if (h > 12) {
                h = h - 12;
            }

            m = (m < 10) ? m = "0" + m : m;
            s = (s < 10) ? s = "0" + s : s;


            var myClock = document.getElementById("clockDisplay");
            myClock.textContent = "Welcome to our Telocure. Today is " + dayarray[day] + " " + daym + " " + montharray[
                    month] + " " + year + ". The time is    " + h + " : " + m + " : " + s + " " + session +
                ". Thanks for join us. ";
            myClock.innerText = "Welcome to our Telocure. Today is " + dayarray[day] + " " + daym + " " + montharray[
                    month] + " " + year + ". The time is    " + h + " : " + m + " : " + s + " " + session +
                ". Thanks for join us. ";
            setTimeout("renderTime()", 1000);
        }
        renderTime();

    </script>
</body>

</html>
