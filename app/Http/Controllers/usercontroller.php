<?php

namespace App\Http\Controllers;

use App\Models\topclient;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\cosmaticproduct;
use App\Models\jewelleryproduct;
use App\Models\contact;
use App\Models\topsaleproduct;
use App\Models\minishopproduct;
class usercontroller extends Controller
{
    public function userdata(Request $insert)
    {
        $data = new user();
        $data->name = $insert->name;
        $data->email = $insert->email;
        $data->number = $insert->password;
        $data->save();
        return redirect()->back();
    }

    public function userdatafetch()
    {
        $data = user::all();
        return view('dashboard_userdata', compact('data'));
    }

    // cosmatic-product-work//
    public function insertdata(Request $cospro)
    {
        $cosmdata = new cosmaticproduct();
        $cosmdata->product_name = $cospro->proName;
        $cosmdata->product_price = $cospro->proPrice;
        $image = $cospro->FILE('proimg');
        $imgext = rand() . "." . $image->getClientOriginalName();
        $path = $image->move('productimg/', $imgext);
        $cosmdata->product_image = $path;
        $cosmdata->save();
        return redirect()->back();
    }

    public function fechdata()
    {
        $cosmdata = cosmaticproduct::all();
        return view('cosmatic_FETCH', compact('cosmdata'));
    }

    public function deletedpro($cosid)
    {
        $cosmdata = cosmaticproduct::find($cosid);
        $cosmdata->delete(); 
        return redirect()->back();
    }

    public function updatecos($cosid){
        $cosdata = cosmaticproduct::find($cosid);
        $cosmdata=cosmaticproduct::all();
        return view('cosupdate', compact('cosdata','cosmdata'));
    }

     public function cosupdated($cosid, Request $cu){
         $cosmdata = cosmaticproduct::find($cosid);
         $cosmdata = new cosmaticproduct();
         $cosmdata->product_name = $cu->proName;
         $cosmdata->product_price = $cu->proPrice;
         $image = $cu->FILE('proimg');
         $imgext = rand() . "." . $image->getClientOriginalName();
         $path = $image->move('productimgudate/', $imgext);
        $cosmdata->product_image = $path;
        $cosmdata->update();
         return redirect()->back();

     }
    public function cos_fetch_pro(){
        $cosmdata = cosmaticproduct::all();
        return view('/cosmatic', compact('cosmdata'));
    }

    //jewellery-product-work//
    public function insert_data(Request $cospro)
    {
        $cosdata = new jewelleryproduct ();
        $cosdata->product_name = $cospro->proName;
        $cosdata->product_price = $cospro->proPrice;
        $image = $cospro->FILE('proimg');
        $imgext = rand() . "." . $image->getClientOriginalName();
        $path = $image->move('proJeweimg/', $imgext);
        $cosdata->product_image = $path;
        $cosdata->save();
        return redirect()->back();
    }
    public function fech_data()
    {
        $cosdata = jewelleryproduct::all();
        return view('jewellery_FETCH', compact('cosdata'));
    }
    public function deleted_pro($cosid)
    {
        $cosdata = jewelleryproduct::find($cosid);
        $cosdata->delete();
        return redirect()->back();
    }
    
    public function cosfetch_pro(){
        $cosdata = jewelleryproduct::all();
        return view('/jewellery', compact('cosdata'));
    }
    
    // Contact-work//
    public function inserteddata(Request $contact){
        $contactdata = new contact();
        $contactdata->name=$contact->USER_NAME;
        $contactdata->email=$contact->USER_EMAIL;
        $contactdata->message=$contact->USER_MESSAGE;
        $contactdata->save();
        return redirect()->back();
    }
    public function fetchcontact()
    {
        $contactdata = contact::all();
        return view('contactlogin', compact('contactdata'));
    }
    public function deletuser($contactid)
    {
        $contactdata = contact::find($contactid);
        $contactdata->delete();
        return redirect()->back();
    }
    //top-sale-work //
    public function topinsertdata(Request $cospro)
    {
        $cosdata = new topsaleproduct ();
        $cosdata->product_name = $cospro->proName;
        $cosdata->product_price = $cospro->proPrice;
        $cosdata->product_detail = $cospro->prodetail;
        $image = $cospro->FILE('proimg');
        $imgext = rand() . "." . $image->getClientOriginalName();
        $path = $image->move('TopProIMG/', $imgext);
        $cosdata->product_image = $path;
        $cosdata->save();
        return redirect()->back();
    }
    public function topfech_data()
    {
        $cosdata = topsaleproduct::all();
        return view('sale_FETCH', compact('cosdata'));
    }
    public function saledeleted_pro($cosid)
    {
        $cosdata = topsaleproduct::find($cosid);
        $cosdata->delete();
        return redirect()->back();
    }
    public function salefetch_pro(){
        $cosdata = topsaleproduct::all();
        return view('/topsale', compact('cosdata'));
    }
    // top-client-work //
    public function top_insertdata(Request $cospro)
    {
        $cosdata = new topclient ();
        $cosdata->client_name=$cospro->proName;
        $cosdata->client_message=$cospro->USER_MESSAGE;
        $image = $cospro->FILE('proimg');
        $imgext = rand() . "." . $image->getClientOriginalName();
        $path = $image->move('TopclientIMG/', $imgext);
        $cosdata->client_image= $path;
        $cosdata->save();
        return redirect()->back();
    }
    public function top_fetch_data()
    {
        $cosdata = topclient::all();
        return view('client_FETCH', compact('cosdata'));
    }
    public function clientdeleted_pro($cosid)
    {
        $cosdata = topclient::find($cosid);
        $cosdata->delete();
        return redirect()->back();
    }
    public function clientfetch_pro(){
        $cosdata = topclient::all();
        return view('/topclient', compact('cosdata'));
    }
    // MNISHOP-WORK//
    public function miniinsert(Request $minipro){
        $minidata = new minishopproduct ();
        $minidata->product_name = $minipro->proName;
        $minidata->product_price = $minipro->proPrice;
        $image = $minipro->FILE('proimg');
        $imgext = rand() . "." . $image->getClientOriginalName();
        $path = $image->move('minishopimg/', $imgext);
        $minidata->product_image = $path;
        $minidata->save();
        return redirect()->back();
    }
    public function minifetch(){
        $minidata = minishopproduct::all();
        return view('minishop_FETCH',compact('minidata'));
    }
    public function minideleted_pro($miniid)
    {
        $minidata = minishopproduct::find($miniid);
        $minidata->delete();
        return redirect()->back();
    }
    public function minifetch_pro(){
        $minidata = minishopproduct::all();
        return view('/index',compact('minidata'));
    }


    public function add(Request $request)
{
    $productId = $request->input('product_id');
    $cart = session()->get('cart', []);

    if(isset($cart[$productId])) {
        $cart[$productId]['quantity']++;
    } else {
        $cart[$productId] = [
            "name" => $request->input('product_name'),
            "price" => $request->input('product_price'),
            "quantity" => 1
        ];
    }

    session()->put('cart', $cart);
    return response()->json(['success' => 'Product added to cart']);
}
}
