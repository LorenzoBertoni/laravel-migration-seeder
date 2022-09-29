<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Train;

class TrainController extends Controller
{
    public function index() {

        $trains = Train::whereDay('departure_time', '29')->get();

        return view('homePage', ['trains' => $trains]);
    }
}
