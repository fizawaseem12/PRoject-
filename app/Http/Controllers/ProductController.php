<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search','');
        $abc = Product::query();
        if($search !== ''){
            $abc->where('name','LIKE',"%" . $search . "%");
        }
        $abc = $abc->get();
        return view('admin.show', compact('abc','search'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imagename = time() . '.' . $request->image->extension();
        $request->image->move(public_path('prod'),$imagename);
        $abc = new Product;
        $abc->name = $request->prodname;
        $abc->des = $request->proddes;
        $abc->price = $request->prodprice;
        $abc->qty = $request->prodqty;
        $abc->image =  $imagename;
        $abc->save();
        return back()->withSuccess("prod created");
    }

    public function status($request)
    {
        $abc = Product::find($request);
        if($abc){
            if($abc->status){
                $abc->status = 0;
            }
            else{
                $abc->status = 1;
            }
            $abc->save();
        }
        return back();
    }
    public function cart(Request $request , $id){
        $uid  = Auth::user()->id;
        $cart = new Cart();
         $cart->user_id = $uid;
         $cart->prod_id = $id;
         $cart->qty = $request->qty;
         $cart->save();
         return back();
    }
public function cartdetail(){
    $prod = Cart::all();
    $products =[];
    foreach($prod as $carddetail){
        $id = $carddetail->prod_id;
        $product = Product::find($id);
        $products[] = $product;

    }
    return view("cartdetail",compact("products"));
}

    /**
     * Display the specified resource.
     */
    public function contact()
    {
        return view("contact");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $abc = Product::find($id);
        return view('admin.update', compact('abc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $abc = Product::find($id);
        if(isset($request->image)){
            $imagename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('prod'),$imagename);
            $abc->image =  $imagename;
        }
        $abc->name = $request->prodname;
        $abc->des = $request->proddes;
        $abc->price = $request->prodprice;
    
        $abc->save();
        return redirect()->route("productshow");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $abc = Product::find($id);
        $abc->delete();
        return back()->withSucess("product delete");

        
    }



}
