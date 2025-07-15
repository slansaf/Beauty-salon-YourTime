@extends('layouts.app')

@section('content')
<section class="products-slider center">
	<h2 class="products-slider__title">
		Магазин
		<span class="products-slider__title-signature">(скоро... сайт в разработке)</span>
	</h2>
	<div class="products-slider__carousel">
		<button class="products-slider__btn" id="prevBtn">
			<svg width="100" height="100" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
				<circle cx="19.5" cy="19.5" r="19.5" fill="#EFB7B7" />
				<path
					d="M23.7792 30C23.6638 30.0002 23.5531 29.9546 23.4714 29.8731L13.9085 20.3102C13.7388 20.1405 13.7388 19.8653 13.9085 19.6956L23.4714 10.1327C23.6382 9.96002 23.9133 9.95526 24.086 10.122C24.2587 10.2888 24.2635 10.564 24.0967 10.7367C24.0932 10.7403 24.0897 10.7438 24.086 10.7473L14.8309 20.0025L24.0869 29.2576C24.2569 29.4271 24.2572 29.7024 24.0877 29.8723C24.0059 29.9542 23.8949 30.0002 23.7792 30Z"
					fill="#F44336" />
				<path
					d="M23.7792 30C23.6638 30.0002 23.5531 29.9546 23.4714 29.8731L13.9085 20.3102C13.7388 20.1405 13.7388 19.8653 13.9085 19.6956L23.4714 10.1327C23.6382 9.96002 23.9133 9.95526 24.086 10.122C24.2587 10.2888 24.2635 10.564 24.0967 10.7367C24.0932 10.7403 24.0897 10.7438 24.086 10.7473L14.8309 20.0025L24.0869 29.2576C24.2569 29.4271 24.2572 29.7024 24.0877 29.8723C24.0059 29.9542 23.8949 30.0002 23.7792 30Z"
					fill="black" />
			</svg>
		</button>

		<div class="product" id="productContainer">
			@foreach($products as $product)
			<div class="product__slide">
				<div class="product__item">
					<img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="product__image" />
					<p class="product__price">{{ $product->price }} p.</p>
					<h3 class="product__name">{{ $product->name }}</h3>
					<p class="product__description">{{ $product->description }}</p>
					<button class="product__button">В корзину</button>
				</div>
			</div>
			@endforeach
		</div>

		<button class="products-slider__btn" id="nextBtn">
			<svg width="100" height="100" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
				<circle cx="19.5" cy="19.5" r="19.5" transform="matrix(-1 0 0 1 39 0)" fill="#EFB7B7" />
				<path
					d="M15.2208 30C15.3362 30.0002 15.4469 29.9546 15.5286 29.8731L25.0915 20.3102C25.2612 20.1405 25.2612 19.8653 25.0915 19.6956L15.5286 10.1327C15.3618 9.96002 15.0867 9.95526 14.914 10.122C14.7413 10.2888 14.7365 10.564 14.9033 10.7367C14.9068 10.7403 14.9103 10.7438 14.914 10.7473L24.1691 20.0025L14.9131 29.2576C14.7431 29.4271 14.7428 29.7024 14.9123 29.8723C14.9941 29.9542 15.1051 30.0002 15.2208 30Z"
					fill="#F44336" />
				<path
					d="M15.2208 30C15.3362 30.0002 15.4469 29.9546 15.5286 29.8731L25.0915 20.3102C25.2612 20.1405 25.2612 19.8653 25.0915 19.6956L15.5286 10.1327C15.3618 9.96002 15.0867 9.95526 14.914 10.122C14.7413 10.2888 14.7365 10.564 14.9033 10.7367C14.9068 10.7403 14.9103 10.7438 14.914 10.7473L24.1691 20.0025L14.9131 29.2576C14.7431 29.4271 14.7428 29.7024 14.9123 29.8723C14.9941 29.9542 15.1051 30.0002 15.2208 30Z"
					fill="black" />
			</svg>
		</button>
	</div>
	<x-button title="Весь каталог" action="/page1" type="button" />
</section>

<script>
	let currentSlide = 0;
	const slides = document.querySelectorAll('.product__slide');
	const slidesToShow = 4;

	function showSlide(index) {
		const start = index * slidesToShow;
		const end = start + slidesToShow;
		slides.forEach((slide, i) => {
			slide.style.display = (i >= start && i < end) ? 'block' : 'none';
		});
	}

	document.getElementById('prevBtn').addEventListener('click', () => {
		currentSlide = (currentSlide > 0) ? currentSlide - 1 : slides.length - 1;
		showSlide(currentSlide);
	});

	document.getElementById('nextBtn').addEventListener('click', () => {
		currentSlide = (currentSlide < slides.length - 1) ? currentSlide + 1 : 0;
		showSlide(currentSlide);
	});

	document.addEventListener('DOMContentLoaded', () => {
		showSlide(currentSlide);
	});
</script>
@endsection