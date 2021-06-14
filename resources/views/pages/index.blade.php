@extends('layouts.site')



@push('metaTitleDescrKeys')
	<title>{{ $meta->home_title ?? '' }}</title>
	<meta name="description" content="{{ $meta->home_description ?? '' }}">
	<meta name="keywords" content="{{ $meta->home_keywords ?? '' }}">
	<link rel="canonical" href="{{ $meta->author ?? '' }}" />
	<meta name="author" content="{{ $meta->canonical ?? '' }}">
@endpush
 



 
  





@section('content')







@if(true)
{{-- utp --}}
@include('pages.includes.utp')
{{-- utp end --}}
@endif













 



{{-- about me --}}
@include('pages.includes.about')
{{-- about me end --}}




{{-- курсы --}}
@include('pages.includes.cources')
{{-- курсы end --}}



  

{{-- считалка --}}
<section class="text-gray-600 body-font">
  <div class="container px-5 py-5 mx-auto">

		<div class="flex flex-col">
			<div class="h-0.5 bg-main-light rounded overflow-hidden"></div>
      <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-2">
        <h1 class="sm:w-2/5 text-main font-medium title-font text-2xl sm:text-3xl mb-2 sm:mb-0">
	        {{ $profile->cifres_title ?? 'Интересные цифры' }}
	        </h1>
				<span class="font-bold text-main">{!! $profile->cifres_subtitle ?? 'нет данных' !!}</span>
        {{-- <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0"></p> --}}
      </div>
    </div>

    <div class="flex flex-wrap -m-4 text-center">

      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 ">
          
				 
<svg class="w-12 h-12 mb-3 inline-block" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  width="24" height="24" viewBox="0 0 24 24">
   <path fill="#86ABBE" d="M6.5 5C5.84 5 5.28 5.42 5.08 6L3 12V20A1 1 0 0 0 4 21H5A1 1 0 0 0 6 20V19H11.3A7 7 0 0 1 11 17A7 7 0 0 1 14.41 11H5L6.5 6.5H17.5L18.68 10.03A7 7 0 0 1 20.47 10.46L18.92 6C18.72 5.42 18.16 5 17.5 5H6.5M17 12C16.87 12 16.76 12.09 16.74 12.21L16.55 13.53C16.25 13.66 15.96 13.82 15.7 14L14.46 13.5C14.35 13.5 14.22 13.5 14.15 13.63L13.15 15.36C13.09 15.47 13.11 15.6 13.21 15.68L14.27 16.5C14.25 16.67 14.24 16.83 14.24 17C14.24 17.17 14.25 17.33 14.27 17.5L13.21 18.32C13.12 18.4 13.09 18.53 13.15 18.64L14.15 20.37C14.21 20.5 14.34 20.5 14.46 20.5L15.7 20C15.96 20.18 16.24 20.35 16.55 20.47L16.74 21.79C16.76 21.91 16.86 22 17 22H19C19.11 22 19.22 21.91 19.24 21.79L19.43 20.47C19.73 20.34 20 20.18 20.27 20L21.5 20.5C21.63 20.5 21.76 20.5 21.83 20.37L22.83 18.64C22.89 18.53 22.86 18.4 22.77 18.32L21.7 17.5C21.72 17.33 21.74 17.17 21.74 17C21.74 16.83 21.73 16.67 21.7 16.5L22.76 15.68C22.85 15.6 22.88 15.47 22.82 15.36L21.82 13.63C21.76 13.5 21.63 13.5 21.5 13.5L20.27 14C20 13.82 19.73 13.65 19.42 13.53L19.23 12.21C19.22 12.09 19.11 12 19 12H17M6.5 13A1.5 1.5 0 0 1 8 14.5A1.5 1.5 0 0 1 6.5 16A1.5 1.5 0 0 1 5 14.5A1.5 1.5 0 0 1 6.5 13M18 15.5C18.83 15.5 19.5 16.17 19.5 17C19.5 17.83 18.83 18.5 18 18.5C17.16 18.5 16.5 17.83 16.5 17C16.5 16.17 17.17 15.5 18 15.5Z" />
</svg>				 

          <h2 class="title-font font-medium text-3xl text-gray-900">
						{{ $profile->one_cifry_title ?? '2.7K' }}
					</h2>
          <p class="leading-relaxed">
						{{ $profile->one_cifry_text ?? 'Курсов' }}
					</p>
        </div>
      </div>


      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 ">

<svg class="w-12 h-12 mb-3 inline-block" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  width="24" height="24" viewBox="0 0 24 24">
   <path fill="#86ABBE" d="M19 17V19H7V17S7 13 13 13 19 17 19 17M16 8A3 3 0 1 0 13 11A3 3 0 0 0 16 8M19.2 13.06A5.6 5.6 0 0 1 21 17V19H24V17S24 13.55 19.2 13.06M18 5A2.91 2.91 0 0 0 17.11 5.14A5 5 0 0 1 17.11 10.86A2.91 2.91 0 0 0 18 11A3 3 0 0 0 18 5M8 10H5V7H3V10H0V12H3V15H5V12H8Z" />
</svg>					
          <h2 class="title-font font-medium text-3xl text-gray-900">
						{{ $profile->two_cifry_title ?? '1.3K' }}
					</h2>
          <p class="leading-relaxed">
						{{ $profile->two_cifry_text ?? 'Учеников' }}
					</p>
        </div>
      </div>


      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 ">
				 
<svg class="w-12 h-12 mb-3 inline-block" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  width="24" height="24" viewBox="0 0 24 24">
   <path fill="#86ABBE" d="M19,14H16V16H19V14M22,21H3V11L11,3H21A1,1 0 0,1 22,4V21M11.83,5L5.83,11H20V5H11.83Z" />
</svg>				 
          <h2 class="title-font font-medium text-3xl text-gray-900">
						{{ $profile->tri_cifry_title ?? '74' }}
						
					</h2>
          <p class="leading-relaxed">
						{{ $profile->tri_cifry_text ?? 'Товаров' }}
					</p>
        </div>
      </div>


      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 ">
				 
<svg class="w-12 h-12 mb-3 inline-block" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  width="24" height="24" viewBox="0 0 24 24">
   <path fill="#86ABBE" d="M23,10C23,8.89 22.1,8 21,8H14.68L15.64,3.43C15.66,3.33 15.67,3.22 15.67,3.11C15.67,2.7 15.5,2.32 15.23,2.05L14.17,1L7.59,7.58C7.22,7.95 7,8.45 7,9V19A2,2 0 0,0 9,21H18C18.83,21 19.54,20.5 19.84,19.78L22.86,12.73C22.95,12.5 23,12.26 23,12V10M1,21H5V9H1V21Z" />
</svg>
				 
          <h2 class="title-font font-medium text-3xl text-gray-900">
						{{ $profile->four_cifry_title ?? '46' }}
						
					</h2>
          <p class="leading-relaxed">
						{{ $profile->four_cifry_text ?? 'Гарантия' }}
					</p>
        </div>
      </div>

    </div>
  </div>
</section>
{{-- считалка end --}}








{{-- blog - news --}}
@include('pages.includes.blognews')
{{-- blog - news END --}}




@if(false)
{{-- товары --}}
@include('pages.includes.tovari')
{{-- товары end --}}
@endif




{{-- Портфолио --}}
@include('pages.includes.portfolio')
{{-- Портфолио end --}}




{{-- отзывы --}}
{{-- @include('pages.includes.otzivi') --}}
{{-- отзывы END --}}



@if(true)
<section class="text-gray-600 body-font">
  <div class="container px-5 py-5 mx-auto">

		<div class="flex flex-col mb-1">
			<div class="h-0.5 bg-main-light rounded overflow-hidden"></div>
      <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-2">
        <h1 class="sm:w-2/5 text-main font-medium title-font text-2xl sm:text-3xl mb-2 sm:mb-0">
	       {{ $profile->otzivy_title ?? 'Отзывы' }}
	        </h1>
        <span class="font-bold text-main">{!! $profile->otzivy_subtitle ?? 'нет данных' !!}</span>
      </div>
    </div>




			<div class="container bg-white mx-auto py-1">
				<div class="swiper-container mySwiper">
					<div class="swiper-wrapper">



						@foreach ($otzivs as $otziv)
						<div class="swiper-slide">
							<div class="h-full text-center px-10">
										<img loading="lazy" alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100 swiper-lazy" src="{{ asset($otziv->pic ?? 'uploads/not_image.jpg') }}" />
										<p class="leading-relaxed">
											{!! $otziv->text !!}
										</p>
										<span class="inline-block h-1 w-10 rounded bg-main mt-6 mb-4"></span>
										<h2 class="text-main font-medium title-font tracking-wider text-lg">{{ $otziv->title }}</h2>
										<p class="text-gray-500">{{ $otziv->dolznost }}</p>
									</div>
						</div>
						@endforeach

				
	
					
					</div>

					<br>
					<br>
					<br>
					<br>
					
					<div class="swiper-pagination"></div>
					<div class="swiper-button-next" style="right:0"></div>
					<div class="swiper-button-prev" style="left:0;"></div>
				</div>
			</div>


	</div>
</section>
@endif







<br>
<br>






{{-- contacts --}}
@include('pages.includes.contact')
{{-- contacts end --}}



@if(isset($seo->homepage_title))
<div class="container mx-auto border-t border-gray-200 mt-40 px-5">
	<h1 class="mt-10 mb-10 text-3xl font-semibold text-gray-500">
		{{ $seo->homepage_title ?? '' }}
	</h1>
	<p class="text-lg ">
		{!! $seo->homepage_txt ?? '' !!}
		</p>
</div>
@endif












@endsection