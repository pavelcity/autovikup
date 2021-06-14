@extends('layouts.site')




@push('metaTitleDescrKeys')
	<title>{{ isset($blog->metatitle)  ? $blog->metatitle : $blog->title  }}</title>
	<meta name="description" content="{{ isset($blog->metadescr) ? $blog->metadescr : $blog->short }}">
	@if(isset($blog->metakeys))
	<meta name="keywords" content="{{ $blog->metakeys  }}">
	@endif
@endpush








@section('content')


<div class="w-auto md:w-4/5 lg:w-1/2 mt-10 mx-auto">
	<nav class="text-black font-bold my-8 mx-4 sm:mx-0" aria-label="Breadcrumb">
		<ol class="list-none p-0 inline-flex">
			<li class="flex items-center">
				<a class="font-medium hover:text-purple-600 transition" href="{{ route('home.page') }}">Главная</a>
				<svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
			</li>
			<li class="flex items-center">
				<a class="text-blue-700 font-medium hover:text-gray-600 transition" href="{{ route('blog.home') }}">
					{{ $profile->blog_title ?? 'Блог' }}
					</a>
				<svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
			</li>
			<li>
				<a class="text-gray-400 font-light" aria-current="page">{{ $blog->title ?? 'no-data' }}</a>
			</li>
		</ol>
	</nav>
</div>





<div class="w-auto md:w-4/5 lg:w-1/2 mt-10 mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">


	<img class="object-cover w-full h-56 md:h-80 lg:h-96" src="{{ asset($blog->pic ?? 'uploads/not_image.jpg') }}" alt="{{ $blog->title }}">

	<div class="p-6">
			<div>
					<h1 class="block mt-2 text-2xl sm:text-3xl font-semibold text-gray-800 mb-5">{{ $blog->title }}</h1>
					<p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{!! $blog->descr !!}</p>
			</div>

			<a href="{{ route('blog.home') }}" class="bg-gray-500 py-2 transition uppercase text-white rounded-md px-7 hover:bg-gray-600 mt-10 text-sm inline-block">Назад</a>

	</div>
</div>





@endsection