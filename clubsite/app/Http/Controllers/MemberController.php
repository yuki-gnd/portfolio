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
        return view('member.editmember', compact('member'));
    }

    public function update(Request $request, $id) 
    {
        $request -> validate([
            'name' => 'required|string|max:255',
            // 'password' => 'required|min:8',
            'password' => bcrypt($request->input('password')),
            'password_comfirmation' => 'required|same:password',
            'email' => 'required|email|unique:members,email,'.$id,
        ]);

        $member = Member::findOrFail($id);
        $member -> update([
            'name' => $request->input('name'),
            'password' => bcrypt($request->input('password')),
            'email' => $request->input('email'),
        ]);
        return redirect()->route('member.updatemember', ['member' => $member->member_id])->with('success','会員情報を更新しました。');
    }

    public function show($id)
    {
        $member = Member::findOrFail($id);
        return view('member.confirmdelete', compact('member'));
    }

    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();
        return view('member.deletemember')->with('success', '会員情報を削除しました。');
    }
}
