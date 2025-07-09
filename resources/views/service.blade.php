@extends('layouts.app')

@section('title-main')Запись на услуги@endsection

@section('content')

<div class="bookings center">
    <h1 class="bookings__title">Запись на услуги</h1>

    @if(session('success'))
        <div class="bookings__success-message">{{ session('success') }}</div>
    @endif

    <form action="{{ route('bookings.store') }}" method="POST" class="bookings__form" id="bookingForm">
        @csrf
        <label for="service_id" class="bookings__label">Услуга:</label>
        <select name="service_id" id="service_id" required class="bookings__select">
            @foreach($services as $service)
                <option value="{{ $service->id }}" {{ (isset($serviceId) && $serviceId == $service->id) ? 'selected' : '' }}>
                    {{ $service->title }}
                </option>
            @endforeach
        </select>

        <label for="user_name" class="bookings__label">Ваше имя:</label>
        <input type="text" name="user_name" id="user_name" value="{{ old('user_name', $firstname ?? '') }}" required class="bookings__input">

        <label for="user_phone" class="bookings__label">Ваш телефон:</label>
        <input type="text" name="user_phone" id="user_phone" value="{{ old('user_phone', $phone ?? '') }}" required class="bookings__input">

        <label for="appointment_time" class="bookings__label">Время записи:</label>
        <input type="datetime-local" name="appointment_time" id="appointment_time" required class="bookings__input">
        
        <input type="hidden" name="discount" id="discount" value="{{ old('discount', $discount ?? 0) }}"> 

        <button type="submit" class="bookings__button">Записаться</button>
    </form>
</div>

@endsection
