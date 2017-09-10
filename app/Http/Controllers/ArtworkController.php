<?php
/**
 * Created by PhpStorm.
 * User: PVer
 * Date: 2017/9/3
 * Time: 16:00
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtworkController extends Controller {

    public function index(){
        return view('artwork');
    }

    public function initprodcategory(){
        $category=config('sortconfig');
        $index = 1;
        foreach ($category as $key=>$value){
            $tmpflock = implode(',',$value);
            $result = DB::insert('insert into prodcategory (categoryid,categoryname,prodidflock) values (?,?,?)', [$index,$key,$tmpflock]);
            $index++;
            if($result == false)
                return 'fail';
        }
        return 'success';
    }

    public function initproduct(){
        $product=config('productconfig');
        $index=1;
        dd($product);
        foreach ($product as $key=>$value){

        }
    }


}