<section class="text-gray-600 body-font relative mt-1">


	<div class="container mx-auto px-5 flex flex-col mb-0">
		<div class="h-0.5 bg-main-light rounded overflow-hidden"></div>
		<div class="flex flex-wrap sm:flex-row flex-col py-6 mb-2">
			<a href="{{ route('contact.home') }}" class="tex-center text-main hover:text-main-middle transition font-medium title-font text-2xl sm:text-3xl mb-2 sm:mb-0 mx-auto">
				{{ $profile->contacty_title ?? 'Контакты' }}
				</a>

				@if(false)
			<span class="font-bold text-blue-700">{!! $profile->contacty_subtitle ?? 'нет данных'  !!}</span>
				@endif

		</div>
	</div>

 
 


  <div class="container px-5 py-1 mx-auto flex sm:flex-nowrap flex-wrap">




    <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-1 flex items-end justify-start relative">

			
			{!! isset($metric->yandexmap) ? $metric->yandexmap : '<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A6bc44d89436dc3a538a2ed1d89f75528d604e0b5fd39adb33016861b1ad13d73&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>' !!}
			
			{{-- @isset($metric->yandexmap)
			@endisset --}}



      {{-- <div class="w-full bg-white relative flex flex-wrap py-6 rounded shadow-md">
        <div class="lg:w-1/2 px-6">
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">Адрес</h2>
          <p class="mt-1">РФ г.Ростов-на-Дону, <br> ул. Туполева 16е, 3 этаж, оф. 3.1</p>
        </div>
        <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">Email</h2>
          <a href="mailto:{{ $profile->email ?? 'mail@me.to' }}" class="text-indigo-500 leading-relaxed">{{ $profile->email ?? 'mail@me.to' }}</a>
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">Телефон</h2>
          <a href="tel:{{ $profile->phone ?? '8 800 00-00-00' }}" class="leading-relaxed hover:text-gray-500 text-purple-500 transition">{{ $profile->phone ?? '8 800 00-00-00' }}</a>
        </div>
      </div> --}}

    </div>


    <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
      <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Форма обратной свзяти</h2>
      <p class="leading-relaxed mb-5 text-gray-600">Появились вопросы? Пишите или звоните нам</p>
      <div class="relative mb-4">
        <label for="name" class="leading-7 text-sm text-gray-600">Имя</label>
        <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="message" class="leading-7 text-sm text-gray-600">Сообщение</label>
        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
      </div>
      <button class="text-white bg-main border-0 py-2 px-6 focus:outline-none hover:bg-main-middle transition text-lg">Отправить</button>
      <p class="text-base text-gray-500 mt-3">Нажимая кнопку <span class="text-base uppercase text-main font-medium">отправить</span> я соглашаюсь <a href="{{ route('pravila.politics') }}" class="text-main border-b border-main hover:border-gray-300">с политикой конфиденциальности</a></p>
    </div>
  </div>
</section>