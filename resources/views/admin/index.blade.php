@extends('layouts.admin')
@section('title', 'Админ-панель')



@section('content')

		
			{{-- breadcrumb --}}
			<div class="row">
				<div class="col-12">
					<div class="card radius-15">
						<div class="card-body">
							<div class="page-breadcrumb d-none d-md-flex align-items-center mb-0">
								<div class="breadcrumb-title pr-3">Админка</div>
								<div class="pl-3">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb mb-0 p-0">
											<li class="breadcrumb-item">
												<a href="{{ route('dashboard.home') }}"><i class='bx bx-home-alt'></i></a>
											</li>
											<li class="breadcrumb-item active" aria-current="page">Админка</li>
										</ol>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			{{-- breadcrumb end --}}





					<div class="row">



						<div class="col-12 col-lg-4 col-md-6">
							<a href="{{ route('dashboard.profile.home') }}" class="card radius-15">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-info">Главная</h4>
											<p class="mb-0 text-info">данные сайта</p>
										</div>
									</div>
								</div>
							</a>
						</div>




						<div class="col-12 col-lg-4 col-md-6">
							<a href="{{ route('dashboard.cources.home') }}" class="card radius-15">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-primary">Услуги</h4>
											<p class="mb-0">добавить/изменить</p>
										</div>
									</div>
								</div>
							</a>
						</div>

						@if(false)
						<div class="col-12 col-lg-4 col-md-6">
							<a href="{{ route('dashboard.tovary.home') }}" class="card radius-15">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-primary">Товары</h4>
											<p class="mb-0">добавить/изменить</p>
										</div>
									</div>
								</div>
							</a>
						</div>
						@endif

						<div class="col-12 col-lg-4 col-md-6">
							<a href="{{ route('dashboard.blog.home') }}" class="card radius-15">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-primary">Блог</h4>
											<p class="mb-0">добавить/изменить</p>
										</div>
									</div>
								</div>
							</a>
						</div>

						<div class="col-12 col-lg-4 col-md-6">
							<a href="{{ route('dashboard.otzivy.home') }}" class="card radius-15">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-primary">Отзывы</h4>
											<p class="mb-0">добавить/изменить</p>
										</div>
									</div>
								</div>
							</a>
						</div>


						



						<div class="col-12 col-lg-4 col-md-6">
							<a href="{{ route('dashboard.seo.home') }}" class="card radius-15">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-info">SeoТексты</h4>
											<p class="mb-0 text-info">добавить/изменить</p>
										</div>
									</div>
								</div>
							</a>
						</div>


						<div class="col-12 col-lg-4 col-md-6">
							<a href="{{ route('dashboard.meta.home') }}" class="card radius-15">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-info">Meta</h4>
											<p class="mb-0 text-info">добавить/изменить</p>
										</div>
									</div>
								</div>
							</a>
						</div>


						<div class="col-12 col-lg-4 col-md-6">
							<a href="{{ route('dashboard.metric.home') }}" class="card radius-15">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-info">HTML код</h4>
											<p class="mb-0 text-info">метрики / карты / pixel</p>
										</div>
									</div>
								</div>
							</a>
						</div>



						<div class="col-12 col-lg-4 col-md-6">
							<a href="{{ route('dashboard.photogallery.home') }}" class="card radius-15">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-muted">Портфолио</h4>
											<p class="mb-0 text-muted">фото (6)</p>
										</div>
									</div>
								</div>
							</a>
						</div>


						<div class="col-12 col-lg-4 col-md-6">
							<a href="{{ route('dashboard.certificaty.home') }}" class="card radius-15">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-muted">Документы</h4>
											<p class="mb-0 text-muted">Сертификаты/Дипломы</p>
										</div>
									</div>
								</div>
							</a>
						</div>


						<div class="col-12 col-lg-4 col-md-6">
							<a href="{{ route('dashboard.about.home') }}" class="card radius-15">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-muted">О нас</h4>
											<p class="mb-0 text-muted">добавить / изменить</p>
										</div>
									</div>
								</div>
							</a>
						</div>

						<div class="col-12 col-lg-4 col-md-6">
							<a href="{{ route('dashboard.pravila.home') }}" class="card radius-15">
								<div class="card-body">
									<div class="media align-items-center">
										<div class="media-body">
											<h4 class="mb-0 font-weight-bold text-danger">Правила</h4>
											<p class="mb-0 text-danger">добавить / изменить</p>
										</div>
									</div>
								</div>
							</a>
						</div>
						








						

						

		
					</div>
			
		

	

	


@endsection