@extends('layouts.master')
@section('title', 'Home')
@section('content')
    <div class="container">
        <div class="content">
            {{--<div class="title", style="padding-left: 15px;font-size: 50px;font-weight:bold;font-family: Microsoft YaHei">--}}
                {{--<p>Welcome to RMIT City Campus</p>--}}
            {{--</div>--}}
            <a class = "{{action('PagesController@home')}}}">
                <img src = "image/rmit5.png" alt = "rmit1" width = "95.3%", style = "margin-left: 13px;">
                <img src = "image/rmit1.jpg" alt = "rmit" width = "100%">
            </a>
        </div>
    </div>
@endsection
