@extends('layouts.home')

@section('body')
    <div>
        <div>入力内容確認</div>
        <table class="tabel table-bordered">
            <tr>
                <th>お名前</th>
                <th>パスワード</th>
                <th>メールアドレス</th>
            </tr>
            <tr>
                <td>{{$param->name}}</td>
                <td>{{$param->password}}</td>
                <td>{{$param->email}}</td>
            </tr>
        </table>
    </div>
@endsection
