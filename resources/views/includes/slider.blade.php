<div class="slider sliderv2">
	<div class="container">
		<div class="row">
	    	<div class="slider-single-item">
				@foreach ($latestMovies as $movie)
					@if ($loop->index < 4)
						<div class="movie-item">
							<div class="row">
								<div class="col-md-8 col-sm-12 col-xs-12">
									<div class="title-in">
										<div class="cate">
											@foreach ($movie['genre_ids'] as $genre)
												<span class="blue"><a href="#">{{ $genres->get($genre) }}</a></span>	
											@endforeach
										</div>
										<h1><a href="{{ route('movies.show',$movie['id']) }}">{{ $movie['title'] }}</a></h1>
										<div class="social-btn">
											<a href="#" class="parent-btn"><i class="ion-play"></i> Watch Trailer</a>
											<a href="#" class="parent-btn"><i class="ion-heart"></i> Add to Favorite</a>
											<div class="hover-bnt">
												<a href="#" class="parent-btn"><i class="ion-android-share-alt"></i>share</a>
												<div class="hvr-item">
													<a href="#" class="hvr-grow"><i class="ion-social-facebook"></i></a>
													<a href="#" class="hvr-grow"><i class="ion-social-twitter"></i></a>
													<a href="#" class="hvr-grow"><i class="ion-social-googleplus"></i></a>
													<a href="#" class="hvr-grow"><i class="ion-social-youtube"></i></a>
												</div>
											</div>		
										</div>
										<div class="mv-details">
											<p><i class="ion-android-star"></i><span>{{ $movie['vote_average'] }}</span> /10</p>
											<ul class="mv-infor">
												<li>  Run Time: 2h21’ </li>
												<li>  Rated: PG-13  </li>
												<li>  Release: {{ Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</li>
											</ul>
										</div>
										<div class="btn-transform transform-vertical">
											<div><a href="{{ route('movies.show',$movie['id']) }}" class="item item-1 redbtn">more detail</a></div>
											<div><a href= "{{ route('movies.show',$movie['id']) }}" class="item item-2 redbtn hvrbtn">more detail</a></div>
										</div>		
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="mv-img-2">
										<a href="{{ route('movies.show',$movie['id']) }}">
											<img src="{{ $movie['poster_path'] }}" alt="">
										</a>
									</div>
								</div>
							</div>	
						</div>
					@endif
				@endforeach
	    	</div>
	    </div>
	</div>
</div>