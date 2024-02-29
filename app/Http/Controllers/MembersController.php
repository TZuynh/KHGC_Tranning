<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;

class MembersController extends Controller
{
    public function listMembers()
    {
        $list = Members::all();
        return view("Members.danh-sach", compact('list'));
    }
}
