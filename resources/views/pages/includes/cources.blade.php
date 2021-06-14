<section class="text-gray-600 body-font">
  <div class="container px-5 py-5 mx-auto">
 
    <div class="flex flex-col">
      <div class="h-0.5 bg-main-light rounded overflow-hidden"></div>
      <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-2">
        <a href="{{ route('cources.home') }}" class="sm:w-2/5 text-main hover:text-main-middle transition font-medium title-font text-2xl sm:text-3xl mb-2 sm:mb-0">{{ $profile->cources_title ?? 'Курсы' }}</a>
				<span class="font-bold text-main">{!! $profile->cources_subtitle ?? 'нет данных' !!}</span>
        {{-- <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0"></p> --}}
      </div>
    </div>
 
    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
 
 
			@foreach ($cources as $cource)
					
			
      <div class="p-4 md:w-1/3 sm:mb-3">
        <div class="h-64 overflow-hidden hover:shadow-xl transition">
          <a href="{{ route('cources.detail', $cource->slug) }}" class="">
						<img loading="lazy" alt="{{ $cource->title }}" class="object-cover object-center h-full w-full" src="{{ asset($cource->pic ?? 'uploads/not_image.jpg')  }}" />
					</a>
        </div>
        <h2 class="text-xl font-medium title-font text-main mt-5">{{ $cource->title ?? 'no-data' }} </h2>
  
        <p class="text-base leading-relaxed mt-2">{!! Str::limit($cource->short, 70) ?? 'no-data' !!}</p>

				<p class="my-5 text-xl sm:text-xl font-semibold text-main-middle">{{ $cource->price ?? 'цена не установлена' }}</p>
        
				<a href="{{ route('cources.detail', $cource->slug) }}" class="text-white bg-main inline-flex items-center mt-3 py-3 px-5 uppercase text-xs rounded-md hover:bg-main-middle transition">Узнать больше
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>


      </div>
			@endforeach

    </div>
  </div>
</section>