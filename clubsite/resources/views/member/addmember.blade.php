@extends('layouts.home')

@section('body')
    <div class="member_form">
        入会申し込みフォーム
        <form action="/member/addmember" method="POST">
            @csrf
            <div class="input-group mg-3">
                <span class="input-group-text" id="inputGroup-sizing-default">氏名</span>
                <input type="text" name="name" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">ご住所</span>
                <input type="text" name="address" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">電話番号</span>
                <input type="text" name="tel" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">メールアドレス</span>
                <input type="text" name="mail" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <input type="submit" value="登録" class="guest_btn btn btn-secondary">
        </form>
    </div>
@endsection
