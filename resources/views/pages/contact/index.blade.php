@extends('layouts.site')



@push('metaTitleDescrKeys')
	<title>{{ $meta->contact_title ?? '' }}</title>
	<meta name="description" content="{{ $meta->contact_description ?? '' }}">
	<meta name="keywords" content="{{ $meta->contact_keywords ?? '' }}">
	<link rel="canonical" href="{{ $meta->contact_canonical ?? '' }}" />
	<meta name="author" content="{{ $meta->contact_avtor ?? '' }}">
@endpush





@section('content')










@if(true)
<section class="text-gray-600  body-font">
  <div class="container px-5 py-5 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">
	      
	      {{ $profile->contacty_title ?? 'Контакты' }}
	      </h1>
      <p class="w-full lg:w-2/3 mx-auto leading-relaxed text-base">Появились вопросы? Пишите, звоните</p>
    </div>


 


		<div class="contatiner flex flex-col sm:flex-row w-auto sm:w-auto md:w-auto lg:w-9/12 mx-auto mb-10">

			<div class="w-full md:w-1/2  text-center mt-6 sm:mt-0">
				<h2 class="text-gray-900 text-lg title-font font-medium mb-0">Телефон</h2>
				<a href="tel:{{ $profile->phone ?? '9 000 800-00-00' }}" class="m-1 text-blue-900 hover:text-gray-500 text-xl inline-flex items-center">
					{{ $profile->phone ?? '9 000 800-00-00' }}
				</a>
			</div>

			<div class="w-full md:w-1/2 text-center mt-6 sm:mt-0 ">
				<h2 class="text-gray-900 text-lg title-font font-medium mb-0">E-mail</h2>
				<a href="mailto:mail@me.me" class="mt-1 text-blue-900 hover:text-gray-500 text-xl inline-flex items-center">
					{{ $profile->email ?? 'не указан' }}
				</a>
			</div>

		</div>



		<div class="w-full lg:w-9/12  mx-auto mb-16 block  text-center mt-6 sm:mt-0 ">
			<h2 class="text-gray-900 text-lg title-font font-medium mb-0">Адрес</h2>
			<div class="mt-1 text-gray-700 text-xl inline-flex items-center">
				Ростов-на-Дону, ул. Туполева 16е, 3 этаж, оф. 3.1
			</div>
		</div>



		

		@include('pages.includes.feedback_form')



  </div>
</section>
@endif












<div class="container block mx-auto bg-gray-100 p-10 h-96">
	<iframe title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://yandex.ru/map-widget/v1/?um=constructor%3A6bc44d89436dc3a538a2ed1d89f75528d604e0b5fd39adb33016861b1ad13d73&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
</div>








@endsection