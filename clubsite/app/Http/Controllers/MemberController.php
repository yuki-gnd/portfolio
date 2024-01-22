<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view(('member/memberslist'), ['members' => $members]);
    }

    public function add()
    {
        return view('member/addmember');
    }

    public function create(Request $request)
    {
        $param = Member::create([
            'name' => $request->name,
            'password' => $request->password,
            'email' => $request->email,
        ]);
        return view('member/createmember', ['param' => $param]);
    }

    public function edit($id)
    {
        $member = Member::findOrFail($id);
        return view('member/editmember', compact('member'));
    }

    // public function update(Request $request) {
    //     $member = Member::update()
    // }

    public function show($id)
    {
        $member = Member::findOrFail($id);
        return view('member.confirmdelete', compact('member'));
    }

    public function destroy($id)
    {
        $member = Member::findPrFail($id);
        $member->delete();
        return redirect()->route('member.deletemember')->with('success', '会員情報を削除しました。');
    }
}
