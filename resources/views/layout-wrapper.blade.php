<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
@stack('additional-styles')
<link rel="stylesheet" href="css/main.css">
</html>
<body>
	<script>
      window.addEventListener('load', hidePageLoader);

      function hidePageLoader () {
        const pageLoader = $('.page-loader');

        pageLoader.removeClass('is-active');

        setTimeout(() => {
          pageLoader.remove();
        },1000);
      }
	</script>
	<div class="page-loader is-active">
		<div class="page-loader__loader">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>
	@include('partials.main-header')
	<main class="main">
		<div class="container">
			<div class="row">
				<div class="cell-12">
					@yield ('content')
				</div>
			</div>
		</div>
	</main>
	@include('partials.main-footer')
	<div class="shadow" id="shadow"></div>
	{{--<script src='js/jquery.min.js'></script>--}}
	<script src="{{ mix('js/pollyfill.js') }}"></script>
	<script src="{{ mix('js/pollyfill.js') }}"></script>
	@stack('additional-scripts')
</body>

