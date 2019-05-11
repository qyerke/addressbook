@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <h1 class="display-3">Создать контакт</h1>
            <div>
                @include('errors')
                <form method="post" action="{{ route('contacts.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="first_name">Фамилия:</label>
                        <input type="text" class="form-control" name="first_name" value="{{old('first_name')}}"/>
                    </div>

                    <div class="form-group">
                        <label for="last_name">Имя:</label>
                        <input type="text" class="form-control" name="last_name" value="{{old('last_name')}}"/>
                    </div>

                    <div class="form-group">
                        <label for="phone">Телефон:</label>
                        <input type="text" class="form-control" name="phone" value="{{old('phone')}}"/>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" name="email" value="{{old('email')}}"/>
                    </div>
                    <div class="form-group">
                        <label for="address">Адрес:</label>
                        <input type="text" class="form-control" name="address" value="{{old('address')}}"/>
                    </div>
                    <button type="submit" class="btn btn-primary-outline">Сохранить</button>
                </form>
            </div>

        </section>
    </div>
@endsection