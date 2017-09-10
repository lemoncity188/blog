<?php
/**
 * Created by PhpStorm.
 * User: gww
 * Date: 2017/8/5
 * Time: 11:31
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class HomeController extends Controller {

    public function index(){
        return view('home');
    }
}