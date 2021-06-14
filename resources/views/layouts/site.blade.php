<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">


	<meta http-equiv="Cache-Control" content="no-cache" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
	
	 
	 
	<meta property="og:title" content="{{ $meta->ogtitle ?? '' }}" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="{{ $meta->ogurl ?? '' }}" />
	<meta property="og:image" content="{{ $meta->ogimg ?? '' }}" />
	<meta property="og:image:600" content="600" />
	<meta property="og:image:600" content="600" />


	@stack('metaTitleDescrKeys')

	{{-- <meta name="author" content="{{ $meta->author ?? '' }}">
	<link rel="canonical" href="{{ $meta->canonical ?? '' }}" /> --}}

	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('css/addtitional.css') }}">



	@stack('styles')
	@livewireStyles






	@isset($metric->googleanalitics)
	{!! $metric->googleanalitics ?? '' !!}
	@endisset

	@isset($metric->yandexmetrika)
	{!! $metric->yandexmetrika !!}
	@endisset

	@isset($metric->fbpixel)
	{!! $metric->fbpixel !!}
	@endisset

	@isset($metric->vkpixel)
	{!! $metric->vkpixel !!}
	@endisset


	




</head>






<body class="bg-white pt-16">
	

	{{-- topNav --}}
	@include('pages.includes.topnav')
	{{-- topNav end --}}



			@yield('content')



			
	{{-- footer --}}
		@include('pages.includes.footer')
	{{-- footer end --}}




	{{-- <script rel="preload" src="{{ asset('js/app.js') }}" as="script"></script> --}}
	<script rel="prefetch" src="{{ asset('js/app.js') }}" ></script>
	<script rel="prefetch" src="{{ asset('js/myjs.js') }}" ></script>


	@stack('scripts')
	@livewireScripts

</body>
</html>