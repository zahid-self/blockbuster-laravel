@extends('layouts.main')

@section('content')
    <div class="hero common-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-ct">
                        <h1>Now playing movies</h1>
                        <ul class="breadcumb">
                            <li class="active"><a href="{{ route('home') }}">Home</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="topbar-filter fw">
                        <p>Found <span>{{ count($nowPlayingMovies) }} movies</span> in total</p>
                    </div>
                    <div class="flex-wrap-movielist mv-grid-fw">
                        @foreach ($nowPlayingMovies as $movie)
                            <div class="movie-item-style-2 movie-item-style-1">
                                <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="">
                                <div class="hvr-inner">
                                    <a href="{{ route('movies.show',$movie['id']) }}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                </div>
                                <div class="mv-item-infor">
                                    <h6><a href="{{ route('movies.show',$movie['id']) }}">{{ $movie['title'] }}</a></h6>
                                    <p class="rate"><i class="ion-android-star"></i><span>{{ $movie['vote_average'] }}</span> /10</p>
                                </div>
                            </div>					
                        @endforeach
                    </div>		
                </div>
            </div>
        </div>
    </div>
@endsection