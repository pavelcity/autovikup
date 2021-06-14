@extends('layouts.site')



@push('metaTitleDescrKeys')
	<title>{{ $meta->cource_title ?? '' }}</title>
	<meta name="description" content="{{ $meta->cource_description ?? '' }}">
	<meta name="keywords" content="{{ $meta->cource_keywords ?? '' }}">
	<link rel="canonical" href="{{ $meta->cource_canonical ?? '' }}" />
    <meta name="author" content="{{ $meta->cource_avtor ?? '' }}">
@endpush


  



@section('content')


@if(false)
<hr>
	<div class="container mx-auto text-xl py-8">
		@livewire('cources')
	</div>
<hr>
@endif


 





<section class="text-gray-600 body-font">
  <div class="container px-5 py-5 mx-auto">

		<nav class="text-black font-bold my-8 mx-4 sm:mx-0" aria-label="Breadcrumb">
			<ol class="list-none p-0 inline-flex">
				<li class="flex items-center">
					<a class="font-medium hover:text-blue-700 transition" href="{{ route('home.page') }}">Главная</a>
					<svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
				</li>
				<li>
					<a class="text-gray-400 font-light" aria-current="page">
						{{ $profile->cources_title ?? 'Услуги' }}
						</a>
				</li>
			</ol>
		</nav>
 

		

    <div class="flex flex-col">
      <div class="h-1 bg-gray-200 rounded overflow-hidden">
        <div class="w-24 h-full bg-indigo-500"></div>
      </div>
      <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-1">
        <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl sm:text-3xl mb-2 sm:mb-0">
	        {{ $profile->cources_title ?? 'Услуги' }}
        </h1>
        	{!! $profile->cources_subtitle ?? 'нет данных' !!}
      </div>
    </div>
 






		@livewire('cources')




  </div>
</section>




@if(isset($seo->courcepage_title ))
<div class="container mx-auto border-t border-gray-200 mt-10">
	<h1 class="mt-10 mb-10 text-3xl font-semibold text-gray-500">
		{{ $seo->courcepage_title ?? '' }}
	</h1>
	<p class="text-lg">
		{!! $seo->courcepage_txt !!}
	</p>
</div>
@endif








@push('scripts')
<script>
	if ('loading' in HTMLImageElement.prototype) { 
			// Поддерживается
			console.log('Поддерживается');
	} else {
		 // Применить полифилл или JavaScript
		 console.log('нет');
	}
	</script>
@endpush







@endsection