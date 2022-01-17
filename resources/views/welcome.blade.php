<!DOCTYPE html>
<html lang="pt-BR">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pesquise Um Game</title>
   <link rel="stylesheet" href="/css/style.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
   <div class="container-search-games">

      <form action="{{ route('games.search') }}" method="GET">

         <h1>
            Pesquise Um Game Na Steam
         </h1>

         <div id="input-search-container">

            <input type="search" name="search" class="input-search" placeholder="Pesquise Um Game...">

            <button type="submit">
               <i class="material-icons">
                  search
               </i>
            </button>

         </div>

      </form>

   </div>

   @if (isset($games))

      <h1 style="text-align: center;">
         Pesquisando Por "{{ $search }}"
      </h1>

      <div id="games-container">
         @foreach ($games as $game)
            <div class="container-card-games">
               <div class="game-image">
                  <img src="{{ $game['thumb'] }}" alt="{{ $game['external'] }}">
               </div>

               <div class="game-content">
                  <h1>{{ $game['external'] }}</h1>
                  <p>
                     R$ {{ $game['cheapest'] * 5 }}
                  </p>
               </div>
            </div>
         @endforeach
      </div>
   @endif
</body>

</html>
