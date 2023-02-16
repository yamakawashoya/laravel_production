<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductionController extends Controller
{
    public function index($building="建物です")
    {
        return $building;
    }
    public function num($room)
    {
        return '部屋番号は'.$room.'です';
    }
}
