@extends('layouts.VMM')

@section('title', '商品新規登録画面')

@section('content')
    <div class="content-title">
        商品新規登録画面
    </div>
    <div class="content-regist">
        <form action="#">
            @csrf
            <div class="content-regist__name">
            <p>商品名</p>
            <input type="text">
        </div>
        <div class="content-regist__maker">
            <p>メーカー名</p>
            <input type="text">
        </div>
        <div class="content-regist__price">
            <p>価格</p>
            <input type="text">
        </div>
        <div class="content-regist__count">
            <p>在庫数</p>
            <input type="text">
        </div>
        <div class="content-regist__comment">
            <p>コメント</p>
            <textarea></textarea>
        </div>
        <div class="content-regist__image">
            <p>商品画面</p>
            <input type="file">
        </div>
        <div class="content-regist__button">
            <button>新規登録</button>
        </div>
        <div class="content-regist__return">
            <button>戻る</button>
        </div>
        </form>

    </div>
@endsection