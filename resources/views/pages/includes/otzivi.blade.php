	{{-- topNav --}}
	{{-- @include('pages.includes.topnav') --}}
	{{-- topNav end --}}



<section class="text-gray-600 body-font">
  <div class="container px-5 py-5 mx-auto">

		<div class="flex flex-col mb-9">
      <div class="h-1 bg-gray-200 rounded overflow-hidden">
        <div class="w-24 h-full bg-blue-700"></div>
      </div>
      <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-2">
        <h1 class="sm:w-2/5 text-main font-medium title-font text-2xl sm:text-3xl mb-2 sm:mb-0">
	        {{ $profile->otzivy_title ?? 'Отзывы' }}
	        </h1>

				<span class="font-bold text-main">{!! $profile->otzivy_subtitle ?? 'нет данных' !!}</span>
        {{-- <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0"></p> --}}
      </div>
    </div>




    <div class="flex flex-wrap -m-4">
      
			<div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
        <div class="h-full text-center">
          <img loading="lazy" alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://images.unsplash.com/photo-1509909756405-be0199881695?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" />
          <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
          <span class="inline-block h-1 w-10 rounded bg-main mt-6 mb-4"></span>
          <h2 class="text-main font-medium title-font tracking-wider text-lg">Юлия Николаевна</h2>
          <p class="text-gray-500">Senior Product Designer</p>
        </div>
      </div>

      <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
        <div class="h-full text-center">
          <img loading="lazy" alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://images.unsplash.com/photo-1602328790041-ee36d98e677c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1352&q=80" />
          <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
          <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
          <h2 class="text-gray-900 font-medium title-font tracking-wider text-lg">Ангелина</h2>
          <p class="text-gray-500">UI Develeoper</p>
        </div>
      </div>

      <div class="lg:w-1/3 lg:mb-0 p-4">
        <div class="h-full text-center">
          <img loading="lazy" alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://images.unsplash.com/photo-1540202404-d0c7fe46a087?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1490&q=80" />
          <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
          <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
          <h2 class="text-gray-900 font-medium title-font tracking-wider text-lg">Анна</h2>
          <p class="text-gray-500">CTO</p>
        </div>
      </div>

    </div>
  </div>
</section>