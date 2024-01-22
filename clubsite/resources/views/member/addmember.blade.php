@extends('layouts.home')

@section('body')
    <div class="member_form">
        会員登録フォーム
        <form action="/member/addmember" method="POST">
            @csrf
            <div class="input-group mg-3">
                <span class="input-group-text" id="inputGroup-sizing-default">お名前</span>
                <input type="text" name="name" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mg-3">
                <span class="input-group-text" id="inputGroup-sizing-default">パスワード</span>
                <input type="password" name="password" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">メールアドレス</span>
                <input type="text" name="email" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <input type="submit" value="登録" class="guest_btn btn btn-secondary">
        </form>
    </div>
@endsection
