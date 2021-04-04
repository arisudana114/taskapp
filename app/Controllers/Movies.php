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

    public function detail($id)
    {
        $model = new \App\Models\MoviesModel;
        $movie = $model->find($id);

        return view("Movies/detail", [
            'movies' => $movie
        ]);
    }

    public function beli($id)
    {
        $model = new \App\Models\MoviesModel;
        $movie = $model->find($id);

        return view("Movies/beli", [
            'movies' => $movie
        ]);
    }

    public function ticket_process($id)
    {
        $model = new \App\Models\TicketModel;
        $movie = new \App\Models\MoviesModel;

        $data = $movie->find($id);

        $model->insert(
            [
                'name' => $this->request->getPost("nama"),
                'user_id' => current_user()->id,
                'movies_id' => $data['id']
            ]
        );
    }
}
