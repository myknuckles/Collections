<?php

namespace App\Controller;

class GamesController extends AppController
{
	public function index()
    {
        $this->loadComponent('Paginator');
        $games = $this->Paginator->paginate($this->Games->find());
        $this->set(compact('games'));
    }

    public function view($slug = null)
    {
        $game = $this->Games->findBySlug($slug)->firstOrFail();
        $this->set(compact('game'));
    }
}
