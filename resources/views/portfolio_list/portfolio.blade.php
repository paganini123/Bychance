@extends('layouts.app')

@section('contents')
<div class="content">
    <div class="sub_banner">
        <div class="sub_banner_tit_wrap">
            <h1>포트폴리오</h1>
            <p><i class="fas fa-home"></i><i class="fas fa-chevron-right"></i>Portfolio<i class="fas fa-chevron-right"></i>Web</p>
        </div>
    </div>
    <div class="sub_nav_wrap">
	    <div class="sub_nav_1"><a href="{!!route('about')!!}" class="text_grey">포트폴리오1</a></div>
	    <div class="sub_nav_3"><a href="{!!route('location')!!}" class="text_grey">포트폴리오2</a></div>
        <div class="sub_nav_3"><a href="{!!route('about')!!}" class="text_grey">포트폴리오3</a></div>
	    <div class="sub_nav_2"><a href="{!!route('location')!!}" class="text_grey">포트폴리오4</a></div>
    </div>
</div>

@endsection