@extends('layouts.item')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('title')
    内容確認
@endsection

@section('form')
<form class="form" action="/contacts" method="post">
@csrf
@endsection

@section('name')
    </p>
    </th>
    <td class="contact__form--name">
        <p class="contact__form contact__form--name-first-confirm" name="name-first">{{ $contact['name-first'] }}</p>
        <p class="contact__form contact__form--name-last-confirm" name="name-last">{{ $contact['name-last'] }}</p>
    </td>
@endsection

@section('gender')
    </p>
    <div class="contact__form--list">
        </th>
        <td class="contact__form--gender">
        </td>
    </div>
@endsection

@section('mail')
    </p>
    <div class="contact__form--list">
        </th>
        <td>
            <p class="contact__form contact__form--mail-confirm" name="mail">{{ $contact['mail'] }}</p>
        </td>
    </div>
@endsection

@section('post')
    </p>
    </th>
    <td class="contact__form--layout">〒
        <p class="contact__form contact__form--post-confirm" name="post">{{ $contact['post'] }}</p>
    </td>
@endsection

@section('address')
    </p>
    </th>
    <td>
        <p class="contact__form contact__form--address-confirm" name="address">{{ $contact['address'] }}</p>
    </td>
@endsection

@section('building')
    </p>
    </th>
    <td>
        <p class="contact__form contact__form--building-confirm" name="building">{{ $contact['building'] }}</p>
    </td>
@endsection

@section('opinion')
    </p>
    </th>
    <td>
        <p class="contact__form contact__form--opinion-confirm" name="opinion">{!! nl2br($contact['opinion']) !!}</p>
    </td>
@endsection

@section('submit')
    <div class="contact__form--button">
        <button class="contact__form--button-submit">確認</button>
    </div>
    <div class="contact__form--back">
        <a href="/">修正する</a>
    </div>
@endsection

