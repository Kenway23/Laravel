<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    //
    public function index(){
        //select * form post;
        $post = Staff::all();
        return view('staff.index',compact('post'));
    }
}
