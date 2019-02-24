<?php

namespace App\Services\Airports;

class AirportService
{
    protected $model;

    public function __construct()
    {
        $this->model = new Airport;
    }

    public function browse()
    {
        return $this->model->get();
    }
}
