<?php

namespace resources\libraries;

use resources\interfaces\APIClient;


class CurlAPIClient implements APIClient
{
    private $ch;

    public function __construct(public string $url) {
        $this->ch = curl_init($this->url);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->ch, CURLOPT_CONNECTTIMEOUT, 5); // 5 segundos para conectar
        curl_setopt($this->ch, CURLOPT_TIMEOUT, 10);       // 10 segundos no total da requisição
    }

    public function get(): object
    {
        $response = curl_exec($this->ch);
        curl_close($this->ch);

        return $this->decodeResponse($response, curl_error($this->ch));
    }

    public function patch(array $data): object
    {
        curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, "PATCH"); // método PATCH
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($this->ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);

        $response = curl_exec($this->ch);
        curl_close($this->ch);

        return $this->decodeResponse($response, curl_error($this->ch));
    }

    public function post(array $data): object
    {
        curl_setopt($this->ch, CURLOPT_POST, true); // método POST
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data)); // corpo da requisição
        curl_setopt($this->ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);

        $response = curl_exec($this->ch);
        curl_close($this->ch);

        return $this->decodeResponse($response, curl_error($this->ch));
    }

    public function put(array $data): object
    {
        curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, "PUT"); // método PUT
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($this->ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);

        $response = curl_exec($this->ch);
        curl_close($this->ch);

        return $this->decodeResponse($response, curl_error($this->ch));
    }

    public function delete(array $data): object
    {
        curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, "DELETE"); // método DELETE
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

        $response = curl_exec($this->ch);
        curl_close($this->ch);

        return $this->decodeResponse($response, curl_error($this->ch));
    }

    private function decodeResponse(string $response, ?string $error=null): object
    {
        if($error) return (object)['error' => $error];
            
        return ($response)? (object)json_decode($response): (object)['error' => 'Connetion error'];
    }
}
