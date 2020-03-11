<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/bootstrap.min.css">

  <title>Document</title>
</head>
<body>
  @include('layouts.nav')
  <div class="container">
    @include('layouts.errors')
    @yield('content')
  </div>
</body>
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
  
</html>