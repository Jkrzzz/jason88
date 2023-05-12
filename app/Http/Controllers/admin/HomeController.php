<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Visitor;

class HomeController extends Controller
{
    public function dashboard(Request $request){
        // $ip = $request->ip();
        // $visitor = Visitor::firstOrCreate(['ip_address' => $ip]);
        // $visitor->increment('visits');
        // $visitor->save();
    
        $visitors = Visitor::count();
        
        return view('admin.dashboard',compact('visitors'));
    }
}
