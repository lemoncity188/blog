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

//        $test=[
//            'shortimg'=>'url/img',
//            'midstimg'=>'midurl/img',
//            'largeimg'=>'largeurl/img'
//        ];
        $category=config('sort');
        foreach ($category as $key=>$value){
            $tmpflock = implode(',',$value);
            $result = DB::insert('insert into prodcategory (categoryname,prodidflock) values (?,?)', [$key,$tmpflock]);
            if($result == false)
                return 'fail';
        }
        return 'success';
    }


}