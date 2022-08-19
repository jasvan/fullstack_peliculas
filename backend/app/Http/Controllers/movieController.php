<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movies;
class movieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = movies::all();
        return $movies;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $movie = new movies();
        $movie-> img =  $request-> img;
        $movie-> titulo = $request-> titulo;
        $movie-> date = $request-> date;
        $movie-> qualification = $request-> qualification;
        $movie-> qualificationFull = $request-> qualificationFull;
        $movie-> favorite = $request-> favorite;
        $movie-> describe = $request-> describe;
        $movie-> runtime = $request-> runtime;
        $movie-> mmpa = $request-> mmpa;
        $movie-> release = $request-> release;
        $movie-> Director = $request-> Director;
        $movie-> stars = $request-> stars;
        $movie-> save();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       $movie = movies::find($id);
       return $movie;
    }

    /**
     * Update the specified resource in storage.
    */
    public function update(Request $request, $id)
    {
         $movie = movies::findOrFail($request->id);
         $movie-> img =  $request-> img;
         $movie-> titulo = $request-> titulo;
         $movie-> date = $request-> date;
         $movie-> qualification = $request-> qualification;
         $movie-> qualificationFull = $request-> qualificationFull;
         $movie-> favorite = $request-> favorite;
         $movie-> describe = $request-> describe;
         $movie-> runtime = $request-> runtime;
         $movie-> mmpa = $request-> mmpa;
         $movie-> release = $request-> release;
         $movie-> Director = $request-> Director;
         $movie-> stars = $request-> stars;
         $movie-> save();
         return $movie;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       $movie = movies::destroy($id);
       return $movie;
    }
}
