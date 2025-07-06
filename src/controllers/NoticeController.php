<?php

namespace source\controllers;

use Ngomafortuna\RouteSystemSimple\Controller;

class NoticeController extends Controller
{
    private string $url = "http://127.0.0.1:8000/api/notice";

    public function index():void {

        $ch = curl_init($this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        curl_close($ch);

        $notices = json_decode($response);

        $this->view->render('notices', [
            'title' => 'Notícias',
            'description' => 'Confira as news aqui...',
            'status' => !!$notices,
            'notices' => $notices
        ]);
        
    }

    public function show(string $slug): void {

        $data = ["slugNotice" => $slug];

        $ch = curl_init($this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH"); // método PATCH
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);

        $response = curl_exec($ch);
        curl_close($ch);

        $notice = json_decode($response);

        $this->view->render('notice', [
            'title' => $notice->titleNotice ?? 'Oooooo',
            'description' => 'Confira as news aqui...',
            'slug' => $slug,
            'status' => !!$notice,
            'notice' => $notice
        ]);

    }

}
