<?php

namespace source\controllers;

use Ngomafortuna\Apireceiver\CurlAPIClient;
use Ngomafortuna\RouteSystemSimple\Controller;

class PeapleController extends Controller
{
    public function index(?string $msg=null): void
    {
        $url = "https://reqres.in/api/users?page=2";
        $client = new CurlAPIClient($url);

        // die(var_dump($client->get()));
        // die(var_dump(($client->get())->data));

        $this->view->render('peaples',[
            'title' => 'Personagens',
            'description' => "Páginas de personagens... <br>Testando meu componente <a href='https://packagist.org/packages/ngomafortuna/apireceiver'>APIReceiver</a> com <a href='https://reqres.in/'>API REQRES</a>",
            'status' => !isset(($client->get())->error),
            'msg' => $msg,
            'persons' => ($client->get())->data ?? ($client->get())->error
        ]);
    }
    
    public function show(int $id): void
    {
        $url = "https://reqres.in/api/users/2";
        $client = new CurlAPIClient($url);

        // die(var_dump($id, $client->get()));
        // die(var_dump(($client->get())->data));

        $this->view->render('peaple',[
            'title' => (($client->get())->data)->first_name ?? 'Personagens',
            'description' => "Testando meu componente <a href='https://packagist.org/packages/ngomafortuna/apireceiver'>APIReceiver</a> com <a href='https://reqres.in/'>API REQRES</a>.",
            'status' => !isset(($client->get())->error),
            'person' => ($client->get())->data ?? ($client->get())->error
        ]);
    }
}
