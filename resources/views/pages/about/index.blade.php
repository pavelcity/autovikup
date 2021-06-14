@extends('layouts.site')




@push('metaTitleDescrKeys')
	<title>{{ $meta->about_title ?? '' }}</title>
	<meta name="description" content="{{ $meta->about_description ?? '' }}">
	<meta name="keywords" content="{{ $meta->about_keywords ?? '' }}">
	<link rel="canonical" href="{{ $meta->about_canonical ?? '' }}" />
	<meta name="author" content="{{ $meta->about_avtor ?? '' }}">
@endpush






@section('content')



	<section class="text-gray-600 body-font">
		<div class="container px-5 pt-5 mx-auto">
			<div class="flex flex-wrap w-full mb-7 flex-col items-center text-center">
				<h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">
					{{ $profile->about_title ?? 'О нас' }}
					</h1>
				<p class="lg:w-10/12 w-full leading-relaxed text-xl text-gray-500">
					{!! $about->descronaboutpage ?? 'Всем привем. Меня зовут Пенелопа Круз. За полтора года я напилила не только на квартиру (2-х уровневую причем) но и на фольскваген Туарег' !!}
					
				</p>
			</div>
		</div>
	</section>






	<section class="text-gray-600 body-font">
		<div class="container px-5 py-4 mx-auto flex flex-wrap">

			<div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
				<img loading="lazy" alt="feature" class="w-full" src="{{ asset($about->pic ?? 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80') }} ">
			</div>

			<div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
				
				
				<div class="flex flex-col mb-20 lg:items-start items-center">
					
					<div class="w-16 h-16 inline-flex items-center justify-center rounded-full bg-blue-900 text-blue-100 mb-5">
					 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  width="30" height="30" viewBox="0 0 24 24">
   <path fill="#fff" d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M16.2,16.2L11,13V7H12.5V12.2L17,14.9L16.2,16.2Z" />
</svg>
					</div>

					<div class="flex-grow">
						<h2 class="text-gray-900 text-lg title-font font-medium mb-3">
							{{ $about->fichaone ?? 'Преимущество намбер ван' }}
							</h2>
						<p class="leading-relaxed text-base">
							{!! $about->fichaonetext ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id explicabo, perferendis, eligendi nam, reiciendis odit vero fugiat nulla nesciunt illo adipisci deserunt dolorem? Quia unde perspiciatis nisi rem modi qui.' !!}
							
							</p>
					</div>

				</div>





				<div class="flex flex-col mb-20 lg:items-start items-center">
					
					<div class="w-16 h-16 inline-flex items-center justify-center rounded-full bg-blue-900 text-blue-100 mb-5">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  width="30" height="30" viewBox="0 0 24 24">
					   <path fill="#fff" d="M17,18C15.89,18 15,18.89 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20C19,18.89 18.1,18 17,18M1,2V4H3L6.6,11.59L5.24,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42A0.25,0.25 0 0,1 7.17,14.75C7.17,14.7 7.18,14.66 7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.58 17.3,11.97L20.88,5.5C20.95,5.34 21,5.17 21,5A1,1 0 0,0 20,4H5.21L4.27,2M7,18C5.89,18 5,18.89 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20C9,18.89 8.1,18 7,18Z" />
					</svg>
					</div>

					<div class="flex-grow">
						<h2 class="text-gray-900 text-lg title-font font-medium mb-3">
							{{ $about->fichatwo ?? 'Фишка намбер ту ))' }}
							</h2>
						<p class="leading-relaxed text-base">
							{!! $about->fichatwotext ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id explicabo, perferendis, eligendi nam, reiciendis odit vero fugiat nulla nesciunt illo adipisci deserunt dolorem? Quia unde perspiciatis nisi rem modi qui.' !!}
						</p>
					</div>

				</div>



				<div class="flex flex-col mb-20 lg:items-start items-center">
					
					<div class="w-16 h-16 inline-flex items-center justify-center rounded-full bg-blue-900 text-blue-100 mb-5">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  width="30" height="30" viewBox="0 0 24 24">
					   <path fill="#fff" d="M5,11L6.5,6.5H17.5L19,11M17.5,16A1.5,1.5 0 0,1 16,14.5A1.5,1.5 0 0,1 17.5,13A1.5,1.5 0 0,1 19,14.5A1.5,1.5 0 0,1 17.5,16M6.5,16A1.5,1.5 0 0,1 5,14.5A1.5,1.5 0 0,1 6.5,13A1.5,1.5 0 0,1 8,14.5A1.5,1.5 0 0,1 6.5,16M18.92,6C18.72,5.42 18.16,5 17.5,5H6.5C5.84,5 5.28,5.42 5.08,6L3,12V20A1,1 0 0,0 4,21H5A1,1 0 0,0 6,20V19H18V20A1,1 0 0,0 19,21H20A1,1 0 0,0 21,20V12L18.92,6Z" />
					</svg>
					</div>

					<div class="flex-grow">
						<h2 class="text-gray-900 text-lg title-font font-medium mb-3">
							{{ $about->fichatri ?? 'Фишка намбер три' }}
							</h2>
						<p class="leading-relaxed text-base">
							{!! $about->fichatritext ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id explicabo, perferendis, eligendi nam, reiciendis odit vero fugiat nulla nesciunt illo adipisci deserunt dolorem? Quia unde perspiciatis nisi rem modi qui.' !!}
						</p>
					</div>

				</div>




			</div>
		</div>
	</section>






<section class="text-gray-600 body-font">
  <div class="container px-5 py-1 mx-auto">
    <div class="xl:w-4/5 lg:w-3/4 w-full mx-auto text-center">
      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mb-8" viewBox="0 0 975.036 975.036">
        <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
      </svg>
      <p class="leading-relaxed text-lg">
	      {!! $about->descr ?? 'нет данных' !!}
	      </p>
      <span class="inline-block h-1 w-10 rounded bg-blue-900 mt-8 mb-1"></span>
      <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">
	      {{ $about->name ?? 'Виктор Багратион' }}
	      </h2>
      <p class="text-gray-500">
	      {{ $about->subtitle ?? 'Владелец автосервиса' }}
	      </p>
    </div>
  </div>
</section>








	<div class="text-center mt-16">
		<h2 class="text-2xl font-semibold text-gray-700 mb-10">Форма обратной связи</h2>
	</div>

	<div class="px-10 md:px-0 ">
		@include('pages.includes.feedback_form')
	</div>




	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="text-center">
		<h2 class="text-2xl font-semibold text-gray-700 mb-1">Сертификаты / Дипломы</h2>
	</div>




	<section class="text-gray-600 body-font">
		<div class="container px-5 py-8 mx-auto">
			<div class="flex flex-wrap -m-4">
				
				@forelse($certificates as $certificate)
				<div class="lg:w-1/4 md:w-1/2 p-4 w-full">
					<a class="block relative h-full rounded overflow-hidden">
						<img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset($certificate->pic ?? 'uploads/not_image.jpg') }}">
					</a>
				</div>

				@empty
					<p>Нет данных</p>
				@endforelse
				
			</div>
		</div>
	</section>






@endsection