<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-Migration-seeder</title>

       

       
    </head>
    <body>
        <h1>It works!</h1>
        @foreach($trains as $train)
        <span>{{$train['Azienda']}}</span>
        <span>{{$train['Partenza_da']}}</span>
        <span>{{$train['Arrivo_a']}}</span>
        <span>{{$train['Orario_di_partenza']}}</span>
        <span>{{$train['Orario_di_arrivo']}}</span>
        <span>{{$train['Codice_treno']}}</span>
        <span>{{$train['Prezzo']}}</span>
        <br>
        @endforeach
    </body>
</html>
