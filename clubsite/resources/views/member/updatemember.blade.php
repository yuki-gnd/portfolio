@extends('layouts.home')

@section('body')
    <div>以下の内容で登録内容を更新しました。</div>
    <table class="table table-striped">
            <tr>
                <th>会員番号</th>
                <td>{{$member->member_id}}</td>
            </tr>
            <tr>
                <th>お名前</th>
                <td>{{$member->name}}</td>
            </tr>
            <tr>
                <th>パスワード</th>
                <td>{{$member->password}}</td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>{{$member->email}}</td>
            </tr>
    </table>
@endsection