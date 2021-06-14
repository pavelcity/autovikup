@extends('layouts.admin')
@section('title', 'Отзыв | Создать')

 

@section('content')

{{-- breadcrumb --}}
<div class="row">
	<div class="col-12">
		<div class="card radius-15">
			<div class="card-body">
				<div class="page-breadcrumb d-none d-md-flex align-items-center mb-0">
					<div class="breadcrumb-title pr-3">Отзыв запись</div>
					<div class="pl-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class='bx bx-home-alt'></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard.home') }}">Главная</a></li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard.otzivy.home') }}">Отзывы</a></li>
								<li class="breadcrumb-item active" aria-current="page">Отзыв запись</li>
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
			<h3>Создать отзыв</h3>
			<a href="{{ route('dashboard.otzivy.home') }}" class="btn btn-outline-info m-1 px-5 radius-30">Назад</a>
		</div>
	</div>
</div>
<br>






<div class="card radius-15">
	<div class="card-body">
	

		<form action="{{ route('dashboard.otzivy.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
			@csrf


			<div class="mt-4">
				<img id="showPic" style="width: 400px; margin-bottom:30px;" src="{{ asset('uploads/not_image.jpg') }}" alt="">
			</div>

				@error('pic')
					<p style="color:red; font-size:12px;">{{ $message }}</p>
				@enderror
			<div class="input-group mb-5 mt-0">
				<div class="input-group-prepend">	<span class="input-group-text" id="pic">Фото</span>
				</div>
				<div class="custom-file">
					<input type="file" name="pic" class="custom-file-input" id="avatar" aria-describedby="avatar">
					<label class="custom-file-label" for="avatar">Выберите файл</label>
				</div>
			</div>





			<div class="mb-3">
				<label for="title">Имя</label>
				<input class="form-control @error('title') error_line @enderror" id="title" name="title" type="text" placeholder="" value="{{ old('title') }}">
				@error('title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="dolznost">Должность (кем является)</label>
				<input class="form-control @error('dolznost') error_line @enderror" id="dolznost" name="dolznost" type="dolznost" placeholder="" value="{{ old('dolznost') }}">
				@error('dolznost')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>



		

			<div class="mb-5">
				<label for="text">Текст отзыва</label>
				@error('text')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="text" name="text" class="form-control" rows="10" cols="3">{{ old('text') }}</textarea>
			</div>




		
			<br>
			<button class="btn btn-info m-1 px-5 radius-30" type="submit">Создать</button>
			<a href="{{ route('dashboard.otzivy.home') }}" class="btn btn-outline-info m-1 px-5 radius-30" type="submit">Назад</a>

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

@endpush








@push('scripts')
	<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>


	<script>
		ClassicEditor
				.create( document.querySelector('#text') )
				.catch( error => {
						console.error( error );
				} );
	</script>


@endpush




@endsection