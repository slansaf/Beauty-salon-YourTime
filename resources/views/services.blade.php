@extends('layouts.app')

@section('title-main')Наши услуги@endsection

@section('content')
	<x-hero title="{{ $serviceTitle ?? 'Услуги и цены' }}" urlimg="img/main-img2.png">
		<x-slot name="icons"></x-slot>
	</x-hero>
	<x-prices-block  :prices="$prices"  />
	<x-services-block />
@endsection