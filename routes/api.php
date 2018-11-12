<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
$api = app('Dingo\Api\Routing\Router');
$api->version('v1',[
    'namespace' => 'App\Http\Controllers\Api',
    //设置返回数据格式,绑定bindings 中间键修改返回码，设置本地化
    'middleware' => ['serializer:array','bindings','change-locale']
], function($api) {
    $api->get('shop/{shop}/replies', 'RepliesController@index')
        ->name('api.shop.replies.index');
});