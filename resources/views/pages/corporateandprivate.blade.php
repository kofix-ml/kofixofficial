@extends('layouts.welcome')
@section('content')
        <div class="page-header header-filter" style="height: 20%">
        </div>


        <div class="main main-raised">
            <div class="container">
                <div class="padding-around">

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <h2 class="title"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Training & Courses</h2>
                            <h5 class="description">Courses listed below is based on demands and supply we have.</h5>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                            @foreach($modules as $module)
                            @if($module->ready)
                            <div class="col-md-6">
                                <div class="card card-background" style="background-image: url('/{{$module->header}}')">
                                    <div class="card-content">
                                        <h6 class="category text-info">{{$module->level}}</h6>
                                        <h3 class="card-title">{{$module->title}}</h3>
                                        <p class="card-description">
                                            {{$module->description}}
                                        </p>
                                        <a href="/courses/corporateandprivate/{{$module->id}}/read" class="btn btn-danger btn-round">
                                            <i class="material-icons">subject</i> Read Article
                                        <div class="ripple-container"></div></a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                    </div>
                    <br><br><br>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <h5 class="description">Incoming Courses...</h5>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                            @foreach($modules as $module)
                            @if(!$module->ready)
                            <div class="col-md-6">
                                <div class="card card-background" style="background-image: url('/{{$module->header}}')">
                                    <div class="card-content">
                                        <h6 class="category text-info">{{$module->level}}</h6>
                                        <h3 class="card-title">{{$module->title}}</h3>
                                        <p class="card-description">
                                            {{$module->description}}
                                        </p>
                                        <a href="/courses/corporateandprivate/{{$module->id}}/read" class="btn btn-danger btn-round">
                                            <i class="material-icons">subject</i> Read Article
                                        <div class="ripple-container"></div></a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="subscribe-line subscribe-line-image" style="background-image: url('assets/img/bg7.jpg');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="text-center">
                                    <h3 class="title">Subscribe to our Newsletter</h3>
                                    <p class="description">
                                        Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.
                                    </p>
                                </div>

                                <div class="card card-raised card-form-horizontal">
                                    <div class="card-content">
                                        <form method="" action="">
                                            <div class="row">
                                                <div class="col-sm-8">

                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">mail</i>
                                                        </span>
                                                        <div class="form-group is-empty"><input type="email" value="" placeholder="Your Email..." class="form-control"><span class="material-input"></span></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <button type="button" class="btn btn-primary btn-block">Subscribe</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
@endsection