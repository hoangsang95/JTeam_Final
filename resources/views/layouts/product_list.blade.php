@extends('master')
	@section('head')
    <title>DoGom.VN - {{$cate[0]->Cat_Name}}</title>
	@endsection
    @section('content')
        @include('module.content_list')
    @stop
