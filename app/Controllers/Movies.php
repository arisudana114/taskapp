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
        $ticket_model = new \App\Models\TicketModel;
        $movies_model = new \App\Models\MoviesModel;
        $user_model = new \App\Models\UserModel;

        $movies = $movies_model->find($id);
        $user = $user_model->find(current_user()->id);

        $ticket_model->insert(
            [
                'name' => implode(", ", $this->request->getPost("kursi")),
                'user_id' => current_user()->id,
                'movies_id' => $movies['id']
            ]
        );

        $ticket = $ticket_model->find($ticket_model->insertID);

        $this->sendActivationEmail($user, $movies, $ticket);

        return view("Movies/success");
    }

    public function sendActivationEmail($user, $movies, $ticket)
    {
        $email = service('email');

        $email->setTo($user->email);

        $email->setSubject('Pembelian tiket berhasil');

        $message = view('Movies/ticket_email', [
            'movies' => $movies,
            'ticket' => $ticket
        ]);

        $email->setMessage($message);

        $email->send();
    }
}
