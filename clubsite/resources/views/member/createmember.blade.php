@extends('layouts.home')

@section('body')
    <div>
        <div>入力内容確認</div>
        <table class="tabel">
            <thead class="thead-dark">
                <tr>
                    <th>お名前</th>
                    <th>パスワード</th>
                    <th>メールアドレス</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $param->name }}</td>
                    <td>{{ $param->password }}</td>
                    <td>{{ $param->email }}</td>
                </tr>
            </tbody>
        </table>
        <form action="">
            <button>
                <a href="member/memberslist">戻る</a>
            </button>
        </form>
    </div>
@endsection
