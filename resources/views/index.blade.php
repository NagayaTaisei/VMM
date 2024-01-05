@extends('layouts.VMM')

@section('title', '商品一覧画面')

@section('content')

    <div class="contain-title">
        商品一覧画面
    </div>
    <div class="contain-search">
        <div class="contain-search__keyword">
            <input type="text" placeholder="検索キーワード">
        </div>
        <div class="contain-search__maker">
            <select>
                <option></option>
                <option></option>
            </select>
        </div>
        <div class="contain-search__button">
            <button>検索</button>
        </div>
    </div>
    <div class="contain-index">
        <div class="index-title">
            <div class="index-title__id">ID</div>
            <div class="index-title__image">商品画像</div>
            <div class="index-title__name">商品名</div>
            <div class="index-title__price">価格</div>
            <div class="index-title__count">在庫数</div>
            <div class="index-title__maker">メーカー名</div>
        </div>
    </div>

@endsection