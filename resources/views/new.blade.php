@extends('layouts.VMM')

@section('title', '新規登録')

@section('content')
    
    <div class="content-title">
        ユーザー新規登録画面
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
        <div class="content-button__return">
            <button>戻る</button>
        </div>
    </div>
    
@endsection
