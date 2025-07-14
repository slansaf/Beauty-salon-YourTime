@extends('layouts.app')

@section('title-main')Наши услуги@endsection

@section('content')
	<x-hero title="Парикмахерские услуги" urlimg="img/main-img2.png">
		<x-slot name="icons"></x-slot>
	</x-hero>
	<x-services-block />
@endsection