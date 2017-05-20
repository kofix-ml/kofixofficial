@extends('layouts.welcome')
@section('content')
		<div class="page-header header-filter" style="height: 20%">
        </div>

		<div class="main main-raised">
            <div class="container">
                <div class="padding-around">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <h2 class="title">Contact Us</h2>
                            <h5 class="description">Got any question?.</h5>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                    	<div class="col-md-8 col-md-offset-2">
                    		<div class="media media-post">
		        	                      <div class="media-body">
		        								<form class="form">
		        		                            <div class="row">
		        		                                <div class="col-md-6">
		        		                                    <div class="form-group is-empty">
		        		                                         <input type="text" class="form-control" placeholder="Your Name">
		        		                                    <span class="material-input"></span></div>
		        		                                </div>
		        		                                <div class="col-md-6">
		        		                                    <div class="form-group is-empty">
		        		                                         <input type="email" class="form-control" placeholder="Your email">
		        		                                    <span class="material-input"></span></div>
		        		                                </div>
		        		                            </div>
		        		                            <div class="form-group is-empty"><textarea class="form-control" placeholder="I wanna know more about ..." rows="6"></textarea><span class="material-input"></span></div>
		        		                            <div class="media-footer">
		        		                                <h6>Ask us on social media?</h6>
		        		                                <a href="" class="btn btn-just-icon btn-round btn-twitter">
		        		                                      <i class="fa fa-twitter"></i>
		        		                                </a>
		        		                                <a href="" class="btn btn-just-icon btn-round btn-facebook">
		        		                                      <i class="fa fa-facebook-square"></i>
		        		                                </a>
		        		                                <a href="" class="btn btn-just-icon btn-round btn-google">
		        		                                      <i class="fa fa-google-plus-square"></i>
		        		                                </a>
		        		                                <a href="#pablo" class="btn btn-primary pull-right">Post Comment</a>
		        		                            </div>
		        								</form>

		        	                      </div><!-- end media-body -->

		                          </div>
                    	</div>
                    </div>

				</div>
			</div>
		</div>

@endsection