@extends('master')

@section('content')

     <!--Liệt kê dạng carousel hình ảnh-->
     @include('template.carousel_list_template')

    <!--Liệt kê chức năng dạng list có thanh cuộn-->
    @include('template.overflowX_scroll_template')

    <!--Liệt kê chức năng dạng lưới grid fixed-->'
    @include('template.grid_template')


    <!--Liệt kê chức năng dạng 1 dòng icons-->
    @include('template.1_line_icons_template')

   <!--Liệt kê dạng carousel cards-->
     @include('template.cards_template')
@endsection