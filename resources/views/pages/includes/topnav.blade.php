<!-- This example requires Tailwind CSS v2.0+ -->

<nav class="bg-main fixed w-full z-40 top-0 left-0 {{ Request::is('/') ? 'bg-opacity-30' : 'bg-opacity-100' }}  topnav transition">
  <div class="max-w-full mx-auto px-2 sm:px-6 lg:px-8">

    <div class="relative flex items-center justify-between h-16">
      
			 
			<a href="#" class="humb block lg:hidden border-2 border-white ml-2 bg-white rounded">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  width="24" height="24" viewBox="0 0 24 24">
					<path fill="#000" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
			 </svg>
			</a>
			



      <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start   ">

			

        <div class="flex-shrink-0 flex items-center hidden lg:block">
					{{-- <a href="{{ route('home.page') }}"> <img class="block lg:hidden h-8 w-auto" src="{{ asset('img/logoaroma.svg') }}" alt=""></a> --}}
				

          <a href="{{ route('home.page') }}" class="text-white flex items-top justify-center mt-1">
<!-- 	          <img class="hidden lg:block h-8 w-auto" src="{{ asset('img/logo-tts.svg') }}" alt="Workflow"> -->
			Автовыкуп
	          </a>
        </div>
        



        <div class="hidden xl:block sm:ml-6 ">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="{{ route('home.page') }}" class="{{ Request::is('/') ? 'bg-white text-blue-900' : 'text-white' }}  px-3 py-2 hover:bg-gray-800 hover:text-white text-sm font-medium" aria-current="page">Главная</a>
            
            <a href="{{ route('cources.home') }}" class="{{ Request::is('cources*') ? 'bg-white text-blue-900' : 'text-white' }}  hover:bg-gray-800 hover:text-white px-3 py-2 text-sm font-medium">
	            {{ $profile->cources_title ?? 'Услуги' }}
	          </a>
	            
	            @if(false)
            <a href="{{ route('tovary.home') }}" class="{{ Request::is('tovary*') ? 'bg-white text-blue-900' : 'text-white'  }}  hover:bg-gray-800 hover:text-white px-3 py-2  text-sm font-medium">
	            {{ $profile->tovary_title ?? 'Товары' }}
	          </a>
	          @endif
           
						 
						<a href="{{ route('about.home') }}" class="{{ Request::is('about*') ? 'bg-white text-blue-900' : 'text-white'  }}  hover:bg-gray-800 hover:text-white px-3 py-2 text-sm font-medium">
							{{ $profile->about_title ?? 'О нас' }}
						</a>

            <a href="{{ route('contact.home') }}" class="{{ Request::is('contact*') ? 'bg-white text-blue-900' : 'text-white' }}  hover:bg-gray-800 hover:text-white px-3 py-2 text-sm font-medium">
	            {{ $profile->contacty_title ?? 'Контакты' }}
	          </a>

						<a href="{{ route('blog.home') }}" class="{{ Request::is('blog*') ? 'bg-white text-blue-900' : 'text-white'  }}  hover:bg-gray-800 hover:text-white px-3 py-2 text-sm font-medium">
							{{ $profile->blog_title ?? 'Блог' }}
						</a>


          </div>
        </div>

      </div>






      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <div class="flex space-x-4">

					@if(Auth::user())
						<a href="{{ route('dashboard.home') }}" class="hidden 2xl:block bg-yellow-300 text-gray-600 hover:bg-white transition text-sm py-2 px-5">Админка</a>
					@endif

					<a href="#" class="bg-white text-gray-900 transition hover:bg-gray-700 hover:text-white px-3 py-2 text-sm font-medium recallMeBt">обратный звонок</a>



					<a href="tel:{{ $profile->phone ?? '8 800 00-00-00' }}" class="bg-gray-900 text-white px-3 py-2 hover:bg-gray-700 hover:text-white text-sm font-medium">{{ $profile->phone ?? '8 800 00-00-00' }}</a>
				</div>

        


      </div>
    </div>
  </div>

</nav>







{{-- left mobile menu --}}
<div class="overlayLeft"></div>

<div class="leftNav relative">
	<a href="#" class="closeLeftBt absolute top-10 -right-12 bg-blue-900 text-white text-xl py-1 px-2 rounded">
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  width="24" height="24" viewBox="0 0 24 24">
			<path fill="#fff" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
	 </svg>
	</a>



	<div class="p-5 bg-blue-900 h-full text-white">

		<a href="{{ route('home.page') }}" class="logoLeft mb-10">
			@if(false)
			<img src="{{ asset('img/logoaroma.svg') }}" alt="">
			@endif
			
		</a>

		<ul class="list-inside bg-rose-200 ...">
			<li class="mb-4"><a href="{{ route('home.page') }}" class="{{ Request::is('/') ? 'bg-blue-500 text-white' : 'text-blue-500' }} border border-white bg-white py-1 px-4 block rounded">Главная</a></li>

			<li class="mb-4"><a href="{{ route('cources.home') }}" class="{{ Request::is('cources') ? 'bg-blue-500 text-white' : 'text-blue-500' }} border border-white bg-white py-1 px-4 block rounded">
				{{ $profile->cources_title ?? 'Курсы' }}
			</a></li>

			@if(false)
			<li class="mb-4"><a href="{{ route('tovary.home') }}" class="{{ Request::is('tovary') ? 'bg-blue-500 text-white' : 'text-blue-500' }} border border-white bg-white py-1 px-4 block rounded">
				{{ $profile->tovary_title ?? 'Товары' }}
			</a></li>
			@endif

			<li class="mb-4"><a href="{{ route('about.home') }}" class="{{ Request::is('about') ? 'bg-blue-500 text-white' : 'text-blue-500' }} border border-white bg-white py-1 px-4 block rounded">
				{{ $profile->about_title ?? 'Обо мне' }}
			</a></li>

			<li class="mb-4"><a href="{{ route('contact.home') }}" class="{{ Request::is('contact') ? 'bg-blue-500 text-white' : 'text-blue-500' }} border border-white bg-white py-1 px-4 block rounded">
				{{ $profile->contacty_title ?? 'Контакты' }}
			</a></li>


			<li class="mb-4"><a href="{{ route('blog.home') }}" class="{{ Request::is('blog') ? 'bg-blue-500 text-white' : 'text-blue-500' }} border border-white bg-white  py-1 px-4 block rounded">
				{{ $profile->blog_title ?? 'Блог' }}
			</a></li>


			<li class="mb-4 mt-4 inline-block"><a href="tel:{{ $profile->phone ?? '8 800 00-00-00' }}" class=" text-white py-1 px-4 block font-bold">{{ $profile->phone ?? '8 800 00-00-00' }}</a></li>
		</ul>
	</div>


</div>