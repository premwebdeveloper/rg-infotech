<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    public function index(){
        
        Redis::set('user:1:first_name', 'Prem');
        Redis::set('user:2:first_name', 'Ravi');
        Redis::set('user:3:first_name', 'Amit');

        for($i=0; $i <= 3; $i++){
            echo Redis::get('user:'.$i.':first_name');
        }
    }
}
