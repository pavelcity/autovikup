@extends('layouts.site')
@section('title', 'Курсы')


  
@push('metaTitleDescrKeys')
	<title>{{ isset($cource->metatitle)  ? $cource->metatitle : $cource->title  }}</title>
	<meta name="description" content="{{ isset($cource->metadescr) ? $cource->metadescr : $cource->short }}">
	@if(isset($cource->metakeys))
	<meta name="keywords" content="{{ $cource->metakeys  }}">
	@endif
@endpush






@section('content')

 


<section class="mt-10 container mx-auto">

	<div class="mb-4 md:mb-0 w-full mx-auto relative">
		<div class="px-4 lg:px-0">
			<h2 class="text-4xl font-semibold text-gray-800 leading-tight">
				{{ $cource->title }}
			</h2>
		</div>
 

		<nav class="text-black font-bold my-8 mx-4 sm:mx-0" aria-label="Breadcrumb">
			<ol class="list-none p-0 inline-flex">
				<li class="flex items-center">
					<a class="font-medium hover:text-purple-600 transition" href="{{ route('home.page') }}">Главная</a>
					<svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
				</li>
				<li class="flex items-center">
					<a class="text-blue-700 font-medium hover:text-gray-600 transition" href="{{ route('cources.home') }}">
						{{ $profile->cources_title ?? 'Услуги' }}
						</a>
					<svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
				</li>
				<li>
					<a class="text-gray-400 font-light" aria-current="page">{{ $cource->title ?? 'no-data' }}</a>
				</li>
			</ol>
		</nav>




		{{-- <img src="{{ asset($cource->pic ?? 'uploads/not_image.jpg')  }}" class="w-full object-cover lg:rounded" style=""/> --}}
	</div>

	<div class="flex flex-col lg:flex-row lg:space-x-12">

		

		<div class="px-4 lg:px-0 mt-2 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">
			<img src="{{ asset($cource->pic ?? 'uploads/not_image.jpg')  }}" class="w-full object-cover lg:rounded mb-10" style=""/>
		
			{!! $cource->descr ?? 'no-data' !!}

			<a href="{{ route('cources.home') }}" class="text-white bg-gray-500 inline-flex items-center mt-16 py-3 px-5 mr-5 uppercase text-xs rounded-md hover:bg-blue-700 transition">Назад
				<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2 transform rotate-180" viewBox="0 0 24 24">
					<path d="M5 12h14M12 5l7 7-7 7"></path>
				</svg>
			</a>
			
		</div>

		




		{{-- h-20 w-20 rounded-full mr-2 object-cover mx-auto --}}

		<div class="w-full lg:w-1/4 m-auto mt-2 max-w-screen-sm">
			<div class="p-4 border-t border-b md:border md:rounded">
				
				<h6 class="font-semibold text-purple-700 text-center text-xl"></h6>

				<div class="py-2 bg-white mt-2 w-full bg-gray-100 rounded-md">
					<img class="w-24 h-24 object-cover  mx-auto rounded-full mb-5" src="{{ asset($cource->avatar ?? 'uploads/not_image.jpg') }}" />

						<div class="text-center">
							<p class="font-semibold text-blue-700 text-lg"> {{ $cource->name_spiker ?? 'нет данных' }}  </p>
							<p class="font-light text-gray-500 text-base"> {{ $cource->subtitle_spiker ?? 'должность' }}</p>
						</div>

						<div class="text-gray-700 py-3 px-4 text-center ">
							{!! $cource->text_spiker ?? 'нет данных' !!}
						</div>
				</div>
 

				 

				<p class="mt-12 mb-2 text-blue-700 text-medium text-center"> Цена: <span class="font-bold text-3xl ">{{ $cource->price ?? '' }}</span> </p>

				<br>
				<button 
				data-kurs="{{ $cource->title ?? 'no-data' }}"
				data-price="{{ $cource->price ?? 'цена не установлена' }}"
				class="cursyZapisatsaBt px-2 py-4 text-gray-100 bg-blue-900 hover:bg-blue-600 transition flex w-full items-center justify-center rounded uppercase">
					Записаться 
					<i class='bx bx-user-plus ml-2' ></i>
				</button>
			</div>
		</div>

	</div>
</section>








@if(false)
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">

 



    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">



					
			
      <div class="p-4 w-full sm:mb-3">
        <div class="rounded-lg h-3/5 overflow-hidden ">
						<img alt="content" class="object-cover object-center h-full w-full" src="{{ asset($cource->pic) ?? 'uploads/not_image.jpg' }}">
        </div>

        <h2 class="text-3xl font-medium title-font text-gray-900 mt-14 mb-5">{{ $cource->title }} </h2>

        <p class="text-base leading-relaxed mt-2">{!! $cource->descr !!}</p>
        
				<a href="{{ route('cources.home') }}" class="text-white bg-purple-500 inline-flex items-center mt-16 py-3 px-5 mr-5 uppercase text-xs rounded-md hover:bg-purple-600 transition">Назад
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2 transform rotate-180" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>

				<a href="#" class="text-white bg-gray-500 inline-flex items-center mt-3 py-3 px-5 uppercase text-xs rounded-md hover:bg-purple-600 transition">Записаться
          <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
        </a>
      </div>


    </div>
  </div>
</section>
@endif

@endsection