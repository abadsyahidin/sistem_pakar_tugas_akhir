<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>

  @include('layouts.link')
</head>

<body class="light">


  @yield('content')

  <div class="fugu-go-top">
    <img src="assets/images/svg/arrow-black-right.svg" alt="">
  </div>





  <div class="fugu-preloader">
    <div class="fugu-spinner">
      <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
        <circle cx="50" cy="50" r="46" />
      </svg>
    </div>
    <div class="fugu-title">loading...</div>
  </div>

  @include('layouts.script')
</body>
</html>
