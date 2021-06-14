<footer class="text-gray-600 body-font mt-48">
  
	
	<div class="container px-5 py-4 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
    
    
		<div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
      
			<a href="{{ route('home.page') }}" class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">Beauty-салон</span> --}}
        Автовыкуп
<!-- 				<img src="{{ asset('img/logo-colors.svg') }}" alt=""> -->
      </a>
    </div>

 
    <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">

      <div class="lg:w-1/5 md:w-1/2 w-full px-4">
				<a href="{{ route('cources.home') }}" class="{{ Request::is('cources*') ? 'text-gray-900 border-b-2 border-gray-600' : 'text-blue-900' }} title-font font-medium  hover:text-gray-900 tracking-widest text-md mb-3">Услуги</a>
      </div>

	  @if(false)
      <div class="lg:w-1/5 md:w-1/2 w-full px-4">
				<a href="{{ route('tovary.home') }}" class="{{ Request::is('tovary*') ? 'text-gray-900 border-b-2 border-gray-600' : 'text-blue-900' }} title-font font-medium  hover:text-gray-900 tracking-widest text-md mb-3">Товары</a>
      </div>
      @endif

      <div class="lg:w-1/5 md:w-1/2 w-full px-4">
        <a href="{{ route('blog.home') }}" class="{{ Request::is('blog*') ? 'text-gray-900 border-b-2 border-gray-600' : 'text-blue-900' }} title-font font-medium  hover:text-gray-900 tracking-widest text-md mb-3">Блог</a>
      </div>

			<div class="lg:w-1/5 md:w-1/2 w-full px-4">
        <a href="{{ route('about.home') }}" class="{{ Request::is('about') ? 'text-gray-900 border-b-2 border-gray-600' : 'text-blue-900' }} title-font font-medium  hover:text-gray-900 tracking-widest text-md mb-3">О нас</a>
				<nav class="list-none mb-10">

					@if(Auth::check())
          <li>
            <a href="{{ route('dashboard.home') }}" class="text-gray-600 hover:text-gray-800 text-red-700 mt-10">Админка</a>
          </li>
					@endif

        </nav>
      </div>

      <div class="lg:w-1/5 md:w-1/2 w-full px-4">
				<a href="{{ route('contact.home') }}" class="t{{ Request::is('contact') ? 'text-gray-900 border-b-2 border-gray-600' : 'text-purple-900' }} title-font font-medium  hover:text-gray-900 tracking-widest text-md mb-3">Контакты</a>

        <nav class="list-none mb-10 mt-2">
          <li>
            <a href="tel:{{ $profile->phone ?? '8 800 00-00-00' }}" class="text-gray-600 hover:text-purple-800">{{ $profile->phone ?? '8 800 00-00-00' }}</a>
          </li>
          <li>
            <a href="mailto:{{ $profile->email ?? 'mail@me.to' }}" class="text-gray-600 hover:text-purple-800">{{ $profile->email ?? 'mail@me.to' }}</a>
          </li>
        </nav>
      </div> 
    </div>
  </div>






	<div class="container px-5 py-4 mb-10 mt-5 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col text-center">
     
      <div class="w-full px-4">
				<a href="{{ route('pravila.politics') }}" class="{{ Request::is('pravila/politics') ? 'border-b-2 border-blue-500' : '' }} title-font font-normal text-gray-500 hover:text-gray-900 tracking-widest text-md mb-3">Политика конфиденциальности</a>
      </div>

	  @if(false)
      <div class="lg:w-1/5 md:w-1/2 w-full px-4">
				<a href="{{ route('pravila.oplata') }}" class="{{ Request::is('pravila/oplata') ? 'border-b-2 border-blue-500' : '' }} title-font font-normal text-gray-500 hover:text-gray-900 tracking-widest text-md mb-3">Условия оплаты</a>
      </div>

      <div class="lg:w-1/5 md:w-1/2 w-full px-4">
        <a href="{{ route('pravila.dostavka') }}" class="{{ Request::is('pravila/dostavka') ? 'border-b-2 border-blue-500' : '' }} title-font font-normal text-gray-500 hover:text-gray-900 tracking-widest text-md mb-3">Условия доставки</a>
      </div>

			<div class="lg:w-1/5 md:w-1/2 w-full px-4">
        <a href="{{ route('pravila.vozvrat') }}" class="{{ Request::is('pravila/vozvrat') ? 'border-b-2 border-blue-500' : '' }} title-font font-normal text-gray-500 hover:text-gray-900 tracking-widest text-md mb-3">Условия возврата</a>
      </div>
      @endif

  </div>









  <div class="bg-gray-100">
    <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
      <p class="text-gray-500 text-sm text-center sm:text-left">© 2021 Автовыкуп</p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
      
				@if(isset($profile->facebook))
				<a href="{{ $profile->facebook ?? '' }}" target="_blank" class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a> 
				@endif


				@if(isset($profile->vk))
        <a href="{{ $profile->vk }}" target="_blank" class="ml-3 text-gray-500 ">
          <svg style="width:21px;height:21px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M15.07 2H8.93C3.33 2 2 3.33 2 8.93V15.07C2 20.67 3.33 22 8.93 22H15.07C20.67 22 22 20.67 22 15.07V8.93C22 3.33 20.67 2 15.07 2M18.15 16.27H16.69C16.14 16.27 15.97 15.82 15 14.83C14.12 14 13.74 13.88 13.53 13.88C13.24 13.88 13.15 13.96 13.15 14.38V15.69C13.15 16.04 13.04 16.26 12.11 16.26C10.57 16.26 8.86 15.32 7.66 13.59C5.85 11.05 5.36 9.13 5.36 8.75C5.36 8.54 5.43 8.34 5.85 8.34H7.32C7.69 8.34 7.83 8.5 7.97 8.9C8.69 11 9.89 12.8 10.38 12.8C10.57 12.8 10.65 12.71 10.65 12.25V10.1C10.6 9.12 10.07 9.03 10.07 8.68C10.07 8.5 10.21 8.34 10.44 8.34H12.73C13.04 8.34 13.15 8.5 13.15 8.88V11.77C13.15 12.08 13.28 12.19 13.38 12.19C13.56 12.19 13.72 12.08 14.05 11.74C15.1 10.57 15.85 8.76 15.85 8.76C15.95 8.55 16.11 8.35 16.5 8.35H17.93C18.37 8.35 18.47 8.58 18.37 8.89C18.19 9.74 16.41 12.25 16.43 12.25C16.27 12.5 16.21 12.61 16.43 12.9C16.58 13.11 17.09 13.55 17.43 13.94C18.05 14.65 18.53 15.24 18.66 15.65C18.77 16.06 18.57 16.27 18.15 16.27Z" />
				</svg>
        </a>
				@endif


				@if(isset($profile->instagram))
        <a href="{{ $profile->instagram }}" target="_blank" class="ml-3 text-gray-500 ">
					<svg style="width:22px; height:22px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z" />
				</svg>
        </a>
				@endif


				@if(isset($profile->youtube))
        <a href="{{ $profile->youtube ?? '' }}" target="_blank" class="ml-3 text-gray-500">
					<svg style="width:24px;height:24px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M10,15L15.19,12L10,9V15M21.56,7.17C21.69,7.64 21.78,8.27 21.84,9.07C21.91,9.87 21.94,10.56 21.94,11.16L22,12C22,14.19 21.84,15.8 21.56,16.83C21.31,17.73 20.73,18.31 19.83,18.56C19.36,18.69 18.5,18.78 17.18,18.84C15.88,18.91 14.69,18.94 13.59,18.94L12,19C7.81,19 5.2,18.84 4.17,18.56C3.27,18.31 2.69,17.73 2.44,16.83C2.31,16.36 2.22,15.73 2.16,14.93C2.09,14.13 2.06,13.44 2.06,12.84L2,12C2,9.81 2.16,8.2 2.44,7.17C2.69,6.27 3.27,5.69 4.17,5.44C4.64,5.31 5.5,5.22 6.82,5.16C8.12,5.09 9.31,5.06 10.41,5.06L12,5C16.19,5 18.8,5.16 19.83,5.44C20.73,5.69 21.31,6.27 21.56,7.17Z" />
				</svg>
        </a>
				@endif

      </span>
    </div>
  </div>
</footer>









<a href="https://vjvgroup.ru/" target="_blank" class="bg-white mx-auto flex py-10 items-center justify-center">
	<p class="w-auto text-vjvbrand hover:text-gray-800 transition inline-block mr-4 font-light">Разработано IT-компанией VJV Group</p>
	<img class="w-10 hover:translate-x-1 transform transition" src="{{ asset('img/logo-vjv.svg') }}" alt="">
</a>















{{-- modalRecallMe --}}
<div class="modalRecallMe">
	<div class="recallMeOkoshko mx-auto mt-10 px-10 pb-8 pt-20 bg-white w-full sm:w-4/6 relative rounded">

		<a href="#" class="closeModalBt bg-gray-600 hover:bg-gray-500 transition py-2 px-4 rounded absolute top-5 
		right-5 inline-block text-white text-sm">закрыть</a>

		<div class="recallIside">
			<h1 class="text-2xl sm:text-3xl text-blue-900 mb-10">Заказать обратный звонок </h1>
 
			<form id="recallMeForm" autocomplete="off">
				<input type="hidden" name="whatForm" value="автосервис | заказ обратного звонка">
				<input type="text" class="w-full mb-4 rounded" name="name" placeholder="Имя" required>
				<input type="text" class="w-full mb-4 rounded" id="phoneRcall" name="phone" placeholder="Телефон" required>

				<p class="text-sm">Нажимая кнопку ОТПРАВИТЬ я соглашаюсь с 
					<a class="text-gray-900 hover:text-blue-700 transition font-semibold border-b-2 border-gray-500" href="{{ route('pravila.politics') }}">политикой конфиденциальности</a>
				</p>

				<button class="go bg-blue-900 hover:bg-blue-700 mt-5 transition text-white px-5 py-2 rounded">Отправить</button>
			</form>

		</div>
	</div>
</div>







{{-- модалка заказать услугу --}}
<div class="zalazKursModal">
	<div class=" mx-auto mt-10 px-10 pb-8 pt-20 bg-white w-full sm:w-4/6 relative rounded">

		<a href="#" class="closeKursBt bg-gray-600 hover:bg-gray-500 transition py-2 px-4 rounded absolute top-5 
		right-5 inline-block text-white text-sm">закрыть</a>

		<div class="recallIside">
			<h1 class="text-2xl sm:text-3xl text-blue-900 mb-1">Записаться</h1>
			<h2 class="my-3 text-semibold text-2xl sm:text-4xl mb-0 nameOfKurse">название</h2>
			<p class="priseKurse text-base mb-7">цена</p>
 

			<form id="zakazatCourceForm" autocomplete="off">
				<input type="hidden" name="whatForm" value="автосервис | заказ курса">
				<input type="hidden" name="kurs" class="thisKurs" value="">

				<input type="text" class="w-full mb-4 rounded" name="name" placeholder="Имя" required>
				<input type="text" class="w-full mb-4 rounded" id="phoneKurs" name="phone" placeholder="Телефон" required>

				<p class="text-sm">Нажимая кнопку ОТПРАВИТЬ я соглашаюсь с 
					<a class="text-gray-900 hover:text-blue-900 transition font-semibold border-b-2 border-gray-500" href="{{ route('pravila.politics') }}">политикой конфиденциальности</a>
				</p>

				<button class="go bg-blue-900 hover:bg-blue-600 mt-5 transition text-white px-5 py-2 rounded">Отправить</button>
			</form>

		</div>
	</div>
</div>










{{-- модалка заказать товар --}}
<div class="zakazTovarModal">
	<div class=" mx-auto mt-10 px-10 pb-8 pt-20 bg-white w-full sm:w-4/6 relative rounded">

		<a href="#" class="closeTovarBt bg-gray-600 hover:bg-gray-500 transition py-2 px-4 rounded absolute top-5 
		right-5 inline-block text-white text-sm">закрыть</a>

		<div class="recallIside">
			<h1 class="text-2xl sm:text-3xl text-blue-900 mb-1">Заказать товар</h1>
			<h2 class="my-3 text-semibold text-2xl sm:text-4xl mb-0 nameOfTovar">название товара</h2>
			<p class="priseTovar text-base mb-7">цена</p>
 
 
			<form id="zakazatTovarForm" autocomplete="off">
				<input type="hidden" name="whatForm" value="автосервис | заказ товара">
				<input type="hidden" name="tovar" class="thisTovar" value="">

				<input type="text" class="w-full mb-4 rounded" name="name" placeholder="Имя" required>
				<input type="text" class="w-full mb-4 rounded" id="phoneTovar" name="phone" placeholder="Телефон" required>

				<p class="text-sm">Нажимая кнопку ОТПРАВИТЬ я соглашаюсь с 
					<a class="text-gray-900 hover:text-blue-700 transition font-semibold border-b-2 border-gray-500" href="{{ route('pravila.politics') }}">политикой конфиденциальности</a>
				</p>

				<button class="go bg-blue-900 hover:bg-blue-700 mt-5 transition text-white px-5 py-2 rounded">Отправить</button>
			</form>

		</div>
	</div>
</div>














@push('scripts')
	<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
	<script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
	<script>
		$("#phoneRcall").mask("8 (999) 999 99 99");
		$("#phoneKurs").mask("8 (999) 999 99 99");
		$("#phoneTovar").mask("8 (999) 999 99 99");
	</script>
@endpush



