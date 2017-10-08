<?php
/**
 * Created by gww.
 * User: PVer
 * Date: 2017/10/7
 * Time: 11:40
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function getGuestInfo(Request $request){
        $input = $request->all();
        $result = DB::insert('insert into contact (name,email,linkedin,corporation,message) values
                                (?,?,?,?,?)', [$input['name'],$input['email'],$input['linkedin'],$input['corporation'],$input['message']
        ]);
        return $result?'success':'fail';
    }
}