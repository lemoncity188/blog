<?php
/**
 * Created by PhpStorm.
 * User: gww
 * Date: 2017/9/24
 * Time: 9:05
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function index(){
        return view('product');
    }

}