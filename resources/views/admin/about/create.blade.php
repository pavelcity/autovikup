@extends('layouts.admin')
@section('title', 'О нас | Создать')

 

@section('content')

{{-- breadcrumb --}}
<div class="row">
	<div class="col-12">
		<div class="card radius-15">
			<div class="card-body">
				<div class="page-breadcrumb d-none d-md-flex align-items-center mb-0">
					<div class="breadcrumb-title pr-3">О нас создать</div>
					<div class="pl-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class='bx bx-home-alt'></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard.home') }}">Главная</a></li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard.about.home') }}">О нас</a></li>
								<li class="breadcrumb-item active" aria-current="page">О нас создать</li>
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
			<h3>О нас создать</h3>
			<a href="{{ route('dashboard.about.home') }}" class="btn btn-outline-info m-1 px-5 radius-30">Назад</a>
		</div>
	</div>
</div>
<br>






<div class="card radius-15">
	<div class="card-body">
	

		<form action="{{ route('dashboard.about.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
			@csrf



		
			<div class="mt-4">
				<img id="showPic" style="width: 400px; margin-bottom:30px;" src="{{ asset('uploads/not_image.jpg') }}" alt="">
			</div>

				@error('pic_one')
					<p style="color:red; font-size:12px;">{{ $message }}</p>
				@enderror
			<div class="input-group mb-5 mt-0">
				<div class="input-group-prepend">	<span class="input-group-text" id="pic">Фото </span>
				</div>
				<div class="custom-file">
					<input type="file" name="pic" class="custom-file-input" id="avatar" aria-describedby="avatar">
					<label class="custom-file-label" for="avatar">Выберите файл</label>
				</div>
			</div>





			<div class="mb-3">
				<label for="name">Имя</label>
				<input class="form-control @error('name') error_line @enderror" id="name" name="name" type="text" placeholder="" value="{{ old('name') }}">
				@error('name')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>

			<div class="mb-5">
				<label for="subtitle">Должность</label>
				<input class="form-control @error('subtitle') error_line @enderror" id="subtitle" name="subtitle" type="text" placeholder="" value="{{ old('subtitle') }}">
				@error('subtitle')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-5">
				<label for="shortonhome">Текст для <b>Главной страницы</b></label>
				@error('shortonhome')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="shortonhome" name="shortonhome" class="form-control" rows="10" cols="3">{{ old('shortonhome') }}</textarea>
			</div>


			<div class="mb-5">
				<label for="descronaboutpage">Небольшой вступительный текст на странице <b>О нас</b></label>
				@error('descronaboutpage')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="descronaboutpage" name="descronaboutpage" class="form-control" rows="10" cols="3">{{ old('descronaboutpage') }}</textarea>
			</div>





			<hr>
			<div class="mb-3">
				<label for="fichaone">Преимущество 1 | <b>страница О нас</b></label>
				<input class="form-control @error('fichaone') error_line @enderror" id="fichaone" name="fichaone" type="text" placeholder="" value="{{ old('fichaone') }}">
				@error('fichaone')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>

			<div class="mb-5">
				<label for="fichaonetext">Небольшой текст для | Преимущество 1 | <b>страница О нас</b></label>
				@error('fichaonetext')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="fichaonetext" name="fichaonetext" class="form-control" rows="10" cols="3">{{ old('fichaonetext') }}</textarea>
			</div>




			<hr>
			<div class="mb-3">
				<label for="fichatwo">Преимущество 2 | <b>страница О нас</b></label>
				<input class="form-control @error('fichatwo') error_line @enderror" id="fichatwo" name="fichatwo" type="text" placeholder="" value="{{ old('fichatwo') }}">
				@error('fichatwo')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>

			<div class="mb-5">
				<label for="fichatwotext">Небольшой текст для | Преимущество 2 | <b>страница О нас</b></label>
				@error('fichatwotext')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="fichatwotext" name="fichatwotext" class="form-control" rows="10" cols="3">{{ old('fichatwotext') }}</textarea>
			</div>





			<hr>
			<div class="mb-3">
				<label for="fichatri">Преимущество 3 | <b>страница О нас</b></label>
				<input class="form-control @error('fichatri') error_line @enderror" id="fichatri" name="fichatri" type="text" placeholder="" value="{{ old('fichatri') }}">
				@error('fichatri')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>

			<div class="mb-5">
				<label for="fichatritext">Небольшой текст для | Преимущество 3 | <b>страница О нас</b></label>
				@error('fichatritext')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="fichatritext" name="fichatritext" class="form-control" rows="10" cols="3">{{ old('fichatritext') }}</textarea>
			</div>




			<hr>
			<div class="mb-5">
				<label for="descr">Большой текст для <b>страницы О нас</b></label>
				@error('descr')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="descr" name="descr" class="form-control" rows="10" cols="3">{{ old('descr') }}</textarea>
			</div>






		
			<br>
			<button class="btn btn-info m-1 px-5 radius-30" type="submit">Создать</button>
			<a href="{{ route('dashboard.about.home') }}" class="btn btn-outline-info m-1 px-5 radius-30" type="submit">Назад</a>

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
				$('#showPic2').attr('src', e.target.result);
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
        .create( document.querySelector('#shortonhome') )
        .catch( error => {
            console.error( error );
        } );
	</script>
	<script>
    ClassicEditor
        .create( document.querySelector('#descronaboutpage') )
        .catch( error => {
            console.error( error );
        } );
	</script>
	<script>
    ClassicEditor
        .create( document.querySelector('#fichaonetext') )
        .catch( error => {
            console.error( error );
        } );
	</script>
	<script>
    ClassicEditor
        .create( document.querySelector('#fichatwotext') )
        .catch( error => {
            console.error( error );
        } );
	</script>
	<script>
    ClassicEditor
        .create( document.querySelector('#fichatritext') )
        .catch( error => {
            console.error( error );
        } );
	</script>
	<script>
    ClassicEditor
        .create( document.querySelector('#descr') )
        .catch( error => {
            console.error( error );
        } );
	</script>
@endpush





@endsection