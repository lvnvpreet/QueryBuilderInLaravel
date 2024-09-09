<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function queries(){
        $result = DB::table('users')->get();
        // $result = DB::table('users')->where('name','Navpreet Kour')->get();

        // $result = DB::table('users')->first();
        // $result = [$result];

        // $result = DB::table('users')->insert([
        //     'name'=>'Manraj',
        //     'email'=>'manraj@test.com',
        //     'mobile'=>'9988776655',
        // ]);
        // if($result){
        //     return 'Data Inserted!';
        // }else{
        //     return 'Error: data not inserted';
        // }

        // $result = DB::table('users')->where('name','Amrit')->update([
        //     'name'=>'Amritpal Singh',
        // ]);
        // $result = DB::table('users')->where('name','Khushpreet')->update([
        //     'name'=>'Khushpreet Kour',
        // ]);
        
        // $result = DB::table('users')->where('name','Manraj')->update([
        //     'name'=>'Manraj Singh',
        // ]);


        // $result = DB::table('users')->where('name','Manraj')->delete();
        // if($result){
        //     return 'Data Deleted!';
        // }else{
        //     return 'Error: data not Deleted';
        // }




        return view('users',['data'=>$result]);
    }
}
