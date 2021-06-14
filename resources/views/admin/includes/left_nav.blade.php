<!--sidebar-wrapper-->
<div class="sidebar-wrapper" data-simplebar="true">
	<div class="sidebar-header">
		<div class="">
			<img src="{{ asset('adminka/assets/images/logo-icon.png') }}" class="logo-icon-2" alt="" />
		</div>
		<div>
			<h4 class="logo-text">TTS</h4>
		</div>
		<a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
		</a>
	</div>
	<!--navigation-->


	<ul class="metismenu" id="menu">

	
	 
		<li class="menu-label">Админ-панель</li>
	
		<li class="{{ Request::is('dashboard') ? 'mm-active' : '' }}">
			<a href="{{ route('dashboard.home') }}">
				<div class="parent-icon icon-color-5"><i class="bx bx-home-alt"></i>
				</div>
				<div class="menu-title">Админка</div>
			</a>
		</li>

		<li class="{{ Request::is('dashboard/profile*') ? 'mm-active' : '' }}">
			<a href="{{ route('dashboard.profile.home') }}">
				<div class="parent-icon text-info"><i class="bx bx-cog"></i>
				</div>
				<div class="menu-title">Главная</div>
			</a>
		</li>



		<li class="{{ Request::is('dashboard/cources*') ? 'mm-active' : '' }}">
			<a href="{{ route('dashboard.cources.home') }}">
				<div class="parent-icon icon-color-5"><i class="bx bx-spray-can"></i>
				</div>
				<div class="menu-title">Услуги</div>
			</a>
		</li>

		@if(false)
		<li class="{{ Request::is('dashboard/tovary*') ? 'mm-active' : '' }}">
			<a href="{{ route('dashboard.tovary.home') }}">
				<div class="parent-icon icon-color-5"><i class="bx bx-barcode"></i>
				</div>
				<div class="menu-title">Товары</div>
			</a>
		</li>
		@endif

		<li class="{{ Request::is('dashboard/blog*') ? 'mm-active' : '' }}">
			<a href="{{ route('dashboard.blog.home') }}">
				<div class="parent-icon icon-color-5"><i class="bx bx-highlight"></i>
				</div>
				<div class="menu-title">Блог</div>
			</a>
		</li>

		<li class="{{ Request::is('dashboard/otzivy*') ? 'mm-active' : '' }}">
			<a href="{{ route('dashboard.otzivy.home') }}">
				<div class="parent-icon icon-color-5"><i class="bx bx-walk"></i>
				</div>
				<div class="menu-title">Отзывы</div>
			</a>
		</li>

		



		


		<li class="{{ Request::is('dashboard/seo*') ? 'mm-active' : '' }}">
			<a href="{{ route('dashboard.seo.home') }}">
				<div class="parent-icon text-info"><i class="bx bx-wrench"></i>
				</div>
				<div class="menu-title">SeoТексты</div>
			</a>
		</li>


		<li class="{{ Request::is('dashboard/meta*') ? 'mm-active' : '' }}">
			<a href="{{ route('dashboard.meta.home') }}">
				<div class="parent-icon text-info"><i class="bx bx-badge"></i>
				</div>
				<div class="menu-title">Meta</div>
			</a>
		</li>



		<li class="{{ Request::is('dashboard/metric*') ? 'mm-active' : '' }}">
			<a href="{{ route('dashboard.metric.home') }}">
				<div class="parent-icon text-info"><i class="bx bx-code"></i>
				</div>
				<div class="menu-title">HTML код</div>
			</a>
		</li>





		<li class="{{ Request::is('dashboard/photogallery*') ? 'mm-active' : '' }}">
			<a href="{{ route('dashboard.photogallery.home') }}">
				<div class="parent-icon text-muted"><i class="bx bx-images"></i>
				</div>
				<div class="menu-title">Портфолио (фото)</div>
			</a>
		</li>



		<li class="{{ Request::is('dashboard/certificaty*') ? 'mm-active' : '' }}">
			<a href="{{ route('dashboard.certificaty.home') }}">
				<div class="parent-icon text-muted"><i class="bx bx-unite"></i>
				</div>
				<div class="menu-title">Документы</div>
			</a>
		</li>


		<li class="{{ Request::is('dashboard/about*') ? 'mm-active' : '' }}">
			<a href="{{ route('dashboard.about.home') }}">
				<div class="parent-icon text-muted"><i class="bx bx-disc"></i>
				</div>
				<div class="menu-title">О нас</div>
			</a>
		</li>


		<li class="{{ Request::is('dashboard/pravila*') ? 'mm-active' : '' }}">
			<a href="{{ route('dashboard.pravila.home') }}">
				<div class="parent-icon text-danger"><i class="bx bx-anchor"></i>
				</div>
				<div class="menu-title text-danger">Правила</div>
			</a>
		</li>








		
		


		

		<li class="menu-label">Сайт</li>
		<li>
			<a href="{{ route('home.page') }}">
				<div class="parent-icon text-secondary"><i class="bx bx-pointer"></i>
				</div>
				<div class="menu-title">Перейти на сайт</div>
			</a>
		</li>


		 

	</ul>
	<!--end navigation-->

	
	

</div>
<!--end sidebar-wrapper-->