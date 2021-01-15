<?php

namespace App\Http\Controllers;

use App\ViewModels\MoviesViewModel;
use App\ViewModels\MovieViewModel;
use App\ViewModels\SliderViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //on theater
        $latestMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/now_playing?')
            ->json()['results'];

        $popularMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/popular')
            ->json()['results'];

        $upcomingMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/upcoming?')
            ->json()['results'];
            
        $topratedMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/upcoming?')
            ->json()['results'];

        $genres = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/movie/list')
            ->json()['genres'];

        // $genres = collect($genreArray)->mapWithKeys(function($genre){
        //     return [$genre['id'] => $genre['name']];
        // });

        //on tv
        $popularTvShow = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/tv/popular?')
            ->json()['results'];

        $upcomingTvShow = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/tv/airing_today?')
            ->json()['results'];

        $toprateTvShow = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/tv/top_rated?')
        ->json()['results'];

        $viewModel = new MoviesViewModel(
            $latestMovies,
            $popularMovies,
            $upcomingMovies,
            $topratedMovies,
            $popularTvShow,
            $upcomingTvShow,
            $toprateTvShow,
            $genres
        );
        return view('index',$viewModel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movieDetails = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/'.$id.'?append_to_response=credits,videos,images')
            ->json();

        $similarMovies = Http::withToken(config('services.tmdb.token'))
            ->get("https://api.themoviedb.org/3/movie/{$id}/similar?")
            ->json()['results'];

        $reviews = Http::withToken(config('services.tmdb.token'))
            ->get("https://api.themoviedb.org/3/movie/{$id}/reviews?")
            ->json()['results'];

        $genreArray = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/genre/movie/list?')
        ->json()['genres'];


        $genres = collect($genreArray)->mapWithKeys(function($genre){
            return [$genre['id'] => $genre['name']];
        });

        // $movieViewModel = new MovieViewModel(
        //     $movieDetails,
        //     $similarMovies,
        //     // $reviews,
        //     // $genres,
        // );
        return view('show',[
            'movieDetails' => $movieDetails,
            'genres' => $genres,
            'similarMovies' => $similarMovies,
            'reviews' => $reviews,
        ]);

        // return view('show',$movieViewModel,[
        //     'reviews' => $reviews,
        //     'genres' => $genres
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
