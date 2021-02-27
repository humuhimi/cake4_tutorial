<?php
// src/Controller/ArticlesController.php

namespace App\Controller;

use Phinx\Db\Table\Index;

class ArticlesController extends AppController
{
    public function index()
    {
        $this->loadComponent('Paginator');
        $articles = $this->Paginator->paginate($this->Articles->find());
        $this->set(compact('articles'));
    }
}
