<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif
    <form action="UserFormController" method="get">
        <input type="text" name="firstName" placeholder="Podaj imię" autofocus value="{{old('firstName')}}"><br><br>
        <input type="text" name="lastName" placeholder="Podaj nazwisko" value="{{old('lastName')}}"><br><br>
        <input type="email" name="mail" placeholder="email" value="{{old('mail')}}"><br><br>
        <input type="submit" value="Zatwierdź dane">
    </form>
</body>
</html>
