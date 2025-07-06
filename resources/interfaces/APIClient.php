<?php

namespace resources\interfaces;

interface APIClient
{
    public function get(): object;
    public function patch(array $data): object;
}
