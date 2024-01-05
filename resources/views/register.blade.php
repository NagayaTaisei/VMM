@extends('layouts.VMM')

@section('title', '商品新規登録画面')

@section('content')
    <div class="contain-title">
        商品新規登録画面
    </div>
    <div class="contain-regist">
        <div class="contain-regist__name">
            <p>商品名</p>
            <input type="text">
        </div>
        <div class="contain-regist__maker">
            <p>メーカー名</p>
            <input type="text">
        </div>
        <div class="contain-regist__price">
            <p>価格</p>
            <input type="text">
        </div>
        <div class="contain-regist__count">
            <p>在庫数</p>
            <input type="text">
        </div>
        <div class="contain-regist__comment">
            <p>コメント</p>
            <textarea></textarea>
        </div>
        <div class="contain-regist__image">
            <p>商品画面</p>
            <input type="file">
        </div>
    </div>
@endsection