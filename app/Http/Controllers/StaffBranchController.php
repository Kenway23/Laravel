<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StaffBranch;
use App\Models\Branch;
use App\Models\Staff;


class StaffBranchController extends Controller
{
    //
    public function index(){
        //select * form post;
        $post = StaffBranch::all();
        $branch = Branch::all();
        $staff = Staff::all();
        return view('staffbranch.index',compact('post','branch','staff'));
    }
}
