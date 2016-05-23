<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class MyController extends Controller
{
    function index()
    {
        $date=date("Y");
        return view('index',['date'=>$date]);
    }
}