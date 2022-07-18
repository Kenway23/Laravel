<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;

class BranchController extends Controller
{
    //
    public function index(){
        //select * form post;
        $post = Branch::all();
        return view('branch.index',compact('post'));
    }
}
