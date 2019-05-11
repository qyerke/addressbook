<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Справочная книга</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <style>
        a, a:hover {
            color: #fff;
        }
        body > .container {
            padding: 60px 15px 0;
        }
    </style>
</head>
<body>
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="{{route('index')}}">Справочная книга</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">


            </ul>
            <form action="/search" method="POST" role="search" class="form-inline mt-2 mt-md-0">
                @csrf
                <div class="input-group">
                    <input type="text" class="form-control" name="q"
                           placeholder="Поиск контактов"> <span class="input-group-btn">
					<button type="submit" class="btn btn-default">
						<i class="fas fa-search"></i>
					</button>
				</span>
                </div>
            </form>
            <li class="nav-item active">
                <a class="btn btn-primary" role="button">Добавить контакт</a>
            </li>
        </div>
    </nav>
</header>
<main role="main" class="container">

<div class="container">


    @if(isset($contacts))
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ФИО</th>
                <th>Телефон</th>
                <th>Email</th>
                <th>Адрес</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->phone}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->address}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>
        {!! $contacts->render() !!}
    @endif
</div>
<div class="container">
    @if(isset($details))
        <p>Результаты поиска по запросу <b> {{ $query }} </b>:</p>
        <h2>Справочная книга</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ФИО</th>
                <th>Телефон</th>
                <th>Email</th>
                <th>Адрес</th>
            </tr>
            </thead>
            <tbody>
            @foreach($details as $contact)
                <tr>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->phone}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->address}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        @if($details){!! $details->render() !!}@endif
    @elseif(isset($message))
        <p>{{ $message }}</p>
    @endif
</div>
</main>
</body>
</html>