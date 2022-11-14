@extends('layouts.app')

@section('contents')
    <div class="content">
    <div class="sub_banner">
        <div class="sub_banner_tit_wrap">
            <h1>오시는길</h1>
            <p><i class="fas fa-home"></i><i class="fas fa-chevron-right"></i>About us<i class="fas fa-chevron-right"></i>오시는길</p>
        </div>
    </div>
    <div class="sub_nav_wrap">
	    <div class="sub_nav_1"><a href="{!!route('about')!!}" class="text_grey">회사소개</a></div>
	    <div class="sub_nav_2"><a href="{!!route('location')!!}" class="text_grey">오시는길</a></div>
    </div>
</div>

@endsection