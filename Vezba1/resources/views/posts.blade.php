<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link href="{{ URL::asset('css/style.css'); }}" rel="stylesheet" type="text/css">
  

  <title>Posts</title>
</head>
<body>
<div class="container">
        <header>posts</header>
      @foreach ($posts as $post)
  <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
  
    <div class="card-body">
      <h2>{{ $post->title }}</h2>
      <p class="card-text">{{ $post->body}}</p>
      @endforeach
    </div>
  </div>
</div>
</body>
</html>