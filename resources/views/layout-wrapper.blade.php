<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css'>
<link rel="stylesheet" href="css/main.css">
</html>
<body>
@include('partials.main-header')
@yield ('content')
@include('partials.main-footer')
<script src='js/jquery.min.js'></script>
<script src='js/slick.min.js'></script>
<script defer src="js/frontend/main.js"></script>
@yield('scripts')
</body>

