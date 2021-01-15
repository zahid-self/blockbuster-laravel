<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class MovieViewModel extends ViewModel
{
    public $movieDetails;
    public $similarMovies;
    // public $reviews;
    // public $genres;

    public function __construct($movieDetails, $similarMovies)
    {
        $this->movieDetails = $movieDetails;
        $this->similarMovies = $similarMovies;
        // $this->reviews = $reviews;
        // $this->genres = $genres;
    }

    public function movieDetails()
    {
        return $this->formattedMovies($this->movieDetails);
    }

    public function similarMovies()
    {
        return $this->formattedMovies($this->similarMovies);
    }

    // public function reviews()
    // {
    //     return $this->movie($this->reviews);
    // }

    // public function genres()
    // {
    //     return collect($this->genres)->mapWithKeys(function($genre){
    //         return [$genre['id'] => $genre['name']];
    //     });
    // }

    private function formattedMovies($movies){
        return collect($movies)->map(function($movie){
            // $genresFormatted = collect($movie['genre_ids'])->mapWithKeys(function($value){
            //     return [$value => $this->genres()->get($value)];
            // })->implode(', ');

            return collect($movie)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'],
                'vote_average' => $movie['vote_average'],
                // 'release_date' => Carbon::parse($movie['release_date'])->format('M d, Y'),
                // 'genres' => $this->genres(),
            ]);
        });
    }
}
