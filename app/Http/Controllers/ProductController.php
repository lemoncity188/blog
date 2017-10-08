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
    public function index($type,$prodid){
        $result = DB::select('select * from product where prodid=?',[$prodid]);
        $result[0]->proddesc = json_decode($result[0]->proddesc);
        $result[0]->descpic = json_decode($result[0]->descpic);
        return view('product',['proddetail'=>$result[0]]);
    }

}