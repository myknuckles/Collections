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

	public function add()
    {
        if ($this->request->is('games')) {
            $games = $this->Games->newEntity($this->request->getData());
            if ($this->Games->save($games)) {
                $this->Flash->success(__('The game has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Unable to add the game.'));
            }
            $this->set('games', $games);
        }
    }
}
