@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <h1 class="display-3">Добавить пользователя</h1>
            <div>
                @include('errors')
                <form method="post" action="{{ route('users.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Имя:</label>
                        <input type="text" class="form-control" name="name" value="{{old('name')}}"/>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" name="email" value="{{old('email')}}"/>
                    </div>
                    <div class="form-group">
                        <label for="password">Пароль:</label>
                        <input type="password" class="form-control" name="password" value="{{old('password')}}"/>
                    </div>
                    <button type="submit" class="btn btn-primary-outline">Add user</button>
                </form>
            </div>

        </section>
    </div>
@endsection