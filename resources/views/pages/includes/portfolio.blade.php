<section class="text-gray-600 body-font">
  <div class="container px-5 py-4 mx-auto flex flex-wrap">
    
    
    
    <div class="flex flex-col w-full">
			<div class="h-0.5 bg-main-light rounded overflow-hidden"></div>
      <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-2">
        <h1 class="sm:w-2/5 text-main font-medium title-font text-2xl sm:text-3xl mb-2 sm:mb-0">
	        {{ $profile->portfolio_title ?? 'Портфолио' }}
	        </h1>
				<span class="font-bold text-main">{!! $profile->portfolio_subtitle ?? 'нет данных' !!}</span>
      </div>
    </div>
    
    
     
    
    <div class="flex flex-wrap md:-m-2 -m-1">
      <div class="flex flex-wrap w-1/2">


				@foreach ($folios->take(2) as $folio)
				<div class="md:p-2 p-1 w-1/2">
          <img loading="lazy" alt="gallery" class="w-full object-cover h-full object-center block" src="{{ asset($folio->pic ?? 'https://images.unsplash.com/photo-1572566202186-611ceb4042f0?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80') }}">
        </div>
				@endforeach





				@foreach ($folios->skip(2)->take(1) as $folio)
        <div class="md:p-2 p-1 w-full">
          <img loading="lazy" alt="gallery" class="w-full h-full object-cover object-center block" src="{{ $folio->pic ?? 'https://images.unsplash.com/photo-1557861537-3420e39efdee?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=744&q=80' }} ">
        </div>
				@endforeach

      </div>



      <div class="flex flex-wrap w-1/2">
        
				@foreach ($folios->skip(3)->take(1) as $folio)
        <div class="md:p-2 p-1 w-full">
          <img loading="lazy" alt="gallery" class="w-full h-full object-cover object-center block" src="{{ $folio->pic ?? 'https://images.unsplash.com/photo-1557861537-3420e39efdee?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=744&q=80' }} ">
        </div>
				@endforeach


        @foreach ($folios->skip(4)->take(2) as $folio)
				<div class="md:p-2 p-1 w-1/2">
          <img loading="lazy" alt="gallery" class="w-full object-cover h-full object-center block" src="{{ asset($folio->pic ?? 'https://images.unsplash.com/photo-1572566202186-611ceb4042f0?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80') }}">
        </div>
				@endforeach


      </div>
    </div>
  </div>
</section>