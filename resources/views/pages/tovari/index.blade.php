@extends('layouts.site')





@push('metaTitleDescrKeys')
	<title>{{ $meta->tovary_title ?? '' }}</title>
	<meta name="description" content="{{ $meta->tovary_description ?? '' }}">
	<meta name="keywords" content="{{ $meta->tovary_keywords ?? '' }}">
	<link rel="canonical" href="{{ $meta->tovary_canonical ?? '' }}" />
	<meta name="author" content="{{ $meta->tovary_avtor ?? '' }}">
@endpush








@section('content')


<section class="text-gray-600 body-font">
  <div class="container px-5 py-5 mx-auto">



		<nav class="text-black font-bold my-8 mx-4 sm:mx-0" aria-label="Breadcrumb">
			<ol class="list-none p-0 inline-flex">
				<li class="flex items-center">
					<a class="font-medium hover:text-purple-600 transition" href="{{ route('home.page') }}">Главная</a>
					<svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
				</li>
				<li>
					<a class="text-gray-400 font-light" aria-current="page">
						{{ $profile->tovary_title ?? 'Товары'}}
						</a>
				</li>
			</ol>
		</nav>







		<div class="flex flex-col">
      <div class="h-1 bg-gray-200 rounded overflow-hidden">
        <div class="w-24 h-full bg-indigo-500"></div>
      </div>
      <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
        <div class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl sm:text-3xl mb-2 sm:mb-0">
	        {{ $profile->tovary_title ?? 'Товары'}}
	      </div>
	        
        {!! $profile->tovary_subtitle ?? 'нет данных' !!}
      </div>
    </div>


    <div class="flex flex-wrap -m-4">

 
 
			@foreach ($tovars as $tovar)
					
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full mb-5">
        <a loading="lazy" href="{{ route('tovary.detail', $tovar->slug) }}" class="block relative h-56 rounded overflow-hidden">
          <img alt="{{ $tovar->title }}" class="object-cover object-center w-full h-full block" src="{{ asset($tovar->pic ?? 'uploads/not_image.jpg') }}" />
        </a>
        <div class="mt-4 mb-3">
          <h2 class="text-gray-900 title-font text-lg font-medium">{{ $tovar->title }}</h2>
          <p class="mt-1 text-blue-900 font-medium">{{ $tovar->price }} ₽</p>
        </div>

				<a href="{{ route('tovary.detail', $tovar->slug) }}" class="bg-blue-900 hover:bg-blue-600 transition py-2 px-5 text-white text-xs inline-flex uppercase items-center rounded-md">Узнать больше
					<svg style="width:20px;height:20px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
				</svg>
				</a>



				<a href="#" 
				data-tovar="{{ $tovar->title ?? 'no-data' }}"
				data-pricetovar="{{ $tovar->price ?? 'цена не установлена' }}"
				class="tovaryZakazatBt bg-gray-500 hover:bg-gray-600 transition py-2 px-5 text-white text-xs inline-flex uppercase items-center rounded-md md:mt-2">Заказать
					<svg style="width:20px;height:20px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
				</svg>
				</a>
      </div>

			@endforeach








			@if(false)
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full mb-5">
        <a href="#" class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://images.unsplash.com/photo-1564836950275-14737b1b6af7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=80">
        </a>
        <div class="mt-4 mb-3">
          <h2 class="text-gray-900 title-font text-lg font-medium">Набор штучек</h2>
          <p class="mt-1 text-purple-500 font-medium">1500 ₽</p>
        </div>
				<a href="#" class="bg-purple-500 hover:bg-purple-600 transition py-2 px-5 text-white text-xs inline-flex uppercase items-center rounded-md">Узнать больше
					<svg style="width:20px;height:20px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
				</svg>
				</a>
      </div>


      <div class="lg:w-1/4 md:w-1/2 p-4 w-full mb-5">
        <a href="#" class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1365&q=80">
        </a>
        <div class="mt-4 mb-3">
          <h2 class="text-gray-900 title-font text-lg font-medium">Другой набор</h2>
          <p class="mt-1 text-purple-500 font-medium">1500 ₽</p>
        </div>
				<a href="#" class="bg-purple-500 hover:bg-purple-600 transition py-2 px-5 text-white text-xs inline-flex uppercase items-center rounded-md">Узнать больше
					<svg style="width:20px;height:20px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
				</svg>
				</a>
      </div>



      <div class="lg:w-1/4 md:w-1/2 p-4 w-full mb-5">
        <a href="#" class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://images.unsplash.com/photo-1524860155154-c904628c418c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDZ8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60">
        </a>
        <div class="mt-4 mb-3">
          <h2 class="text-gray-900 title-font text-lg font-medium">Интересная штучка</h2>
          <p class="mt-1 text-purple-500 font-medium">1500 ₽</p>
        </div>
				<a href="#" class="bg-purple-500 hover:bg-purple-600 transition py-2 px-5 text-white text-xs inline-flex uppercase items-center rounded-md">Узнать больше
					<svg style="width:20px;height:20px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
				</svg>
				</a>
      </div>



      <div class="lg:w-1/4 md:w-1/2 p-4 w-full mb-5">
        <a href="#" class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://images.unsplash.com/photo-1535415493710-bdf0b2dc725e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1350&q=80">
        </a>
        <div class="mt-4 mb-3">
          <h2 class="text-gray-900 title-font text-lg font-medium">Много штучек</h2>
          <p class="mt-1 text-purple-500 font-medium">1500 ₽</p>
        </div>
				<a href="#" class="bg-purple-500 hover:bg-purple-600 transition py-2 px-5 text-white text-xs inline-flex uppercase items-center rounded-md">Узнать больше
					<svg style="width:20px;height:20px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
				</svg>
				</a>
      </div>


      <div class="lg:w-1/4 md:w-1/2 p-4 w-full mb-5">
        <a href="#" class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://images.unsplash.com/photo-1503236823255-94609f598e71?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1350&q=80">
        </a>
        <div class="mt-4 mb-3">
          <h2 class="text-gray-900 title-font text-lg font-medium">Что-то круглое</h2>
					<p class="mt-1 text-purple-500 font-medium">1500 ₽</p>
        </div>
				<a href="#" class="bg-purple-500 hover:bg-purple-600 transition py-2 px-5 text-white text-xs inline-flex uppercase items-center rounded-md">Узнать больше
					<svg style="width:20px;height:20px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
				</svg>
				</a>
      </div>



      <div class="lg:w-1/4 md:w-1/2 p-4 w-full mb-5">
        <a href="#" class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://images.unsplash.com/photo-1516975080664-ed2fc6a32937?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1350&q=80">
        </a>
        <div class="mt-4 mb-3">
          <h2 class="text-gray-900 title-font text-lg font-medium">Штучки в баночке</h2>
          <p class="mt-1 text-purple-500 font-medium">1500 ₽</p>
        </div>
				<a href="#" class="bg-purple-500 hover:bg-purple-600 transition py-2 px-5 text-white text-xs inline-flex uppercase items-center rounded-md">Узнать больше
					<svg style="width:20px;height:20px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
				</svg>
				</a>
      </div>



      <div class="lg:w-1/4 md:w-1/2 p-4 w-full mb-5">
        <a href="#" class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://images.unsplash.com/photo-1515688594390-b649af70d282?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1295&q=80">
        </a>
        <div class="mt-4 mb-3">
          <h2 class="text-gray-900 title-font text-lg font-medium">Баночки и штучки</h2>
          <p class="mt-1 text-purple-500 font-medium">1500 ₽</p>
        </div>
				<a href="#" class="bg-purple-500 hover:bg-purple-600 transition py-2 px-5 text-white text-xs inline-flex uppercase items-center rounded-md">Узнать больше
					<svg style="width:20px;height:20px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
				</svg>
				</a>
      </div>
			@endif






    </div>
  </div>
</section>







@if(isset($seo->tovarypage_title))
<div class="container mx-auto border-t border-gray-200 mt-10 px-5 sm:px-0">
	<h1 class="mt-10 mb-10 text-3xl font-semibold text-gray-500">
		{{ $seo->tovarypage_title ?? '' }}
	</h1>
	<p class="text-lg">
		{!! $seo->tovarypage_txt ?? '' !!}
	</p>
</div>
@endif


@endsection