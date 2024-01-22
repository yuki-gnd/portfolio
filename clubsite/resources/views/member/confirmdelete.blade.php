@extends('layouts.home')

@section('body')
    <div>
        以下の会員情報を削除しますか？
        <table class="table table-striped">
            <tr>
                <th>会員番号</th>
                <td>{{ $member->member_id }}</td>
            </tr>
            <tr>
                <th>お名前</th>
                <td>{{ $member->name }}</td>
            </tr>
            <tr>
                <th>パスワード</th>
                <td>{{ $member->password }}</td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>{{ $member->email }}</td>
            </tr>
        </table>
        <button>
            <a href="{{route('member.deletemember', ['id' => $member->member_id])}}">削除</a>
        </button>
    </div>
@endsection