<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  
  <title>Document</title>
</head>
<body>
  <div class="container">
    <h1>Questa è la seconda pagina</h1>
    <br>

    <h3>Ciao {{$name}} {{$lastname}}, la lista dei tuoi film è:</h3>
    @if (count($films) > 0) {{-- se l'array è maggiore di zero allora stampa la lista film --}}
      <ul>
        @foreach ($films as $film) {{-- ciclo per stampare lista  --}}
          <li>{{$film}}</li>
        @endforeach
      </ul>
    @else {{-- altrimenti stampa il messaggio --}}
      <h3>La lista è vuota</h3>  
    @endif 
    
    <a href="http://127.0.0.1:8000/">Link prima pagina</a>
  </div>
</body>
</html>