<div>
    

	<div class="mb-10 border-l-4 border-purple-200 pl-10">
		{{ $kursy->links() }}
	</div>




	<div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">

		@foreach ($kursy as $kurs)
					
			
      <div class="p-4 md:w-1/3 sm:mb-3">
        <div class="rounded-lg h-96 overflow-hidden hover:shadow-xl transition">
          <a href="{{ route('cources.detail', $kurs->slug) }}" class="">
						<img loading="lazy" alt="{{ $kurs->title }}" class="object-cover object-top h-full w-full" src="{{ asset($kurs->pic ?? 'uploads/not_image.jpg')  }}" />
					</a>
        </div>
        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">{{ $kurs->title ?? 'no-data' }} </h2>
 
        <div class="text-base leading-relaxed mt-2 bg-gray-100 h-auto sm:h-14 sm:overflow-hidden">{!! Str::limit($kurs->short, 100) ?? 'no-data' !!}</div>

				<p class="my-5 text-xl sm:text-xl font-semibold text-blue-900">{{ $kurs->price ?? 'цена не установлена' }}</p>
        
				<a href="{{ route('cources.detail', $kurs->slug) }}" class="text-white bg-blue-900 inline-flex items-center mt-3 py-3 px-5 uppercase text-xs rounded-md hover:bg-blue-600 transition">Узнать больше
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>




				<a href="#"
				data-kurs="{{ $kurs->title ?? 'no-data' }}"
				data-price="{{ $kurs->price ?? 'цена не установлена' }}"
				class="cursyZapisatsaBt text-white bg-gray-500 inline-flex items-center mt-3 py-3 px-5 uppercase text-xs rounded-md hover:bg-blue-600 transition">Записаться
          <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
        </a>








      </div>
			@endforeach

			
		</div>


		<div class="mt-10 border-l-4 border-purple-200 pl-10">
			{{ $kursy->links() }}
		</div>

		


</div>

















