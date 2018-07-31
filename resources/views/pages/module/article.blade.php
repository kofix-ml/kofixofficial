@extends('layouts.welcome')
@section('content')
        <div class="page-header header-filter" style="height: 20%">
        </div>


        <div class="main main-raised">
            <div class="container">
                <div class="padding-around">
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-background" style="background-image: @if(is_null($module->header)) url('/cake.jpg')@else url('/{{$module->header}}')@endif">
                                <div class="card-content">
                                    <h6 class="category text-info">{{$module->level}}</h6>
                                    <h3 class="card-title">{{$module->title}}</h3>
                                    <p class="card-description">
                                        {{$module->description}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <h5><strong>{{$module->title}}</strong></h5>
                            <p><strong>Details</strong></p>
                            <p>Level : {{$module->level}}</p>
                            <p>Requirement : {{$module->requirement}}</p>
                            <p>Duration : {{$module->duration}}</p>
                            <p>Syllabus covered :</p>
                            <ul>
                                @if(!is_null($module->syllabus))
                                @foreach(json_decode($module->syllabus) as $syllabus)
                                <li>{{$syllabus}}</li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">Day(s)</th>
                                        <th>Time</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!is_null($module->latesttentatives))  
                                    @foreach($module->latesttentatives as $day => $times)
                                        <?php $z = array_sum(array_map("count", $times['time'])) ?>
                                        @foreach($times['time'] as $time => $descriptions)
                                            @foreach($descriptions as $description) 
                                            
                                            <tr>
                                                {{-- {{dd($description)}} --}}
                                                @if ($loop->parent->first && $loop->first)
                                                    <td class="text-center" rowspan="{{$z}}"> {{$day}}</td>
                                                @endif

                                                @if ($loop->first)
                                                    <td rowspan="{{count($descriptions)}}">{{$time}}</td>
                                                @endif
                                                <td>{{$description}}</td>
                                                {{-- <td>2013</td>
                                                <td class="text-right">&euro; 99,225</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-user"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td> --}}
                                            </tr>
                                            
                                            
                                            @endforeach
                                            {{-- {{dd($day,$times)}} --}}
                                        @endforeach
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
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