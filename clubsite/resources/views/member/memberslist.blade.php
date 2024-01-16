@extends('layouts.home')

@section('body')
    <div class="member_manage">
        会員登録者一覧
        <table class="table table-striped">
            <th>会員番号</th><th>氏名</th><th>住所</th><th>電話番号</th><th>メールアドレス</th>
            @foreach ($members as $member)
                <tr>
                    <td>{{$member -> member_id}}</td>
                    <td>{{$member -> name}}</td>
                    <td>{{$member -> address}}</td>
                    <td>{{$member -> tel}}</td>
                    <td>{{$member -> email}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection