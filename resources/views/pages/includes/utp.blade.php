

@if(false)

<section class="relative w-full mb-10 hidden sm:block">
	<img alt="{{ $profile->title ?? 'нет данных' }}" class="w-full" src="{{ asset($profile->pic_utp ?? 'uploads/not_image.jpg')  }}">

	<div class="absolute inset-x-1/3 bottom-5">
		<h1 class="text-2xl sm:text-4xl font-bold text-main bg-white opacity-75  py-5 sm:px-10  px-10 text-center">{{ $profile->title ?? 'нет данных' }}</h1>
		<h2 class="bg-main-middle opacity-75 text-lg sm:text-xl py-5 sm:px-10 px-10 mt-1 text-gray-900 text-center">{!! $profile->text_utp ?? 'нет данных' !!}</h2>
	</div>

</section>

@endif





<section class="relative w-full -mt-16 mb-10 hidden sm:block h-screen utp">
	<img alt="{{ $profile->title ?? 'нет данных' }}" class="w-full h-screen object-cover" src="{{ asset($profile->pic_utp ?? 'uploads/not_image.jpg')  }}">

	<div class="absolute lg:inset-x-1/3 sm:l-1/2 top-1/3 bg-main opacity-75 text-center py-5 px-10 w-auto inline-block">
		<h1 class="text-2xl sm:text-6xl font-bold text-white ">{{ $profile->title ?? 'нет данных' }}</h1>
		<h2 class="text-lg sm:text-2xl sm:px-10 px-10 mt-1 text-gray-100 border-t-2 border-gray-200 mt-5 pt-3">{!! $profile->text_utp ?? 'нет данных' !!}</h2>
	</div>

</section>






<section class="mb-10 block sm:hidden">
	<img alt="{{ $profile->title ?? 'нет данных' }}" class="w-full" src="{{ asset($profile->pic_utp ?? 'uploads/not_image.jpg')  }}">
	<h1 class="text-2xl sm:text-4xl font-bold text-main bg-white opacity-75  py-2 sm:px-20 px-10 text-center">{{ $profile->title ?? 'нет данных' }}</h1>
		<h2 class="bg-blue-800 opacity-75 text-lg sm:text-xl py-2 sm:px-20 px-10 mt-1 text-white text-center">{!! $profile->text_utp ?? 'нет данных' !!}</h2>
</section>



