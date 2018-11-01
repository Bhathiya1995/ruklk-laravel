<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\product;

class AdminController extends Controller
{
    public function viewadminpage($id){
        $product = Product::all();
        $treecount = Product::where('category','=','tree')->count();
        $landcount = Product::where('category','=','land')->count();
        $seedcount = Product::where('category','=','seed')->count();
        $counts = array('treecount'=>$treecount, 'landcount'=>$landcount, 'seedcount'=>$seedcount);
        return view('admin.admin')->with('product',$product)->with($counts);
    }

    public function approve($id){
        
        $product = Product::where('approval','=', 0)->get();
        return view('admin.aproveproduct')->with('product', $product);
    }

    public function approveproduct($id,$productid){
       $product = \DB::table('products')->where('id',$productid)->update(['approval'=>1]);     
       return redirect('/admin/'.$id.'/approve');
    }

    public function rejectproduct($id,$productid){
        $productDelete = \DB::table('products')->where('id',$productid)->delete();
        return redirect('/admin/'.$id.'/approve');
    }
}
