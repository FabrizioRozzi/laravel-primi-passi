<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
  <style>
    body{
      background-color: lightblue;
      list-style: none;
    }
    .container{
      height: 100px;
      max-width: 1200px;
    }
    li{
      display: inline;
      text-decoration: none;
      padding: 10px 30px;
      font-size: 25px;
    }
  </style>
</head>
<body>
  <h1>Ciao {{$name}} {{$surname}} sei {{$aggettivo}}</h1>

  <ul>
    @foreach ($films as $film)
      
      <li>
        {{$film}};
      </li>
      
      @if ($film === "Una notte da leoni")
        <h3>Il film "Una notte da leoni" é presente nell'archivio</h3>
      @else
        <h3>Il film "Una notte da leoni" non é presente nell'archivio</h3>
      @endif
    @endforeach
  </ul>
  <div class="container">
    <ul>
      @foreach ($menus as $menu)
        <li>
          <a href="">{{$menu}}</a>
        </li>
      @endforeach
    </ul>
  </div>
</body>
</html>