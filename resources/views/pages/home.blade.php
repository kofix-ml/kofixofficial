@extends('layouts.welcome')
@section('content')
<div class="page-header header-filter" data-parallax="active" style="background-image: url('bg2.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="title">Kofix Technologies Resources</h1>
                            <h4>Meet the amazing team behind this project and find out more about how we work.</h4>
                    </div>
                </div>
            </div>
        </div>


        <div class="main main-raised">
            <div class="container">
                <div class="padding-around">

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <h2 class="title">We are nerd rockstars</h2>
                            <h5 class="description">Who else spend their weekends and weekdays, with IT trainings, developing app and website other than us, the nerd IT Professional geeks.</h5>
                        </div>
                    </div>

                    <div class="row" style="padding-top:25px;">
                        <div class="col-md-4">
                            <div class="card card-blog fix-height">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img max-height imgshadow" src="/img/services-systems.jpg" />
                                        <div class="card-title">
                                            Our Services
                                        </div>
                                    </a>
                                </div>

                                <div class="content text-justify">
                                    {{-- <h6 class="category text-info text-padding">Technology</h6> --}}
                                    <br>
                                    <p class="card-description text-padding">
                                        Our aim is to create a computer literate community evolving around the mobile world that has shape the current way we interact. We have successfully done that by giving trainings and creating innovative ways with our clients through newfound social medias.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-blog fix-height">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img max-height imgshadow" src="/img/php-training.jpg" />
                                        <div class="card-title">
                                            Trainings &amp; Courses
                                        </div>
                                    </a>
                                </div>

                                <div class="content text-justify">
                                    {{-- <h6 class="category text-info text-padding">Technology</h6> --}}
                                    <br>
                                    <p class="card-description text-padding">
                                        We provide platforms for our clients to market themselves via products and services through branded apps. We have the required expertise and proven ability to provide a complete solution under one roof for all kinds of small to medium business that requires our services.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-blog fix-height">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img max-height imgshadow" src="/img/finger-print.jpg" />
                                        <div class="card-title">
                                            Projects &amp; Products
                                        </div>
                                    </a>
                                </div>

                                <div class="content text-justify">
                                    {{-- <h6 class="category text-info text-padding">Technology</h6> --}}
                                    <br>
                                    <p class="card-description text-padding">
                                        Feel Free to discover our Products and Projects. Here in Caspian Technology we also do a development for Mobile and Website. We have develop a Mobile Apps for Android & iOS and in future we will build more apps for Android Watch, Apple Watch, Android TV and Apple TV & Etc.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection