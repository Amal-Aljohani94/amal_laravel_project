<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductDetails;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App\Http\Controllers\HomeController;
class Dashboard extends Controller
{

public function __construct() 
{
    $this->middleware('auth');
}

public function logout(Request $request)
{
 Auth::logout();
return redirect('/login');
}

public function Index(Request $request) {
   
    return view('dashboard.index');
}

public function Del($id) 
{
$products = Product::find($id);
$products->delete();
return Redirect('/dashboard/products');
}
public function test()
{
    $data = DB::table('products')
    ->join('product_details', 'products.id', '=', 'product_details.productid')
    ->get();
    return Response()->json($data);
}
public function CreateProducts(Request $request) {

    $validate = $request->validate([
        'productname'=> 'required|min:6',
        
    ]);

    

    $products = Product::create([
        'productname'=>$request->productname
    ]);
    $products->save();
    return redirect('/dashboard/products');
}



public function UpdateProducts(Request $request)
{
$items = Product::where('id', $request->id)->update([
'productname'=>$request->productname,

]);
return Redirect('/dashboard/products');
}

public function Search(Request $request)
{
$product = Product::where('Productname', $request->name)->get();
return view('dashboard.products', ['products'=>$product]);

}


public function clearSearch(Request $request)
{
    $products = Product::all();
    return view('dashboard.products', ['products'=>$products]);

}


public function GetProductDetails() {
  
    //$productsdetails = ProductDetails::all();
    $products = Product::all();
    $productsdetails = DB::table('products')
    ->join('product_details', 'products.id', '=', 'product_details.productid')
    ->get();
    return view('dashboard.Productdetails', ['productsdetails'=>$productsdetails, 'products'=>$products]);
  
}





public function GetProducts(Request $request) {
    if ($request->isMethod('get')) {

   
    $products = Product::all();
    return view('dashboard.products', ['products'=>$products]);
}
elseif ($request->isMethod('post')) {
    $product = Product::where('Productname', $request->name)->get();
return view('dashboard.products', ['products'=>$product]);

}

  
}
public function EditProducts($id) 
{
    $products = Product::find($id);
    $products->update();


   
   return view('dashboard.edit', ['products'=>$products]);


}
/*
public function EditProducts(Request $request) 
{
    $products = Product::find($request);
    $products->name = $request->name;
    $products->save();


   
   return view('dashboard.edit', ['products'=>$products]);


}*/




public function CreateProductsdetails(Request $request) {

    $validate = $request->validate([
        'color'=> 'required|min:3',
        'price'=> 'required|numeric',
        'qty'=> 'required',
        'description'=> 'required',
    //'images'=>'required|image',
       
        
        
    ]);
    
  

  //  $imageName = time().'.'.$request->images->extension(); // اسم ملف الصورة
  //  $request->images->move(public_path('images'), $imageName); // حفظ الصورة في الدليل public/images
   // $request->images->move(public_path('assets/images'), $imageName); // نقل الصورة إلى public/assets/images
    
    // إنشاء سجل في قاعدة البيانات وتخزين معلومات الصورة وبقية المعلومات الأخرى
    $productsdetails = ProductDetails::create([
        'color'=>$request->color,
        'price'=>$request->price,
        'qty'=>$request->qty,
        'description'=> $request->description,
        'productid' => $request->productid,
      // 'images'=>$imageName,
    ]);
    //$productsdetails->save();

    
    return redirect('/dashboard/GetProductDetails');
}

     


}