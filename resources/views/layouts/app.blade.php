<!doctype html>
<html>
<head>
<meta charset="utf-8">

<meta name="description" content="">

<meta name="Saquib" content="Blade">

<title>Checkout our layout</title>

<!-- load bootstrap from a cdn -->

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/twitter-bootstrap/3.0.3/css/bootstrap-combined.min.css">

</head>
<body>
<div class="container">
   <header class="row">
   <div class="navbar">
   <div class="navbar-inner">
       <ul class="nav">
           <li><a href="/">Home</a></li>
           <li><a href="/contact">Contact</a></li>
       </ul>
   </div>
</div>
   </header>
   <div id="main" class="row">
           @yield('content')
   </div>
   <footer class="row">
   <div>@include('components.footer')</div>
   </footer>
</div>
</body>
</html>