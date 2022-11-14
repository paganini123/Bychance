@extends('layouts.app')

@section('contents')
<div class="content">
    <div class="sub_banner">
        <div class="sub_banner_tit_wrap">
            <h1>견적문의</h1>
            <p><i class="fas fa-home"></i><i class="fas fa-chevron-right"></i>Contact<i class="fas fa-chevron-right"></i>견적문의</p>
        </div>
    </div>
    <div class="sub_nav_wrap">
	    <div class="sub_nav_1"><a href="{!!route('about')!!}" class="text_grey">자주묻는질문</a></div>
	    <div class="sub_nav_2"><a href="{!!route('location')!!}" class="text_grey">견적문의</a></div>
    </div>
</div>

@endsection