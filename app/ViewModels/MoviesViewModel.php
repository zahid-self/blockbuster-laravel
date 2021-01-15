<?php

namespace App\ViewModels;
use Spatie\ViewModels\ViewModel;
use Carbon\Carbon;

class MoviesViewModel extends ViewModel
{
    public $latestMovies;
    public $genres;
    public $popularMovies;
    public $upcomingMovies;
    public $topratedMovies;
    public $popularTvShow;
    public $upcomingTvShow;
    public $toprateTvShow;

    public function __construct($latestMovies, $popularMovies, $upcomingMovies, $topratedMovies, $popularTvShow, $upcomingTvShow, $toprateTvShow, $genres)
    {
        $this->latestMovies = $latestMovies;
        $this->genres = $genres;
        $this->popularMovies = $popularMovies;
        $this->upcomingMovies = $upcomingMovies;
        $this->topratedMovies = $topratedMovies;
        $this->popularTvShow = $popularTvShow;
        $this->upcomingTvShow = $upcomingTvShow;
        $this->toprateTvShow = $toprateTvShow;
    }

    public function latestMovies(){
        return $this->formattedMovies($this->latestMovies);
    }
    public function genres()
    {
        return collect($this->genres)->mapWithKeys(function($genre){
            return [$genre['id'] => $genre['name']];
        });
    }
    
    public function popularMovies(){
        return $this->formattedMovies($this->popularMovies);
    }
    public function upcomingMovies(){
        return $this->formattedMovies($this->upcomingMovies);
    }
    public function topratedMovies(){
        return $this->formattedMovies($this->topratedMovies);
    }
    public function popularTvShow(){
        return $this->formattedMovies($this->popularTvShow);
    }
    public function upcomingTvShow(){
        return $this->formattedMovies($this->upcomingTvShow);
    }
    public function toprateTvShow(){
        return $this->formattedMovies($this->toprateTvShow);
    }

    private function formattedMovies($movies){
        return collect($movies)->map(function($movie){
            // $genresFormatted = collect($movie['genre_ids'])->mapWithKeys(function($value){
            //     return [$value => $this->genres()->get($value)];
            // })->implode(', ');

            return collect($movie)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'],
                'vote_average' => $movie['vote_average'],
                // 'release_date' => Carbon::parse($movie['release_date'])->format('M d, Y'),
                'genres' => $this->genres(),
            ]);
        });
    }
}
