@extends('layouts.VMM')

@section('title', '商品情報編集画面')

@section('content')

    <div class="content-title">
        商品情報編集画面
    </div>
    <div class="edit">
        <div class="edit-item">
            <div class="edit-item__id"></div>
            <div class="edit-item__name"></div>
            <div class="edit-item__maker"></div>
            <div class="edit-item__price"></div>
            <div class="edit-item__count"></div>
            <div class="edit-item__comment"></div>
            <div class="edit-item__image"></div>
        </div>
        <div class="edit-update">
            <button>更新</button>
        </div>
        <div class="edit-return">
            <button>戻る</button>
        </div>
    </div>

@endsection