<?php

namespace source\controllers;

use Ngomafortuna\RouteSystemSimple\Controller;
use resources\libraries\CurlAPIClient;

class UserController extends Controller
{
    protected string $url = 'http://127.0.0.1:8105/api/user';
    
    public function index(?string $msg=null): void
    {
        $api = new CurlAPIClient($this->url);
        $users = $api->get();

        // die(var_dump($users));

        $this->view->render('users', [
            'title' => 'Utilizadores',
            'description' => 'Conheça os utilizadores da API consumer...',
            'status' => !isset($users->error),
            'users' => $users,
            'msg' => $msg
        ]);
    }
    
    public function show(int $id): void
    {
        $api = new CurlAPIClient($this->url);
        $user = $api->patch(["id" => $id]);

        $this->view->render('user', [
            'title' => $user->name ?? 'Utilizadores',
            'description' => 'Conheça os utilizadores da API consumer...',
            'status' => !isset($user->error),
            'id' => $id,
            'user' => $user
        ]);
    }
    
    public function new(?string $msg=null): void
    {
        $this->view->render('userNew', [
            'title' => 'Novo utilizador',
            'description' => 'Crie novos utilizadores',
            'msg' => $msg
        ]);
    }
    
    public function save(): void
    {
        $api = new CurlAPIClient($this->url);
        $result = $api->post($_POST);

        $this->new($result->message ?? $result->error);
    }
    
    public function edit(int|array $id): void
    {
        $api = new CurlAPIClient($this->url);
        $user = $api->patch(["id" => $id[0]]);
        
        $this->view->render('userEdit', [
            'title' => $user->name ?? 'editar utilizador',
            'description' => 'Editar utilizador seleccionado',
            'user' => $user
        ]);
    }
    
    public function update(): void
    {
        $api = new CurlAPIClient($this->url);
        $result = $api->put($_POST);

        $this->index($result->message ?? $result->error);
    }
    
    public function delete(int|array $id): void
    {
        $api = new CurlAPIClient($this->url);
        $result = $api->delete(["id" => $id[0]]);

        $this->index($result->message ?? $result->error);
    }

}
