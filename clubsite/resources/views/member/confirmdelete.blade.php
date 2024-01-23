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
        <form action="{{ route('member.deletemember', ['id' => $member->member_id]) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">
                削除
            </button>
        </form>

    </div>
@endsection
