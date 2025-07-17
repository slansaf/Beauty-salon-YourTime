<section class="price-list center">
	<h2 class="price-list__title">
		Прайс лист
	</h2>

	<div class="price-list__items">
      
		    <div class="price-list__item">
              
		    	<h3 class="price-list__title2">Наименование услуги</h3>
                @foreach ($prices as $price)
		    	<p class="price-list__text  dotted">{{ $price->service_name}}</p>
                @endforeach
                
		    </div>
		    <div class="price-list__item">
              
		    	<h3 class="price-list__title2">Время</h3>
                @foreach ($prices as $price)
                <p class="price-list__text">{{ $price->time}}</p>
                 @endforeach
		    </div>
		    <div class="price-list__item">
             
		    	<h3 class="price-list__title2">Цена</h3>
                @foreach ($prices as $price)
		    	<p class="price-list__text">от {{ $price->price}} руб.</p>
                @endforeach
		    </div>
        
	</div>
</section>