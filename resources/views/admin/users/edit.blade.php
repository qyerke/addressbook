@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <h1 class="display-3">Изменить пользователя</h1>
            <div>
                @include('errors')
                <form method="post" action="{{ route('users.update', $user->id) }}">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="name">Имя:</label>
                        <input type="text" class="form-control" name="name" value="{{$user->name}}"/>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" name="email" value="{{$user->email}}" readonly/>
                    </div>
                    <button type="submit" class="btn btn-primary-outline">Add user</button>
                </form>
            </div>

        </section>
    </div>
@endsection