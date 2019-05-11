@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <h1 class="display-3">Изменить контакт</h1>
            <div>
                @include('errors')
                <form method="post" action="{{ route('contacts.update', $contact->id) }}">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="first_name">Фамилия:</label>
                        <input type="text" class="form-control" name="first_name" value="{{$contact->first_name}}"/>
                    </div>

                    <div class="form-group">
                        <label for="last_name">Имя:</label>
                        <input type="text" class="form-control" name="last_name" value="{{$contact->last_name}}"/>
                    </div>

                    <div class="form-group">
                        <label for="phone">Телефон:</label>
                        <input type="text" class="form-control" name="phone" value="{{$contact->phone}}"/>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" name="email" value="{{$contact->email}}"/>
                    </div>
                    <div class="form-group">
                        <label for="address">Адрес:</label>
                        <input type="text" class="form-control" name="address" value="{{$contact->address}}"/>
                    </div>
                    <button type="submit" class="btn btn-primary-outline">Сохранить</button>
                </form>
            </div>

        </section>
    </div>
@endsection