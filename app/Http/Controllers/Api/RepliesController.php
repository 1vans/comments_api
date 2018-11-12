<?php

namespace App\Http\Controllers\Api;

use App\Shop;
use App\Transformers\ReplyTransformer;
use Illuminate\Http\Request;


class RepliesController extends Controller
{
    //
    public function index(Shop $shop){
        return '1';
        //$replies = $shop->replies()->paginate(20);

        //return $this->response->paginator($replies, new ReplyTransformer());
    }
}
