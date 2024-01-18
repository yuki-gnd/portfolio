@extends('layouts.home')

@section('body')
    <div class="member_manage">
        <div class="member_manage_select">
            管理者メニュー
            <button>
                <a href="/member/addmember">追加</a>
            </button>
            <button>
                <a href="">修正</a>
            </button>
            <button>
                <a href="">削除</a>
            </button>
        </div>
        <div class="">会員登録者一覧</div>
        <table class="table table-striped">
            <th>会員番号</th>
            <th>お名前</th>
            <th>パスワード</th>
            <th>メールアドレス</th>
            @foreach ($members as $member)
                <tr>
                    <td>{{ $member->member_id }}</td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->password }}</td>
                    <td>{{ $member->email }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
