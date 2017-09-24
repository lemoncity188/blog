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

    public function getProduct($type,$id){
        $result = DB::select('select * from product where prodid=?',[$id]);
//        dd($result);
        return view('product',['result'=>$result]);
    }

    //插入商品
    public function initproduct(){
        $product=config('productconfig');
        $proddesc = null;
        foreach ($product as $key=>$value){
            $proddesc = json_encode($value['proddesc']);
            $result = DB::insert('insert into product (prodid,name,mainpic,descpic,proddesc,spec,color,texture,num,price,url,brand,model,grocery,cateid) values
                                (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', [$value['prodid'],"'".$value['name']."'","'".$value['mainpic']."'","'".$value['descpic']."'",
                                $proddesc,"'".$value['spec']."'", "'".$value['color']."'", "'".$value['texture']."'",$value['num'],
                                $value['price'],"'".$value['url']."'","'".$value['brand']."'","'".$value['model']."'","'".$value['grocery']."'",$value['cateid']
                                ]);
            if($result == false)
                return 'fail';
        }
        return 'success';
    }


}