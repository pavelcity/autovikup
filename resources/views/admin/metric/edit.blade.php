@extends('layouts.admin')
@section('title', 'Метрика | Редактировать')

 

@section('content')

{{-- breadcrumb --}}
<div class="row">
	<div class="col-12">
		<div class="card radius-15">
			<div class="card-body">
				<div class="page-breadcrumb d-none d-md-flex align-items-center mb-0">
					<div class="breadcrumb-title pr-3">Редактировать </div>
					<div class="pl-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class='bx bx-home-alt'></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard.home') }}">Главная</a></li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard.metric.home') }}">Метрика</a></li>
								<li class="breadcrumb-item active" aria-current="page">Редактировать</li>
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
	<div class="col-12">
		<div style="display: flex; justify-content:space-between; align-items:center;">
			<h3>Редактировать</h3>
			<a href="{{ route('dashboard.metric.home') }}" class="btn btn-outline-info m-1 px-5 radius-30">Назад</a>
		</div>
	</div>
</div>
<br>






<div class="card radius-15">
	<div class="card-body">
	

		<form action="{{ route('dashboard.metric.update', $metric->id) }}" method="post" autocomplete="off" enctype="multipart/form-data">
			@csrf


			<div class="mb-3">
				<label for="googleanalitics">Место для вставки html-кода  &nbsp; | &nbsp; Google Аналитика</label>
				@error('googleanalitics')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="googleanalitics" name="googleanalitics" class="form-control" rows="7" cols="3">{{ $metric->googleanalitics }}</textarea>
			</div>


			<hr>
			<div class="mb-3">
				<label for="yandexmetrika">Место для вставки html-кода  &nbsp; | &nbsp; Яндекс.Метрика</label>
				@error('yandexmetrika')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="yandexmetrika" name="yandexmetrika" class="form-control" rows="7" cols="3">{{ $metric->yandexmetrika }}</textarea>
			</div>



			
			<hr>
			<div class="mb-3">
				<label for="yandexmap">Воспользуйтесь сервисом <a href="https://yandex.ru/map-constructor/" target="_blank">"Конструктор карт Яндекс"</a> для создания Вашей карты (перейдите по ссылке, скопируйте код и вставье в это поле)</label>
				@error('yandexmap')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="yandexmap" name="yandexmap" class="form-control" rows="5" cols="3">{{ $metric->yandexmap }}</textarea>
			</div>


			<hr>
			<div class="mb-3">
				<label for="fbpixel">Место для вставки html-кода  &nbsp; | &nbsp; Facebook pixel </label>
				@error('fbpixel')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="fbpixel" name="fbpixel" class="form-control" rows="7" cols="3">{{ $metric->fbpixel }}</textarea>
			</div>


			<hr>
			<div class="mb-3">
				<label for="vkpixel">Место для вставки html-кода &nbsp; | &nbsp; ВКонтакте pixel </label>
				@error('vkpixel')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="vkpixel" name="vkpixel" class="form-control" rows="7" cols="3">{{ $metric->vkpixel }}</textarea>
			</div>


		






		
			<br>
			<button class="btn btn-info m-1 px-5 radius-30" type="submit">Сохранить</button>
			<a href="{{ route('dashboard.metric.home') }}" class="btn btn-outline-info m-1 px-5 radius-30" type="submit">Назад</a>

		</form>



	</div>
</div>






@push('scripts')
	<script>
		$(document).ready(function(){
			$('#avatar').change(function(e){
				let reader = new FileReader();
				reader.onload = function(e) {
					$('#showPic').attr('src', e.target.result);
				}
				reader.readAsDataURL(e.target.files['0']);
			});
		});
	</script>	

	<script>
		$(document).ready(function(){
			$('#avatar2').change(function(e){
				let reader = new FileReader();
				reader.onload = function(e) {
					$('#showAvatar').attr('src', e.target.result);
				}
				reader.readAsDataURL(e.target.files['0']);
			});
		});
	</script>	
@endpush








@push('scripts')
	<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>


	<script>
		ClassicEditor
				.create( document.querySelector('#home_description2') )
				.catch( error => {
						console.error( error );
				} );
	</script>



@endpush




@endsection