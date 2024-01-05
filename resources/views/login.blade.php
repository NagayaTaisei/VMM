@extends('layouts.VMM')

@section('title', 'ログイン画面')

@section('content')

    <div class="content-title">
        ユーザーログイン画面
    </div>
    <div class="content-input">
        <form action="#" method="post">
            <input type="password" placeholder="パスワード">
            <input type="text" placeholder="アドレス">
        </form>
    </div>
    <div class="content-button">
        <div class="content-button__new">
            <button>新規登録</button>
        </div>
        <div class="content-button__login">
            <button>ログイン</button>
        </div>
    </div>

@endsection