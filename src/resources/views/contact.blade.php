@extends('layouts.item')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('title')
    お問い合わせ
@endsection

@section('form')
<form class="form" action="/contacts/confirm" method="post">
@csrf
@endsection

@section('name')
    <span class="form__label--required">※</span></p>
    </th>
    <td class="contact__form--name">
        <input class="contact__form contact__form--name-first" name="name-first" type="text">
        <input class="contact__form contact__form--name-last" name="name-last" type="text">
    </td>
    <tr>
        <th></th>
        <td class="contact__form--example">
            <p class="contact__form--example-name-1">例&#41; 山田</p>
            <p class=" contact__form--example-name-2">例&#41; 太郎</p>
        </td>
    </tr>
@endsection

@section('gender')
    <span class="form__label--required">※</span></p>
    <div class="contact__form--list">
        </th>
        <td class="contact__form--gender"><input class="contact__form--gender-male" type="radio" name="gender" value="男性" checked="checked">
            <p>男性</p>
            <input class="contact__form--gender-female" type="radio" name="gender" value="女性">
            <p>女性</p>
        </td>
    </div>
@endsection

@section('mail')
    <span class="form__label--required">※</span></p>
    <div class="contact__form--list">
        </th>
        <td><input class="contact__form contact__form--mail" type="email" name="mail"></td>
        <tr>
            <th></th>
            <td class="contact__form--example">例&#41; test@example.com</td>
        </tr>
    </div>
@endsection

@section('post')
    <span class="form__label--required">※</span></p>
    </th>
    <td class="contact__form--layout">〒<input class="contact__form contact__form--post" name="post" type="text"
            method="post"></td>
    <tr>
        <th></th>
        <td class="contact__form--example contact__form--example-post">例&#41; 123-4567</td>
    </tr>
@endsection

@section('address')
    <span class="form__label--required">※</span></p>
    </th>
    <td><input class="contact__form contact__form--address" name="address" type="text"></td>
    <tr>
        <th></th>
        <td class="contact__form--example">例&#41; 東京都渋谷区千駄ヶ谷1-2-3</td>
    </tr>
@endsection

@section('building')
    </p>
    </th>
    <td><input class="contact__form contact__form--building" name="building" type="text"></td>
    <tr>
        <th></th>
        <td class="contact__form--example">例&#41; 千駄ヶ谷マンション101</td>
    </tr>
@endsection

@section('opinion')
    <span class="form__label--required">※</span></p>
    </th>
    <td>
        <textarea class="contact__form contact__form--opinion" name="opinion"></textarea>
    </td>
@endsection

@section('submit')
    <div class="contact__form--button">
        <button class="contact__form--button-submit">確認</button>
    </div>
@endsection