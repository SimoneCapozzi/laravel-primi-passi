<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  <title>Laravel-1</title>
</head>
<body>

  <div class="container">

    <div class="header">
      <h1>Hello World</h1>
      <a href="http://127.0.0.1:8000/pagina">Link seconda pagina</a>
    </div>
    <br>  

    
    <div class="main">
      <h3>Ciao {{$name}} {{$lastname}}, la lista di libri è:</h3>
      @if (count($books) > 0) {{-- se l'array è maggiore di zero allora stampa la lista libri --}}
        <ul>
          @foreach ($books as $book) {{-- ciclo per stampare lista libri --}}

            @if ($loop->first)
              <li>Primo libro ------> {{ $book}}</li>
            @elseif ($loop->last) 
              <li>Ultimo libro ------> {{ $book}}</li> 
            @else 
              <li>{{$book}}</li>  
            @endif
          @endforeach
        </ul>
      @else {{-- altrimenti stampa il messaggio --}}
        <h3>La lista è vuota</h3>  
      @endif   
    </div>
    

  </div>
</body>
</html>






      