<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\product;
use App\Advertisment;
use App\Event;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct(){
        
        
    }

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

    public function approveads($id){
        
        $ads = Advertisment::where('status','=', 0)->get();
        return view('admin.aproveads')->with('ads', $ads);
    }

    public function approvedadvertisment($id,$adid){
        $ads = \DB::table('advertisments')->where('id',$adid)->update(['status'=>1]);     
        return redirect('/admin/'.$id.'/approveads');
     }

     public function rejectadvertisment($id,$adid){
        $ads = \DB::table('advertisments')->where('id',$adid)->update(['status'=>3]);     
        return redirect('/admin/'.$id.'/approveads');
     }

     public function showevents(){
        $event = Event::where('status','=', 0)->get();
        return view('admin.showevent')->with('event', $event);
     }
      public function approveevent($id, $eventid){
        $event = \DB::table('events')->where('id',$eventid)->update(['status'=>1]);     
        return redirect('/admin/'.$id.'/showevents');
      }

      public function showusers(){
        $users = User::all();
        return view('admin.showusers')->with('users', $users);
     }
    
     public function banneduser ($id, $userid){
        $ads = \DB::table('users')->where('id',$userid)->update(['verified'=>2]);
        return redirect('/admin/'.$id.'/showusers'); 
     }

}
