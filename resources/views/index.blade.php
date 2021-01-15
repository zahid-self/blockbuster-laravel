@extends('layouts.main')

@section('content')
    @include('includes.slider')
    <div class="movie-items  full-width">
        <div class="row">
            <div class="col-md-12">
                <div class="title-hd">
                    <h2>in theater</h2>
                    <a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
                </div>
                <div class="tabs">
                    <ul class="tab-links">
                        <li class="active"><a href="#tab1-h2">#Popular</a></li>
                        <li><a href="#tab2-h2"> #Coming soon</a></li>
                        <li><a href="#tab3-h2">  #Top rated</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab1-h2" class="tab active">
                            <div class="row">
                                <div class="slick-multiItem2">
                                    @foreach ($popularMovies as $movie)
                                        <x:movie-card :movie=$movie />
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div id="tab2-h2" class="tab">
                            <div class="row">
                                <div class="slick-multiItem2">
                                    @foreach ($upcomingMovies as $movie)
                                        <x:movie-card :movie=$movie />
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div id="tab3-h2" class="tab">
                            <div class="row">
                                <div class="slick-multiItem2">
                                    @foreach ($topratedMovies as $movie)
                                        <x:movie-card :movie=$movie />
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="title-hd">
                    <h2>on tv</h2>
                    <a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
                </div>
                <div class="tabs">
                    <ul class="tab-links-2">
                        <li class="active"><a href="#tab21-h2">#Popular</a></li>
                        <li><a href="#tab22-h2"> #Coming soon</a></li>
                        <li><a href="#tab23-h2">  #Top rated  </a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab21-h2" class="tab active">
                            <div class="row">
                                <div class="slick-multiItem2">
                                    @foreach ($popularTvShow as $movie)
                                        <x:popular-movie-card :movie=$movie />
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div id="tab22-h2" class="tab">
                        <div class="row">
                                <div class="slick-multiItem2">
                                    @foreach ($upcomingTvShow as $movie)
                                        <x:popular-movie-card :movie=$movie />
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div id="tab23-h2" class="tab">
                            <div class="row">
                                <div class="slick-multiItem2">
                                    @foreach ($toprateTvShow as $movie)
                                        <x:popular-movie-card :movie=$movie />
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.news')
@endsection