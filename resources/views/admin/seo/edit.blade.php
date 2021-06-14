@extends('layouts.admin')
@section('title', 'Sео текст | Редактировать')

 

@section('content')

{{-- breadcrumb --}}
<div class="row">
	<div class="col-12">
		<div class="card radius-15">
			<div class="card-body">
				<div class="page-breadcrumb d-none d-md-flex align-items-center mb-0">
					<div class="breadcrumb-title pr-3">Редактировать sео</div>
					<div class="pl-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class='bx bx-home-alt'></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard.home') }}">Главная</a></li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard.seo.home') }}">Sео</a></li>
								<li class="breadcrumb-item active" aria-current="page">Редактировать sео</li>
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
			<h3>Редактировать sео</h3>
			<a href="{{ route('dashboard.seo.home') }}" class="btn btn-outline-info m-1 px-5 radius-30">Назад</a>
		</div>
	</div>
</div>
<br>






<div class="card radius-15">
	<div class="card-body">
	

		<form action="{{ route('dashboard.seo.update', $seo->id) }}" method="post" autocomplete="off" enctype="multipart/form-data">
			@csrf

			<hr>
			<h4 class="text-primary">Для Главной страницы</h4>
			<br>

			<div class="mb-3">
				<label for="homepage_title">Заголовок сео | Главная страница</label>
				<input class="form-control @error('homepage_title') error_line @enderror" id="homepage_title" name="homepage_title" type="text" placeholder="" value="{{ $seo->homepage_title }}">
				@error('homepage_title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>




			<div class="mb-5">
				<label for="homepage_txt">Текст сео | Главная страница</label>
				@error('homepage_txt')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="homepage_txt" name="homepage_txt" class="form-control" rows="10" cols="3">{{ $seo->homepage_txt }}</textarea>
			</div>









			<hr>
			<h4 class="text-primary">Для страницы Курсы</h4>
			<br>

			<div class="mb-3">
				<label for="courcepage_title">Заголовок сео | Курсы страница</label>
				<input class="form-control @error('courcepage_title') error_line @enderror" id="courcepage_title" name="courcepage_title" type="text" placeholder="" value="{{ $seo->courcepage_title }}">
				@error('courcepage_title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-5">
				<label for="courcepage_txt">Текст сео | Курсы страница</label>
				@error('courcepage_txt')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="courcepage_txt" name="courcepage_txt" class="form-control" rows="10" cols="3">{{ $seo->courcepage_txt }}</textarea>
			</div>





@if(false)
			<hr>
			<h4 class="text-primary">Для страницы Товары</h4>
			<br>

			<div class="mb-3">
				<label for="tovarypage_title">Заголовок сео | Товары страница</label>
				<input class="form-control @error('tovarypage_title') error_line @enderror" id="tovarypage_title" name="tovarypage_title" type="text" placeholder="" value="{{ $seo->tovarypage_title }}">
				@error('tovarypage_title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-5">
				<label for="tovarypage_txt">Текст сео | Товары страница</label>
				@error('tovarypage_txt')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="tovarypage_txt" name="tovarypage_txt" class="form-control" rows="10" cols="3">{{ $seo->tovarypage_txt }}</textarea>
			</div>
@endif






			
			<hr>
			<h4 class="text-primary">Для страницы Блог</h4>
			<br>

			<div class="mb-3">
				<label for="blogpage_title">Заголовок сео | Блог страница</label>
				<input class="form-control @error('blogpage_title') error_line @enderror" id="blogpage_title" name="blogpage_title" type="text" placeholder="" value="{{ $seo->blogpage_title }}">
				@error('blogpage_title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-5">
				<label for="blogpage_txt">Текст сео | Блог страница</label>
				@error('blogpage_txt')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="blogpage_txt" name="blogpage_txt" class="form-control" rows="10" cols="3">{{ $seo->blogpage_txt }}</textarea>
			</div>












		
			<br>
			<button class="btn btn-info m-1 px-5 radius-30" type="submit">Создать</button>
			<a href="{{ route('dashboard.seo.home') }}" class="btn btn-outline-info m-1 px-5 radius-30" type="submit">Назад</a>

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
				.create( document.querySelector('#homepage_txt') )
				.catch( error => {
						console.error( error );
				} );
	</script>

	<script>
		ClassicEditor
				.create( document.querySelector('#courcepage_txt') )
				.catch( error => {
						console.error( error );
				} );
	</script>

	<script>
		ClassicEditor
				.create( document.querySelector('#tovarypage_txt') )
				.catch( error => {
						console.error( error );
				} );
	</script>

	<script>
		ClassicEditor
				.create( document.querySelector('#blogpage_txt') )
				.catch( error => {
						console.error( error );
				} );
	</script>

@endpush




@endsection