
@if(false)
<section class="text-gray-600 body-font">
  <div class="container px-5 py-5 mx-auto flex flex-col">

		<div class="flex flex-col">
      <div class="h-0.5 bg-main-light rounded overflow-hidden"></div>
      <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-2">
        <a href="{{ route('about.home') }}" class="sm:w-2/5 text-gray-900 font-medium hover:text-blue-700 transition title-font text-2xl sm:text-3xl mb-2 sm:mb-0">{{ $profile->about_title ?? 'Обо мне' }}</a>
				<span class="font-bold text-main">{!! $profile->about_subtitle ?? 'нет данных' !!}</span>
      </div>
    </div>
 
		
		
    <div class="lg:w-4/6 mx-auto">
      

 

      <div class="flex flex-col sm:flex-row mt-0">
        <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">

					<img loading="lazy" class="w-60 h-60 inline-flex intems-center justify-center  object-cover object-center"  src="{{ asset($about->pic ?? 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1350&q=80') }}" alt="" />

          <div class="flex flex-col items-center text-center justify-center">
            <h2 class="font-medium title-font mt-4 text-main text-lg">
	            {{ $about->name ?? 'Имя' }}
	            </h2>
            <div class="w-12 h-1 bg-main rounded mt-2 mb-4"></div>
          </div>
        </div>
        <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
          <p class="leading-relaxed text-lg mb-4 ">
	          {!! $about->shortonhome ?? 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque sit veritatis aspernatur eveniet vero veniam facilis inventore repudiandae, laborum quos nesciunt in ratione ipsa voluptatibus illum nostrum qui esse doloremque.' !!}
	          </p>
        </div>
      </div>
    </div>
  </div>
</section>
@endif







<section class="text-gray-600 body-font">
	<div class="h-0.5 bg-main-light rounded overflow-hidden container mx-auto"></div>

	<div class="flex flex-wrap sm:flex-row flex-col py-6 mb-2 container mx-auto px-5 py-5">
		<a href="{{ route('about.home') }}" class="sm:w-2/5 text-gray-900 font-medium hover:text-blue-700 transition title-font text-2xl sm:text-3xl mb-2 sm:mb-0">{{ $profile->about_title ?? 'Обо мне' }}</a>
		<span class="font-bold text-main">{!! $profile->about_subtitle ?? 'нет данных' !!}</span>
	</div>

  <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
		
    <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="{{ $about->title ?? '' }}" src="{{ asset($about->pic ?? 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1350&q=80') }}">
    <div class="text-center lg:w-2/3 w-full">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">{{ $about->name ?? 'Имя' }}</h1>
      <div class="mb-8 leading-relaxed">{!! $about->shortonhome ?? 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque sit veritatis aspernatur eveniet vero veniam facilis inventore repudiandae, laborum quos nesciunt in ratione ipsa voluptatibus illum nostrum qui esse doloremque.' !!}</div>

    </div>
  </div>
</section>