@extends('layouts.VMM')

@section('title', '商品情報詳細画面')

@section('content')

    <div class="content-title">
        商品情報詳細画面
    </div>
    <div class="content-info">
        <div class="content-info__id"></div>
        <div class="content-info__image"></div>
        <div class="content-info__name"></div>
        <div class="content-info__maker"></div>
        <div class="content-info__price"></div>
        <div class="content-info__count"></div>
        <div class="content-info__comment"></div>
        <div class="content-info__edit">
            <button>編集</button>
        </div>
        <div class="content-info__return">
            <button>戻る</button>
        </div>
    </div>

@endsection