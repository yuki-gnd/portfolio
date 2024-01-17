<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index() {
        $members = Member::all();
        return view(('member/memberslist'),['members' => $members]);
    }

    public function add() {
        return view('member/addmember');
    }

    public function create(Request $request) {
        $param = Member::create([
            'name' => $request->name,
            'address' => $request->address,
            'tel' => $request->tel,
            'email' => $request->email,
        ]);
        return view('member/createmember', ['param' => $param]);
    }
}
