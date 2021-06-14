@extends('layouts.site')




@push('metaTitleDescrKeys')
	<title>{{ isset($tovar->metatitle)  ? $tovar->metatitle : $tovar->title  }}</title>
	<meta name="description" content="{{ isset($tovar->metadescr) ? $tovar->metadescr : $tovar->short }}">
	@if(isset($tovar->metakeys))
	<meta name="keywords" content="{{ $tovar->metakeys  }}">
	@endif
@endpush








@section('content')

<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-5 mx-auto">

		<nav class="text-black font-bold my-8 mx-4 sm:mx-0" aria-label="Breadcrumb">
			<ol class="list-none p-0 inline-flex">
				<li class="flex items-center">
					<a class="font-medium hover:text-purple-600 transition" href="{{ route('home.page') }}">Главная</a>
					<svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
				</li>
				<li class="flex items-center">
					<a class="text-blue-700 font-medium hover:text-gray-600 transition" href="{{ route('tovary.home') }}">
						{{ $profile->tovary_title ?? 'Товары'}}
					</a>
					<svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
				</li>
				<li>
					<a class="text-gray-400 font-light" aria-current="page">{{ $tovar->title ?? 'no-data' }}</a>
				</li>
			</ol>
		</nav>






    <div class="mx-auto flex flex-wrap">
      <img alt="{{ $tovar->title }}" loading="lazy" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{ asset($tovar->pic ?? 'uploads/not_image.jpg') }}" />
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
        <h2 class="text-sm title-font text-gray-500 tracking-widest">{{ $tovar->brand }}</h2>
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-10">{{ $tovar->title }}</h1>
        
        <p class="leading-relaxed">{!! $tovar->descr !!}</p>
 

        <div class="flex mt-10">
          <span class="title-font font-medium text-base text-gray-900">Цена: <span class="text-3xl text-blue-700"> {{ $tovar->price ?? 'no-data' }}</span> ₽ </span>


          <button 
					data-tovar="{{ $tovar->title ?? 'no-data' }}"
					data-pricetovar="{{ $tovar->price ?? 'цена не установлена' }}"
					class="tovaryZakazatBt flex ml-auto text-white bg-blue-900 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded">Купить</button>
  
        </div>
      </div>
    </div>
  </div>
</section>

@endsection