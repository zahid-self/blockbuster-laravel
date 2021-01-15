@extends('layouts.main')

@section('content')
    <div class="hero mv-single-hero">
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
    <div class="page-single movie-single movie_single">
        <div class="container">
            <div class="row ipad-width2">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="movie-img sticky-sb">
                        <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movieDetails['poster_path'] }}" alt="">
                        <div class="movie-btn">	
                            <div class="btn-transform transform-vertical red">
                                <div><a href="#" class="item item-1 redbtn"> <i class="ion-play"></i> Watch Trailer</a></div>
                                <div><a href="https://www.youtube.com/watch?v={{ $movieDetails['videos']['results'][0]['key'] }}" class="item item-2 redbtn fancybox-media hvr-grow"><i class="ion-play"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="movie-single-ct main-content">
                        <h1 class="bd-hd">{{ $movieDetails['title'] }}</span></h1>
                        <div class="movie-rate">
                            <div class="rate">
                                <i class="ion-android-star"></i>
                                <p><span>8.1</span> /10<br>
                                    <span class="rv">56 Reviews</span>
                                </p>
                            </div>
                        </div>
                        <div class="movie-tabs">
                            <div class="tabs">
                                <ul class="tab-links tabs-mv">
                                    <li class="active"><a href="#overview">Overview</a></li>
                                    <li><a href="#reviews"> Reviews</a></li>
                                    <li><a href="#cast">  Cast & Crew </a></li>
                                    <li><a href="#media"> Media</a></li> 
                                    <li><a href="#moviesrelated"> Related Movies</a></li>                        
                                </ul>
                                <div class="tab-content">
                                    <div id="overview" class="tab active">
                                        <div class="row">
                                            <div class="col-md-8 col-sm-12 col-xs-12">
                                                <p>{{ $movieDetails['overview'] }}</p>
                                                <div class="title-hd-sm">
                                                    <h4>Photos</h4>
                                                </div>
                                                <div class="mvsingle-item ov-item">
                                                    @foreach ($movieDetails['images']['backdrops'] as $image)
                                                        <a class="img-lightbox"  data-fancybox-group="gallery" href="{{ 'https://image.tmdb.org/t/p/w200/'.$image['file_path'] }}" >
                                                            <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$image['file_path'] }}" alt="">
                                                        </a>
                                                    @endforeach
                                                    <div class="vd-it">
                                                        <img class="vd-img" src="images/uploads/image4.jpg" alt="">
                                                        <a class="fancybox-media hvr-grow" href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="images/uploads/play-vd.png" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="title-hd-sm">
                                                    <h4>cast</h4>
                                                    <a href="#" class="time">Full Cast & Crew  <i class="ion-ios-arrow-right"></i></a>
                                                </div>
                                                <!-- movie cast -->
                                                <div class="mvcast-item">
                                                    @foreach ($movieDetails['credits']['cast'] as $movie)
                                                        @if ($loop->index < 6)
                                                            <div class="cast-it">
                                                                <div class="cast-left">
                                                                    <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['profile_path'] }}" alt="" style="max-height:200px;">
                                                                    <a href="#">{{ $movie['name'] }}</a>
                                                                </div>
                                                                <p>...  {{ $movie['character'] }}</p>
                                                            </div>
                                                        @endif
                                                    @endforeach											
                                                </div>
                                                <div class="title-hd-sm">
                                                    <h4>User reviews</h4>
                                                    <a href="#" class="time">See All 56 Reviews <i class="ion-ios-arrow-right"></i></a>
                                                </div>
                                                <!-- movie user review -->
                                                <div class="mv-user-review-item">
                                                    <h3>Best Marvel movie in my opinion</h3>
                                                    <div class="no-star">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star last"></i>
                                                    </div>
                                                    <p class="time">
                                                        17 December 2016 by <a href="#"> hawaiipierson</a>
                                                    </p>
                                                    <p>This is by far one of my favorite movies from the MCU. The introduction of new Characters both good and bad also makes the movie more exciting. giving the characters more of a back story can also help audiences relate more to different characters better, and it connects a bond between the audience and actors or characters. Having seen the movie three times does not bother me here as it is as thrilling and exciting every time I am watching it. In other words, the movie is by far better than previous movies (and I do love everything Marvel), the plotting is splendid (they really do out do themselves in each film, there are no problems watching it more than once.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-xs-12 col-sm-12">
                                                <div class="sb-it">
                                                    <h6>Director: </h6>
                                                    <p><a href="#">Joss Whedon</a></p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>Writer: </h6>
                                                    <p><a href="#">Joss Whedon,</a> <a href="#">Stan Lee</a></p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>Stars: </h6>
                                                    <p><a href="#">Robert Downey Jr,</a> <a href="#">Chris Evans,</a> <a href="#">Mark Ruffalo,</a><a href="#"> Scarlett Johansson</a></p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>Genres:</h6>
                                                    <p>
                                                       Genres
                                                    </p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>Release Date:</h6>
                                                    <p>{{ Carbon\Carbon::parse($movieDetails['release_date'])->format('M d, Y') }}</p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>Run Time:</h6>
                                                    <p>141 min</p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>MMPA Rating:</h6>
                                                    <p>PG-13</p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>Plot Keywords:</h6>
                                                    <p class="tags">
                                                        <span class="time"><a href="#">superhero</a></span>
                                                        <span class="time"><a href="#">marvel universe</a></span>
                                                        <span class="time"><a href="#">comic</a></span>
                                                        <span class="time"><a href="#">blockbuster</a></span>
                                                        <span class="time"><a href="#">final battle</a></span>
                                                    </p>
                                                </div>
                                                <div class="ads">
                                                    <img src="images/uploads/ads1.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="reviews" class="tab review">
                                    <div class="row">
                                            <div class="rv-hd">
                                                <div class="div">
                                                    <h3>Related Movies To</h3>
                                                    <h2>Skyfall: Quantum of Spectre</h2>
                                                </div>
                                                <a href="#" class="redbtn">Write Review</a>
                                            </div>
                                            <div class="topbar-filter">
                                                <p>Found <span>56 reviews</span> in total</p>
                                                <label>Filter by:</label>
                                                <select>
                                                    <option value="popularity">Popularity Descending</option>
                                                    <option value="popularity">Popularity Ascending</option>
                                                    <option value="rating">Rating Descending</option>
                                                    <option value="rating">Rating Ascending</option>
                                                    <option value="date">Release date Descending</option>
                                                    <option value="date">Release date Ascending</option>
                                                </select>
                                            </div>
                                            @foreach ($reviews as $review)
                                                @if ($loop->index < 5)
                                                    <div class="mv-user-review-item last">
                                                        <div class="user-infor">
                                                            <img src="{{ asset('images/uploads/userava5.jpg') }}" alt="">
                                                            <div>
                                                                <h3>Impressive Special Effects and Cast</h3>
                                                                <div class="no-star">
                                                                    <i class="ion-android-star"></i>
                                                                    <i class="ion-android-star"></i>
                                                                    <i class="ion-android-star"></i>
                                                                    <i class="ion-android-star"></i>
                                                                    <i class="ion-android-star"></i>
                                                                    <i class="ion-android-star"></i>
                                                                    <i class="ion-android-star"></i>
                                                                    <i class="ion-android-star"></i>
                                                                    <i class="ion-android-star last"></i>
                                                                    <i class="ion-android-star last"></i>
                                                                </div>
                                                                <p class="time">
                                                                    26 March 2017 by <a href="#"> {{ $review['author'] }}</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p>{{ $review['content'] }}</p>
                                                    </div>
                                                @endif
                                            @endforeach
                                            <div class="topbar-filter">
                                                <label>Reviews per page:</label>
                                                <select>
                                                    <option value="range">5 Reviews</option>
                                                    <option value="saab">10 Reviews</option>
                                                </select>
                                                <div class="pagination2">
                                                    <span>Page 1 of 6:</span>
                                                    <a class="active" href="#">1</a>
                                                    <a href="#">2</a>
                                                    <a href="#">3</a>
                                                    <a href="#">4</a>
                                                    <a href="#">5</a>
                                                    <a href="#">6</a>
                                                    <a href="#"><i class="ion-arrow-right-b"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="cast" class="tab">
                                        <div class="row">
                                            <h3>Cast & Crew of</h3>
                                            <h2>{{ $movieDetails['title'] }}</h2>
                                            <div class="title-hd-sm">
                                                <h4>Crew</h4>
                                            </div>
                                            <div class="mvcast-item">											
                                                @foreach ($movieDetails['credits']['crew'] as $crew)
                                                    @if ($loop->index < 5)
                                                        <div class="cast-it">
                                                            <div class="cast-left">
                                                                <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$crew['profile_path'] }}" alt="cast" style="max-height: 100px;">
                                                                <a href="#">{{ $crew['name'] }}</a>
                                                            </div>
                                                            <p>{{ $crew['department'] }}</p>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <!-- //== -->
                                            <div class="title-hd-sm">
                                                <h4>Cast</h4>
                                            </div>
                                            <div class="mvcast-item">
                                                @foreach ($movieDetails['credits']['cast'] as $cast)
                                                    @if ($loop->index < 5)
                                                        <div class="cast-it">
                                                            <div class="cast-left">
                                                                <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$cast['profile_path'] }}" alt="cast" style="max-height: 100px;">
                                                                <a href="#">{{ $cast['name'] }}</a>
                                                            </div>
                                                            <p>{{ $cast['character'] }}</p>
                                                        </div>
                                                    @endif
                                                @endforeach										
                                            </div>
                                        </div>
                                    </div>
                                    <div id="media" class="tab">
                                        <div class="row">
                                            <div class="rv-hd">
                                                <div>
                                                    <h3>Videos & Photos of</h3>
                                                    <h2>Skyfall: Quantum of Spectre</h2>
                                                </div>
                                            </div>
                                            <div class="title-hd-sm">
                                                <h4>Videos <span>(8)</span></h4>
                                            </div>
                                            <div class="mvsingle-item media-item">
                                                @foreach ($movieDetails['videos']['results'] as $video)
                                                    <div class="vd-item">
                                                        <div class="vd-it">
                                                            <img class="vd-img" src="images/uploads/vd-item1.jpg" alt="">
                                                            <a class="fancybox-media hvr-grow"  href="https://www.youtube.com/watch?v={{ $video['key'] }}"><img src="{{ asset('images/uploads/play-vd.png') }}" alt=""></a>
                                                        </div>
                                                        <div class="vd-infor">
                                                            <h6> <a href="https://www.youtube.com/watch?v={{ $video['key'] }}">{{ $video['name'] }}</a></h6>
                                                            <p class="time"> 1: 31</p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="title-hd-sm">
                                                <h4>Photos <span> (21)</span></h4>
                                            </div>
                                            <div class="mvsingle-item">
                                                @foreach ($movieDetails['images']['posters'] as $image)
                                                    <a class="img-lightbox"  data-fancybox-group="gallery" href="{{ $image['file_path'] }}" >
                                                        <img src="{{ 'https://image.tmdb.org/t/p/w200/'.$image['file_path'] }}" alt="backdrops" style="max-height: 250px">
                                                    </a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div id="moviesrelated" class="tab">
                                        <div class="row">
                                            <h3>Related Movies To</h3>
                                            <h2>Skyfall: Quantum of Spectre</h2>
                                            <div class="topbar-filter">
                                                <p>Found <span>12 movies</span> in total</p>
                                                <label>Sort by:</label>
                                                <select>
                                                    <option value="popularity">Popularity Descending</option>
                                                    <option value="popularity">Popularity Ascending</option>
                                                    <option value="rating">Rating Descending</option>
                                                    <option value="rating">Rating Ascending</option>
                                                    <option value="date">Release date Descending</option>
                                                    <option value="date">Release date Ascending</option>
                                                </select>
                                            </div>
                                            @foreach ($similarMovies as $movie)
                                                @if ($loop->index < 5)
                                                    <div class="movie-item-style-2">
                                                        <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="poster">
                                                        <div class="mv-item-infor">
                                                            <h6><a href="#">{{ $movie['title'] }}</span></a></h6>
                                                            <p class="rate"><i class="ion-android-star"></i><span>{{ $movie['vote_average'] }}</span> /10</p>
                                                            <p class="describe">{{ $movie['overview'] }}</p>
                                                            <p class="run-time"> Run Time: 2h21’    .     <span>MMPA: PG-13 </span>    .     <span>Release: 1 May 2015</span></p>
                                                            <p>Director: <a href="#">Joss Whedon</a></p>
                                                            <p>Stars: <a href="#">Robert Downey Jr.,</a> <a href="#">Chris Evans,</a> <a href="#">  Chris Hemsworth</a></p>
                                                        </div>
                                                    </div>
                                                @endif
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
@endsection
