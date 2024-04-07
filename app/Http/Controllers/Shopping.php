<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\cart;
use App\Models\ProductDetails;
class Shopping extends Controller
{

  public function index()
    {

    
    
      $cartItems = DB::table('carts')
      ->join('products' , 'carts.productid' , '=' , 'products.id')
      ->get();
      // return $cartItem;
                 
    return view('cart.index', compact('cartItems'));
        
       

        
       
    }
    public function GetUsersAPI()
    {
      $apiURL = 'https://jsonplaceholder.typicode.com/users';
      $headers = [
        'Content-Type' => 'application/json',
      ];
      $response = Http::withHeaders($headers)->get($apiURL, [
        'email' => 'Sincere@april.biz',
    ]);
    $data = $response->json();
    
    dd($data);
    }


    public function showListItemsPhone(Request $request)
    {
      //   $data=DB::table('products')
      //   ->join('product_details','products.id','=','product_details.productid')
      //  ->get();
      $data=DB::table('products')
      ->join('product_details','product_details.productid','=','products.id')
     ->get();
    //  return $data;
       $tax=15/100;
       $descount=10;
       foreach($data as $key=>$row)
       {
       $data[$key]->total=($data[$key]->price*$tax)+$data[$key]->price;
       $data[$key]->descount=$descount;
       $data[$key]->tax=$tax;
       $data[$key]->net=$data[$key]->total-$data[$key]->descount;}
       $row=[];
      /*foreach($data as $key=>$items)
       {
       $row[$key]=[
            'productname'=>$data[$key]->productname,
              'price'=>$data[$key]->productname,
               'color'=>$data[$key]->productname,
               'images'=>$data[$key]->images,
               'description'=>$data[$key]->description,
                'total'=>($data[$key]->price*$tax)+$data[$key]->price,
                'descount'=>$descount,
                'net'=>$data[$key]->total- $data[$key]->descount,
       ];
          
       }
       dd($row);*/
       return view('shopping.list-items',['data'=>$data]);
    }
    public function showDetailsphone($id)
    {
      // return $id;
        $data=DB::table('products')
        ->join('product_details','products.id','=','product_details.productid')
        ->where('product_details.id','=',$id)
        ->first();
        // return $data;
        $tax=15/100;
        $descount=10;
        $data->total=($data->price*$tax)+$data->price;
       $data->descount=$descount;
       $data->tax=$tax;
       $data->net=$data->total-$data->descount;
   
        

 return view('shopping.details',['data'=>$data]);

    }
    public function Add_to_cart(Request $request, $id){
      $userid=$request->user()->id; //get current usdr id
      $data=DB::table('products')
      ->join('product_details','products.id','=','product_details.productid')
      ->where('product_details.id','=',$id)
      ->first();
      $tax=15/100;
        $descount=10;
        $data->total=($data->price*$tax)+$data->price;
       $data->descount=$descount;
       $data->tax=$tax;
       $data->net=$data->total-$data->descount;
       $row=[
        'productid'=>$data->id,
         'price'=>$data->price,
          'qty'=>$data->qty,
          'Tax'=>$data->tax,
           'Total'=>$data->total,
          'Desc'=>$data->descount,
           'Net'=>$data->net,
           'userid'=>$userid
       ];
          DB::table('carts')->insert($row);
         $count= DB::table('carts')
          ->where('userid','=',$userid)
          ->count();
          Session::put('count',$count);
         return redirect()->back();
    }

    }