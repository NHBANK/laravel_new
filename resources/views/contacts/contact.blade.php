@extends('layouts.app')

@section('title')
    Contact
@endsection

@section('content')
    <div class="px-64 mt-4">
        <h1 class="font-bold text-3xl flex-1">Location</h1><br> 
        <u>Baekbomro, Mapo-Gu, Seoul-Si</u>
        <br>
        <br>
        
        <a href="https://map.kakao.com/?urlX=486582&urlY=1125872&urlLevel=4&map_type=TYPE_MAP&map_hybrid=false" target="_blank">
        <img width="504" height="310" src="https://map2.daum.net/map/mapservice?FORMAT=PNG&SCALE=5&MX=486582&MY=1125872&S=0&IW=504&IH=310&LANG=0&COORDSTM=WCONGNAMUL&logo=kakao_logo" style="border:1px solid #ccc"></a>
        <div class="hide" style="overflow:hidden;padding:7px 11px;border:1px solid #dfdfdf;border-color:rgba(0,0,0,.1);border-radius:0 0 2px 2px;background-color:#f9f9f9;width:482px;"><strong style="float: left;">
        <img src="//t1.daumcdn.net/localimg/localimages/07/2018/pc/common/logo_kakaomap.png" width="72" height="16" alt="카카오맵"></strong><div style="float: right;position:relative">
        <a style="font-size:12px;text-decoration:none;float:left;height:15px;padding-top:1px;line-height:15px;color:#000" target="_blank" href="https://map.kakao.com/?urlX=486582&urlY=1125872&urlLevel=4&map_type=TYPE_MAP&map_hybrid=false">지도 크게 보기</a></div></div>

        <br>
        <br>
        <h1 class="font-bold text-3xl flex-1">Contact</h1><br>
        <u>02-705-8114</u>
    </div>
@endsection