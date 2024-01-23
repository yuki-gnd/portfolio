@extends('layouts.home')

@section('body')
    <div class="member_manage">
        <div class="members_list">会員登録者一覧</div>
        <div class="member_manage_select">
            管理者メニュー
            <button>
                <a href="/member/addmember">追加</a>
            </button>
        </div>
        <table class="table table-striped">
            <th>会員番号</th>
            <th>お名前</th>
            <th>パスワード</th>
            <th>メールアドレス</th>
            <th></th>
            <th></th>
            @foreach ($members as $member)
                <tr>
                    <td>{{ $member->member_id }}</td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->password }}</td>
                    <td>{{ $member->email }}</td>
                    <td>
                        <form action="">
                            @csrf
                        <button type="submit">
                            <a href="{{route('member.editmember', ['id' => $member->member_id])}}">更新</a>
                        </button>
                        <button>
                            <a href="{{route('member.confirmdelete', ['id' => $member->member_id])}}">削除</a>
                        </button>
                    </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
