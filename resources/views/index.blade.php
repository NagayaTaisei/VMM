@extends('layouts.VMM')

@section('title', '商品一覧画面')

@section('content')

    <div class="content-title">
        商品一覧画面
    </div>
    <div class="content-search">
        <div class="content-search__keyword">
            <input type="text" placeholder="検索キーワード">
        </div>
        <div class="content-search__maker">
            <select>
                <option></option>
                <option></option>
            </select>
        </div>
        <div class="content-search__button">
            <button>検索</button>
        </div>
    </div>
    <div class="content-index">
        <div class="index-title">
            <div class="index-title__id">ID</div>
            <div class="index-title__image">商品画像</div>
            <div class="index-title__name">商品名</div>
            <div class="index-title__price">価格</div>
            <div class="index-title__count">在庫数</div>
            <div class="index-title__maker">メーカー名</div>
            <div class="index-title__button">
                <button>新規登録</button>
            </div>
        </div>
        <div class="index-rows">
            
        </div>
    </div>

@endsection