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
        $sort = DB::select('select * from prodcategory where categoryname=?',['shouldbag']);
        $category = $sort[0]->prodidflock;
//        $category = explode(',',$category);
//        dd($category);
        $mainimgurl = DB::select('select mainpic,prodid from product where prodid in (?)',[$category]);
//        dd($mainimgurl);
        return view('artwork',['sort'=>$mainimgurl]);
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

    public function getsort($type){
        $sort = DB::select('select * from prodcategory where categoryname=?',[$type]);
        dd('kan');
        return view('artwork',['sort'=>$sort]);
    }




}