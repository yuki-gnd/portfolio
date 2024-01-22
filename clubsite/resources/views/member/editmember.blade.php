@extends('layouts.home')

@section('body')
    <div class="member_edit_form">
        登録情報の更新
        <p>更新する情報をフォームに入力してください。</p>
        <div class="edit_member_form">
            <form action="{{route('member/editmember', ['id' => $member->member_id])}}" method="POST">
                @csrf
                <table class="table table-striped">
                    <tr>
                        <th>会員番号</th>
                        <td>{{$member->member_id}}</td>
                        <th>現在の情報</th>
                        <th>更新する情報</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>お名前</th>
                        <td></td>
                        <td>{{$member->name}}</td>
                        <td>
                            <div class="input-group mg-3">
                                {{-- <span class="input-group-text" id="inputGroup-sizing-default">お名前</span> --}}
                                <input type="text" name="name" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>パスワード</th>
                        <td></td>
                        <td>{{$member->password}}</td>
                        <td>
                            <div class="input-group mg-3">
                                {{-- <span class="input-group-text" id="inputGroup-sizing-default">パスワード</span> --}}
                                <input type="password" name="password" class="form-control"
                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td></td>
                        <td>{{$member->email}}</td>
                        <td>
                            <div class="input-group mb-3">
                                {{-- <span class="input-group-text" id="inputGroup-sizing-default">メールアドレス</span> --}}
                                <input type="text" name="email" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                        </td>
                    </tr>
                </table>
                <input type="submit" value="更新" class="guest_btn btn btn-secondary">
            </form>
        </div>
    </div>
@endsection
