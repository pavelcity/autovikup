<section class="text-gray-600 body-font">
  <div class="container px-5 py-5 mx-auto">






		<div class="flex flex-col">
      <div class="h-1 bg-gray-200 rounded overflow-hidden">
        <div class="w-24 h-full bg-blue-700"></div>
      </div>
      <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-2">
        <a href="{{ route('tovary.home') }}" class="sm:w-2/5 text-gray-900 hover:text-blue-700 transition font-medium title-font text-2xl sm:text-3xl mb-2 sm:mb-0">
	        {{ $profile->tovary_title ?? 'Товары' }}
	        </a>
				<span class="font-bold text-blue-700">{!! $profile->tovary_subtitle ?? 'нет данных' !!}</span>
        {{-- <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0"></p> --}}
      </div>
    </div>


    <div class="flex flex-wrap -m-4">



			@foreach ($tovars as $tovar)
					
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full mb-5">
        <a loading="lazy" href="{{ route('tovary.detail', $tovar->slug) }}" class="block relative h-56 overflow-hidden">
          <img alt="{{ $tovar->title ?? 'нет данных' }}" class="object-cover object-center w-full h-full block" src="{{ asset($tovar->pic ?? 'uploads/not_image.jpg') }}">
        </a>
        <div class="mt-4 mb-3">
          <h2 class="text-gray-900 title-font text-lg font-medium">{{ $tovar->title ?? 'нет данных' }}</h2>
          <p class="mt-1 text-blue-900 font-medium">{{ $tovar->price ?? 'нет данных' }} ₽</p>
        </div>

				<a href="{{ route('tovary.detail', $tovar->slug) }}" class="bg-blue-900 hover:bg-blue-600 transition py-2 px-5 text-white text-xs inline-flex uppercase items-center rounded-md mb-2">Узнать больше
					<svg style="width:20px;height:20px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
				</svg>
				</a>


				@if(false)
				<a href="#" class="bg-gray-500 hover:bg-gray-600 transition py-2 px-5 text-white text-xs inline-flex uppercase items-center rounded-md">Заказать
					<svg style="width:20px;height:20px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
				</svg>
				</a>
				@endif


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