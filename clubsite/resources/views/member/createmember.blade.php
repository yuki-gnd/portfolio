@extends('layouts.home')

@section('body')
    <div>
        入力内容確認
        <table>
            <tr>
                <th>氏名</th>
                <th>住所</th>
                <th>電話番号</th>
                <th>メールアドレス</th>
            </tr>
            <tr>
                <td>{{$param->name}}</td>
                <td>{{$param->address}}</td>
                <td>{{$param->tel}}</td>
                <td>{{$param->email}}</td>

            </tr>
        </table>
    </div>
@endsection
