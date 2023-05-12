<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Visitor;
use App\Models\Admin\Link;
use App\Models\Admin\TopImage;

class HomeController extends Controller
{
    public function index(Request $request){
        $ip = $request->ip();
        $visitor = Visitor::firstOrCreate(['ip_address' => $ip]);
        $visitor->save();
        $links = Link::all();
        $images = TopImage::all();
        
        return view('user.index',compact('links','images'));
    }
}
