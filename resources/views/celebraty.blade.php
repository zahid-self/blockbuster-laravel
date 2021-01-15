@extends('layouts.main')

@section('content')
<div class="hero hero3">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- <h1> movie listing - list</h1>
				<ul class="breadcumb">
					<li class="active"><a href="#">Home</a></li>
					<li> <span class="ion-ios-arrow-right"></span> movie listing</li>
				</ul> -->
			</div>
		</div>
	</div>
</div>
<!-- celebrity single section-->

<div class="page-single movie-single cebleb-single">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="mv-ceb">
					<img src="{{ 'https://image.tmdb.org/t/p/w500/'.$celebratyDetails['profile_path'] }}" alt="">
				</div>
			</div>
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="movie-single-ct">
					<h1 class="bd-hd">{{ $celebratyDetails['name'] }}</h1>
					<p class="ceb-single">{{ $celebratyDetails['known_for_department'] }}</p>
					<div class="social-link cebsingle-socail">
						<a href="{{ 'https://twitter.com/'.$actorsSocial['twitter_id'] }}" target="_blank"><i class="ion-social-twitter"></i></a>
						<a href="{{ 'https://www.instagram.com/'.$actorsSocial['instagram_id'] }}" target="_blank"><i class="ion-social-instagram"></i></a>
					</div>
					<div class="movie-tabs">
						<div class="tabs">
							<ul class="tab-links tabs-mv">
								<li class="active"><a href="#overviewceb">Overview</a></li>
								<li><a href="#biography"> biography</a></li>
								<li><a href="#mediaceb"> Media</a></li> 
								<li><a href="#filmography">filmography</a></li>                        
							</ul>
						    <div class="tab-content">
						        <div id="overviewceb" class="tab active">
						            <div class="row">
						            	<div class="col-md-8 col-sm-12 col-xs-12">
											<p>
												{{ 
													Str::limit($celebratyDetails['biography'], 500) 
												}}
											</p>
											<p class="time"><a href="#biography">See full bio <i class="ion-ios-arrow-right"></i></a></p>
						            	</div>
						            	<div class="col-md-4 col-xs-12 col-sm-12">
						            		<div class="sb-it">
						            			<h6>Fullname:  </h6>
						            			<p><a href="{{ route('celebraty',$celebratyDetails['id']) }}">{{ $celebratyDetails['name'] }}</a></p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Date of Birth: </h6>
						            			<p>{{ \Carbon\Carbon::parse($celebratyDetails['birthday'])->format('M d, Y') }}</p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Country:  </h6>
						            			<p>{{ $celebratyDetails['place_of_birth'] }}</p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Popularity:</h6>
												<p>{{ $celebratyDetails['popularity'] }}</p>
						            		</div>
						            	</div>
						            </div>
						        </div>
						        <div id="biography" class="tab">
						           <div class="row">
						            	<div class="rv-hd">
											<div>
												<h3>Biography of</h3>
						       	 				<h2>{{ $celebratyDetails['name'] }}</h2>
											</div>							            						
						            	</div>
						            	<p>{{ $celebratyDetails['biography'] }}
										</p>
						            </div>
						        </div>
						        <div id="mediaceb" class="tab">
						        	<div class="row">
										<div class="title-hd-sm">
											<h4>Photos <span> ({{ count($celebratyDetails['images']['profiles']) }})</span></h4>
										</div>
										<div class="mvsingle-item">
											@foreach ($celebratyDetails['images']['profiles'] as $detail)
												<a class="img-lightbox"  data-fancybox-group="gallery" href="{{ 'https://image.tmdb.org/t/p/w300/'.$detail['file_path'] }}" ><img src="{{ 'https://image.tmdb.org/t/p/w300/'.$detail['file_path'] }}" alt=""></a>
											@endforeach
										</div>
						        	</div>
					       	 	</div>
					       	 	<div id="filmography" class="tab">
						        	<div class="row">
						            	<div class="rv-hd">
						            		<div>
						            			<h3>Filmography of</h3>
					       	 					<h2>{{ $celebratyDetails['name'] }}</h2>
						            		</div>
										
						            	</div>
						            	<div class="topbar-filter">
											<p>Found <span>{{ count($movieCredits['cast']) }} movies</span> in total</p>
										</div>
										<!-- movie cast -->
										<div class="mvcast-item">
											@foreach ($movieCredits['cast'] as $movie)
												<div class="cast-it">
													<div class="cast-left cebleb-film">
														@if ($movie['poster_path'])
															<img src="{{ 'https://image.tmdb.org/t/p/w200/'.$movie['poster_path'] }}" alt="">
														@else
															<img src="https://i.picsum.photos/id/1/500/480.jpg?" alt="">
														@endif
														<div>
															<a href="#">{{ $movie['title'] }} </a>
															<p class="time">{{ $movie['character'] }}</p>
														</div>
													</div>
												</div>
											@endforeach											
										</div>
						            </div>
					       	 	</div>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
<!-- celebrity single section-->
@endsection