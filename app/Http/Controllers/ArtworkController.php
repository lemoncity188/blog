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
        $category = explode(',',$category);
        $mainimgurl = DB::select('select mainpic,prodid from product where prodid in (?,?,?,?,?,?,?,?)',$category);
        $queries = DB::getQueryLog();
        $last_query = end($queries);
        return view('artwork',['sort'=>$mainimgurl]);
    }

    public function initprodcategory(){
        $category=config('sortconfig');
        $index = 1;
        foreach ($category as $key=>$value){
            $tmpflock = implode(',',$value);
            $result = DB::insert('insert into prodcategory (categoryid,categoryname,prodidflock) values (?,?,?,?,?,?,?,?)', [$index,$key,$tmpflock]);
            $index++;
            if($result == false)
                return 'fail';
        }
        return 'success';
    }

    //插入商品
    public function initproduct(){

        $product=config('productconfig');
        $productdesc = null;
        foreach ($product as $key=>$value){
            $productdesc = json_encode($value['proddesc']);
            $result = DB::insert('insert into product (prodid,name,mainpic,descpic,proddesc,spec,color,texture,num,price,url,brand,type,grocery,cateid) values
                                (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', [$value['prodid'],$value['name'],$value['mainpic'],$value['descpic'],
                $productdesc,$value['spec'], $value['color'], $value['texture'],$value['num'], $value['price'],$value['url'],
                $value['brand'],$value['type'],$value['grocery'],$value['cateid']
            ]);
            if($result == false)
                return 'fail';
        }
        return 'success';
    }

    public function getClassify($type){
        $result = DB::select('select * from product where type=?',[$type]);

        return view('artwork',['sort'=>$result,'type'=>$type]);
    }




}