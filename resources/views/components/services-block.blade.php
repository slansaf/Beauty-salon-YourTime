<section class="services center">
    <h2 class="services__title">
        Услуги <br />
        и цены
    </h2>
    <div class="services__grid">
        @foreach ($services as $service)
            <div class="service__item">
                <img src="{{ asset($service->image) }}" alt="{{ $service->title }}" class="service__image" />
                <a href="{{ route('services', $service->id) }}" class="service__name">{{ $service->title }}</a>
            </div>
        @endforeach
    </div>
</section>
