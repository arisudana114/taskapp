<?php

namespace App\Controllers;

class Movies extends BaseController
{
    public function index()
    {
        $model = new \App\Models\MoviesModel;
        $data = $model->findAll();

        return view("Movies/index", [
            'movies' => $data
        ]);
    }

    public function show($id)
    {
        $model = new \App\Models\MoviesModel;
        $movie = $model->find($id);

        return view("Movies/show", [
            'movies' => $movie
        ]);
    }
}
