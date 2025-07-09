@extends('layouts.app')

@section('title-main')Салон красоты@endsection

@section('content')

    <section class="hero center" style="background: url('img/main-img.jpg') no-repeat; height: 582px; width: 100%;  background-position: center;">
		<h1 class="hero__title">
			Любите себя! <br />
			Осталное наша работа
		</h1>
		<div class="hero__icons">

            @foreach ([
                ['name' => 'icon1', 'url' => 'https://example.com/icon1'],
                ['name' => 'icon2', 'url' => 'https://example.com/icon2'],
                ['name' => 'icon3', 'url' => 'https://example.com/icon3'],
            ] as $icon)
                <x-icon :name="$icon['name']" :url="$icon['url']" />
            @endforeach
        </div>
	</section>

	<section class="discount center">
    	<div class="discount__content">
    	    <h2 class="discount__title">Скидка 20% на первое посещение</h2>
    	    <form class="discount__form" action="{{ route('bookings.create.post') }}" method="post" name="discount" id="discountForm">
    	        @csrf
    	        <div class="discount__name">
    	            <input class="discount__text" type="text" placeholder="Имя" name="firstname" id="discountName" />
    	            <input class="discount__text" type="text" placeholder="Телефон" name="phone" id="discountPhone" />
    	        </div>
				<input type="hidden" name="discount" value="20">
    	        <x-button title="Получить скидку" action="/submit" type="submit" />
    	    </form>
    	</div>
	</section>

    
    <x-services-block />

	<section class="interior center">
		<h2 class="interior__title">
			Наш <br />
			интерьер
		</h2>
		<div class="interior__gallery">
			<div class="interior__item1">
				<img src="./img/interior1.webp" alt="Интерьер 1" class="interior__image" />
			</div>
			<div class="interior__item2">
				<img src="./img/interior2.webp" alt="Интерьер 2" class="interior__image" />
			</div>
			<div class="interior__item3">
				<img src="./img/interior3.webp" alt="Интерьер 3" class="interior__image" />
			</div>
			<div class="interior__item4">
				<img src="./img/interior4.webp" alt="Интерьер 4" class="interior__image" />
			</div>
		</div>
	</section>

	<section class="products-slider center">
		<h2 class="products-slider__title">
			Магазин
			<span class="products-slider__title-signature">(скоро... сайт в разработке)</span>
		</h2>
		<div class="products-slider__carousel">
			<button class="products-slider__btn">
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

			<div class="product">
				<div class="product__slide">
					<img src="./img/product1.png" alt="Товар 1" class="product__image" />
					<p class="product__price">4350 p.</p>
					<h3 class="product__name">LEONOR GREYL</h3>
					<p class="product__description">
						Кондиционер для укладки волос Condition Naturelle
					</p>
					<button class="product__button">В корзину</button>
				</div>

				<div class="product__slide">
					<img src="./img/product2.png" alt="Товар 1" class="product__image" />
					<p class="product__price">4350 p.</p>
					<h3 class="product__name">LEONOR GREYL</h3>
					<p class="product__description">
						Кондиционер для укладки волос Condition Naturelle
					</p>
					<button class="product__button">В корзину</button>
				</div>

				<div class="product__slide">
					<img src="./img/product3.png" alt="Товар 1" class="product__image" />
					<p class="product__price">4350 p.</p>
					<h3 class="product__name">LEONOR GREYL</h3>
					<p class="product__description">
						Кондиционер для укладки волос Condition Naturelle
					</p>
					<button class="product__button">В корзину</button>
				</div>

				<div class="product__slide">
					<img src="./img/product4.png" alt="Товар 1" class="product__image" />
					<p class="product__price">4350 p.</p>
					<h3 class="product__name">LEONOR GREYL</h3>
					<p class="product__description">
						Кондиционер для укладки волос Condition Naturelle
					</p>
					<button class="product__button">В корзину</button>
                    
				</div>
			</div>

			<button class="products-slider__btn">
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

	<section class="masters-main center">
		<div class="masters">
			<div class="masters__left">
				<h2 class="master__title">Наши мастера</h2>
				<div class="master__menu">
					<div class="master__link">
						<a href="#">Парикмахерские услуги</a>
						<svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M15.3536 4.35355C15.5488 4.15829 15.5488 3.84171 15.3536 3.64645L12.1716 0.464466C11.9763 0.269204 11.6597 0.269204 11.4645 0.464466C11.2692 0.659728 11.2692 0.976311 11.4645 1.17157L14.2929 4L11.4645 6.82843C11.2692 7.02369 11.2692 7.34027 11.4645 7.53553C11.6597 7.7308 11.9763 7.7308 12.1716 7.53553L15.3536 4.35355ZM0 4.5H15V3.5H0V4.5Z"
								fill="black" />
						</svg>
					</div>
					<div class="master__link">
						<a href="#">Макиаж, уход за лицом</a>
						<svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M15.3536 4.35355C15.5488 4.15829 15.5488 3.84171 15.3536 3.64645L12.1716 0.464466C11.9763 0.269204 11.6597 0.269204 11.4645 0.464466C11.2692 0.659728 11.2692 0.976311 11.4645 1.17157L14.2929 4L11.4645 6.82843C11.2692 7.02369 11.2692 7.34027 11.4645 7.53553C11.6597 7.7308 11.9763 7.7308 12.1716 7.53553L15.3536 4.35355ZM0 4.5H15V3.5H0V4.5Z"
								fill="black" />
						</svg>
					</div>
					<div class="master__link">
						<a href="#">Маникюр педикюр</a>
						<svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M15.3536 4.35355C15.5488 4.15829 15.5488 3.84171 15.3536 3.64645L12.1716 0.464466C11.9763 0.269204 11.6597 0.269204 11.4645 0.464466C11.2692 0.659728 11.2692 0.976311 11.4645 1.17157L14.2929 4L11.4645 6.82843C11.2692 7.02369 11.2692 7.34027 11.4645 7.53553C11.6597 7.7308 11.9763 7.7308 12.1716 7.53553L15.3536 4.35355ZM0 4.5H15V3.5H0V4.5Z"
								fill="black" />
						</svg>
					</div>
					<div class="master__link">
						<a href="#">Эпиляция, бровинг</a>
						<svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M15.3536 4.35355C15.5488 4.15829 15.5488 3.84171 15.3536 3.64645L12.1716 0.464466C11.9763 0.269204 11.6597 0.269204 11.4645 0.464466C11.2692 0.659728 11.2692 0.976311 11.4645 1.17157L14.2929 4L11.4645 6.82843C11.2692 7.02369 11.2692 7.34027 11.4645 7.53553C11.6597 7.7308 11.9763 7.7308 12.1716 7.53553L15.3536 4.35355ZM0 4.5H15V3.5H0V4.5Z"
								fill="black" />
						</svg>
					</div>
				</div>
			</div>
			<div class="masters__list">
				<img src="img/master1.png" alt="Мастер 1" class="master__image" />
				<div class="masters__item">
					<h3 class="master__name">Айшат Бекова</h3>
					<h4 class="master__info">Парикмахер стилист</h4>
					<p class="master__experience">Опыт работы 3 года</p>
					<p class="master__info">
						Айщат закончила Академию организация службы
						маркетинга программирует конкурент
					</p>
					<br />
					<p class="master__info">
						Концепция развития трансформирует ролевой
						формирование имиджа. Изменение глобальной стратегии
						настроено позитивно
					</p>
				</div>
			</div>
		</div>

        <x-button title="Онлайн запись" action="/page1" type="button" />
	</section>

	<section class="reviews center">
		<div id="myModal" class="reviews__main hidden">
			<botton class="reviews__close">&times;</botton>
			<iframe class="reviews__iframe" src="https://yandex.ru/maps-reviews-widget/65443540228?comments"></iframe>
			<a href="https://yandex.ru/maps/org/your_time/65443540228/" target="_blank" style="
						box-sizing: border-box;
						text-decoration: none;
						color: #b3b3b3;
						font-size: 10px;
						font-family: YS Text, sans-serif;
						padding: 0 20px;
						position: absolute;
						bottom: 8px;
						width: 100%;
						text-align: center;
						left: 0;
						overflow: hidden;
						text-overflow: ellipsis;
						display: block;
						max-height: 14px;
						white-space: nowrap;
						padding: 40px 0;
						box-sizing: border-box;
					">Your Time на карте Москвы — Яндекс Карты</a>
		</div>
		<button class="reviews__button" type="button">Отзывы</button>
	</section>

@endsection