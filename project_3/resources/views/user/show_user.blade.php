<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<p>
<h3>Dane użytkownika:</h3>
{{print_r($user)}}
<hr>
<p> imie i nazwisko: {{$user['firstName']}} {{$user['lastName']}} </p> <br>
<p>Hobby: {{print_r($user['hobby'])}}</p>
<p>Hobby 1: {{$user['hobby'][0]}}</p>
<hr>
Dostępne Hobby:
<ul>
    @foreach($user['hobby'] as $hobby)
        <li>{{$hobby}}</li>
    @endforeach
</ul>
</body>
</html>
