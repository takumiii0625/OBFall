@php
$title = 'お問い合わせ';
@endphp

@extends('layout')

@section('content')




<h1 class="text-center mt-2 mb-5">お問い合わせ</h1>
<div class="container">
    {!! Form::open(['route' => 'confirm', 'method' => 'POST']) !!}
    {{ csrf_field() }}
    <div class="form-group row">
        <p class="col-sm-4 col-form-label">お名前（10文字以内）<span class="badge badge-danger ml-1">必須</span></p>
        <div class="col-sm-8">
            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'お名前をご記入ください']) }}
        </div>
    </div>
    @if ($errors->has('name'))
    <p class="alert alert-danger">{{ $errors->first('name') }}</p>
    @endif

    <div class="form-group row">
        <p class="col-sm-4 col-form-label">メールアドレス<span class="badge badge-danger ml-1">必須</span></p>
        <div class="col-sm-8">
            {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => '例：○○○○@○○○○.com']) }}
        </div>
    </div>
    @if ($errors->has('email'))
    <p class="alert alert-danger">{{ $errors->first('email') }}</p>
    @endif

    <div class="form-group row">
        <p class="col-sm-4 col-form-label">会社名<span class="badge badge-danger ml-1">必須</span></p>
        <div class="col-sm-8">
            {{ Form::text('company', null, ['class' => 'form-control', 'placeholder' => '例：○○○○株式会社']) }}
        </div>
    </div>
    @if ($errors->has('company'))
    <p class="alert alert-danger">{{ $errors->first('company') }}</p>
    @endif


    <div class="form-group row">
        <p class="col-sm-4 col-form-label">電話番号</p>
        <div class="col-sm-8">
            {{ Form::text('tel', null, ['class' => 'form-control', 'placeholder' => '例：03-1234-5678']) }}
        </div>
    </div>
    @if ($errors->has('tel'))
    <p class="alert alert-danger">{{ $errors->first('tel') }}</p>
    @endif



    <div class="form-group row">
        <p class="col-sm-4 col-form-label">メッセージ本文<span class="badge badge-danger ml-1">必須</span></p>
        <div class="col-sm-8">
            {{ Form::textarea('contents', null, ['class' => 'form-control', 'placeholder' => 'お問い合わせ内容をご記入ください']) }}
        </div>
    </div>
    @if ($errors->has('contents'))
    <p class="alert alert-danger">{{ $errors->first('contents') }}</p>
    @endif

    <div class="text-center">
        {{ Form::submit('確認画面へ', ['class' => 'btn btn-primary']) }}
    </div>
    {!! Form::close() !!}
</div>

@endsection