<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Airports\AirportService;

class AirportController extends Controller
{
    protected $service;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->service = new AirportService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $airPortData = $this->service->browse();
        return view('airports.browse', compact('airPortData'));
    }
}
