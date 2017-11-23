@extends('layouts.master')
@section('title')
    Home
@endsection
@section('body')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title">
                <div id="content-logo">
                    {{ Html::image('photos/logo.png', "logo", array('id' => 'home-logo')) }}
                </div>
            </div>
            <div class="links">
                <a href="/borrow">Borrow</a>
                <a href="/return">Return</a>
                <a href="/help">Help</a>
            </div>
        </div>
    </div>
@endsection
@section('style')
<style>
    #home-logo{
        width: 50%;
    }
    .links{
        margin-top: -3%;
    }
</style>
@endsection