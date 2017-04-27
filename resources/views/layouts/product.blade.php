@extends('master')	
	@section('head')
    	<title>DoGom.VN - {{$product->Product_Name}}</title>
	@endsection
    @section('content')
        @include('module.content_detail')  
    @stop