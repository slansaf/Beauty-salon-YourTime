@extends('layouts.app')

@section('title-main')Наши услуги@endsection

@section('content')
	<x-hero title="Услуги и цены" urlimg="img/main-img2.png">
		<x-slot name="icons"></x-slot>
	</x-hero>
	<x-prices-block />
	<x-services-block />
@endsection