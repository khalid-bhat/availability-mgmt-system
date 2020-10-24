<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 8 </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased"> 
            <x-header name="Student" test="again data testing"/>
  
            @include('info')
            <h1> Student Page </h1>
            <h3>{{ $name}}</h3>
            <h3>{{ $test}}</h3> 

            <h3>{{9*1}}</h3> 

            @for($i=1;$i<=5;$i++)
            <h4>{{$i}}</h4>
            @endfor

            @if($num==1)
            <h4>Name is {{$test}}</h4>
            @elseif($num==2)
            <h4>Name is {{$name}}</h4>
            @else 
            <h4>Not found</h4>
            @endif

 
            @foreach($list as $val)
            <h4>{{$val}}</h4>
            @endforeach
    </body>
    

    <script>
        var data = @json($list);
        console.log(data[2]);
        </script>

</html>
