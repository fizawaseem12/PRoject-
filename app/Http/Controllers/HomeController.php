<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = auth()->user()->is_admin;
        if($role==1){
            return view("admin.dashboard");
        }

        else{
            // $data = Product::all();
            $data = Product::where("status",1)->get();
            // dd($data);
            return view("index", compact("data"));
        }
        // return view('home');
    }

    public function addprod(){
        return view('admin.add');
    }
    public function dash(){
        return view('admin.admin');
    }

    

public function checkout(){
    echo "hello";
    // return view('checkout');

}
}
