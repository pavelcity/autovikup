@extends('layouts.site')





@push('metaTitleDescrKeys')
  <title>{{ $meta->dostavka_title ?? '' }}</title>
  <meta name="description" content="{{ $meta->dostavka_description ?? '' }}">
  <meta name="keywords" content="{{ $meta->dostavka_keywords ?? '' }}">
  <link rel="canonical" href="{{ $meta->dostavka_canonical ?? '' }}" />
  <meta name="author" content="{{ $meta->dostavka_avtor ?? '' }}">
@endpush




 

@section('content')



	<section class="text-gray-600 body-font">
		<div class="container px-5 pt-24 mx-auto">
			<div class="flex flex-wrap w-full mb-20 flex-col items-center text-left">
				<h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">
					Доставка
					</h1>
				<p class="lg:w-10/12 w-full text-left leading-relaxed text-xl text-gray-500">
					{!! $pravila->dostavka ?? '' !!}

				</p>
			</div>
		</div>
	</section>

















@endsection