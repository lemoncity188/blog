<?php
/**
 * Created by PhpStorm.
 * User: PVer
 * Date: 2017/9/3
 * Time: 16:00
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class ArtworkController extends Controller {

    public function index(){
        return view('artwork');
    }
}