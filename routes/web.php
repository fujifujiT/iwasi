
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("",function() {
    return view("toppage");
});


Route::get("/product",function(){
    $items = DB::select("SELECT * FROM items");
    return view("product",[
        "items" => $items,
        "cat" => null
    ]);
});

Route::get("/DX",function (){
    $items = DB::select("SELECT * FROM items where cat = 'DX'");
        return view("product",[
            "items" => $items,
            "cat" => "dx"
        ]);
});

Route::get("/game",function (){
    $items = DB::select("SELECT * FROM items where cat = 'game'");
    return view("product",[
        "items" => $items,
        "cat" => "game"
    ]);
});

Route::get("/fig",function (){
    $items = DB::select("SELECT * FROM items where cat = 'fig'");
    return view("product",[
        "items" => $items,
        "cat" => "fig"
    ]);
});

Route::get("/toy",function (){
    $items = DB::select("SELECT * FROM items where cat = 'toy'");
    return view("product",[
        "items" => $items,
        "cat" => "toy"
    ]);
});

Route::get("/craft",function (){
    $items = DB::select("SELECT * FROM items where cat = 'craft'");
    return view("product",[
        "items" => $items,
        "cat" => "craft"
    ]);
});

Route::get("/baby",function (){
    $items = DB::select("SELECT * FROM items where cat = 'baby'");
    return view("product",[
        "items" => $items,
        "cat" => "baby"
    ]);
});

Route::get("/other",function (){
    $items = DB::select("SELECT * FROM items where cat = 'other'");
    return view("product",[
        "items" => $items,
        "cat" => "other"
    ]);
});

Route::get("/goods",function (){
    $items = DB::select("SELECT * FROM items where cat = 'goods'");
    return view("product",[
        "items" => $items,
        "cat" => "goods"
    ]);
});

Route::post("/search",function ($itemId){
    $items = DB::select("SELECT * FROM items where name LIKE = '%%'",[$itemId]);
    if(count($items)){
        return view("product",[
        "items" => $items,
        ]);
    }else{
        return abort(404);
    }
});


Route::get("/detail/{item_id}",function($itemId){
    $items = DB::select("SELECT * FROM items where id = ?",[$itemId]);
    if(count($items)){
        return view("detail",[
            "item" => $items[0]
        ]);
    }else{
        return abort(404);
    }
});

Route::get("/session_test",function(){
    $count = request()->session()->get("COUNTER",0);
    $count = $count + 1;
    request()->session()->put("COUNTER",$count);
    return "{$count}回目のアクセスです";
});



// [POST] /cart/{item_id} カートの追加
Route::post("/cart/{item_id}",function($itemId){
    $items = DB::select("SELECT * FROM items where id = ?",[$itemId]);
    if(count($items)){
        $cartItems = request()->session()->get("CART",[]);
        $cartItems[] = $items[0];
        request()->session()->put("CART",$cartItems);
        return redirect("/cart");
    }else{
        return abort(404);
    }
});

// [GET] /cart カートの表示
Route::get("/cart",function(){
    $cartItems = request()->session()->get("CART",[]);
    return view("cart",[
        "items" => $cartItems
    ]);
});



// [POST] /cart/{item_id} カートの削除
Route::post("/cart/{item_id}/delete",function($itemId){
    request()->session()->forget("CART");
    return redirect("/cart");
});



// [POST] /cart/delete/{index} カートの個別削除
Route::post("/cart/delete/{index}",function($index){
    $cartItems = request()->session()->get("CART",[]);
    unset($cartItems[$index]);
    request()->session()->put("CART",$cartItems);
    return redirect("/cart");
});

//購入画面
Route::get("/buy",function(){
    $cartItems = request()->session()->get("CART",[]);

    return view("buy",[
        "items" => $cartItems
    ]);
});

//購入処理
Route::post("buy",function(){
    $validator = Validator::make(request()->all(), [
        'name' => ['required','max:10'],
        'email' => ['required','email'],
    ])->validate();
    // ここで購入情報を記録する。
    request()->session()->forget("CART");
    return redirect("thanks");
});

//購入後画面
Route::get("thanks",function(){
    $mg = Mailgun\Mailgun::create('key-4b1de87f501a2c49d6c840593814401f');

    # Now, compose and send your message.
    # $mg->messages()->send($domain, $params);
    $mg->messages()->send('sandbox4454c48aa5a6477e8db01b8d80aa49e3.mailgun.org', [
        'from'    => 'b6270@oic.jp',
        'to'      => 'b6270@oic.jp',
        'subject' => 'ECサイト',
        'text'    => '購入完了.'
    ]);
    return redirect("/cart");
});

//メール送信画面