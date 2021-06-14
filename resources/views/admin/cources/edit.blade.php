@extends('layouts.admin')
@section('title', 'Админка Услуги | Редактировать')

 

@section('content')

{{-- breadcrumb --}}
<div class="row">
	<div class="col-12">
		<div class="card radius-15">
			<div class="card-body">
				<div class="page-breadcrumb d-none d-md-flex align-items-center mb-0">
					<div class="breadcrumb-title pr-3">Редактировать услугу</div>
					<div class="pl-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class='bx bx-home-alt'></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard.home') }}">Главная</a></li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard.cources.home') }}">Услуги</a></li>
								<li class="breadcrumb-item active" aria-current="page">Редактировать услугу</li>
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
			<h3>Редактировать услугу</h3>
			<a href="{{ route('dashboard.cources.home') }}" class="btn btn-outline-info m-1 px-5 radius-30">Назад</a>
		</div>
	</div>
</div>
<br>





<div class="card radius-15">
	<div class="card-body">
	




		@if(true)
		<form action="{{ route('dashboard.cources.update', $cource->id) }}" method="post" autocomplete="off" enctype="multipart/form-data">
			@csrf


		


		







				<hr/>
				<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					<li class="nav-item" role="presentation"> <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Редактировать услугу</a>
					</li>
					<li class="nav-item" role="presentation"> <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Редактировать мета-данные (для seo)</a>
					</li>
				</ul>






		
				<br>
				<br>
				<div class="tab-content" id="pills-tabContent">
				
					<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
						
						
						<div class="mb-3">
							<label for="title">Заголовок</label>
							<input class="form-control @error('title') error_line @enderror" id="title" name="title" type="text" placeholder="" value="{{ $cource->title }}">
							@error('title')
								<p class="mistake">{{ $message }}</p>
							@enderror
						</div>
			
			
			
			
			
			
						<input type="hidden" name="old_pic" value="{{ $cource->pic }}">
			
						<div class="mt-4">
							<img id="showPic" style="width: 500px; margin-bottom:30px;" src="{{ asset($cource->pic ?? 'uploads/not_image.jpg') }}" alt="">
						</div>
			
			
			
							@error('pic')
								<p style="color:red; font-size:12px;">{{ $message }}</p>
							@enderror
						<div class="input-group mb-5 mt-0">
							<div class="input-group-prepend">	<span class="input-group-text" id="pic">Фото курса</span>
							</div>
							<div class="custom-file">
								<input type="file" name="pic" class="custom-file-input" id="avatar" aria-describedby="avatar">
								<label class="custom-file-label" for="avatar">Выберите файл</label>
							</div>
						</div>
			
			
			
			
			
			
			
			
						
			
			 
			
			
						<div class="mb-5">
							<label for="short">Короткое описание *</label>
							@error('short')
								<p class="mistake">{{ $message }}</p>
							@enderror
							<textarea id="short" name="short" class="form-control" rows="10" cols="3">{{ $cource->short }}</textarea>
						</div>
			
			
			
						<div class="form-group mb-3">
							<label for="descr">Детальное описание</label>
							@error('descr')
								<p class="mistake">{{ $message }}</p>
							@enderror
							<textarea id="descr" name="descr" class="form-control" rows="10" cols="3">{{ $cource->descr }}</textarea>
						</div>
			
			
			
			
					
						<br>
						<br>
						<hr>
						<h5 class="text-danger">Специалист/Мастер</h5>
			
						<div class="mb-3">
							<label for="name_spiker">Имя </label>
							<input class="form-control @error('name_spiker') error_line @enderror" id="name_spiker" name="name_spiker" type="text" placeholder="" value="{{ $cource->name_spiker }}">
							@error('name_spiker')
								<p class="mistake">{{ $message }}</p>
							@enderror
						</div>
			
						<div class="mb-3">
							<label for="subtitle_spiker">Должность</label>
							<input class="form-control @error('subtitle_spiker') error_line @enderror" id="subtitle_spiker" name="subtitle_spiker" type="text" placeholder="" value="{{ $cource->subtitle_spiker }}">
							@error('subtitle_spiker')
								<p class="mistake">{{ $message }}</p>
							@enderror
						</div>
			
			
						<div class="mb-3">
							<label for="text_spiker">Небольшой текст о мастере</label>
							@error('text_spiker')
								<p class="text_spiker">{{ $message }}</p>
							@enderror
							<textarea id="text_spiker" name="text_spiker" class="form-control" rows="10" cols="3">{{ $cource->text_spiker }}</textarea>
						</div>
			
			
						<div class="mb-3">
							<label for="price">Цена</label>
							<input class="form-control @error('price') error_line @enderror" id="price" name="price" type="text" placeholder="" value="{{ $cource->price }}">
							@error('price')
								<p class="mistake">{{ $message }}</p>
							@enderror
						</div>
			
			
			
			
			
			
			
			
						<input type="hidden" name="old_avatar" value="{{ $cource->avatar }}">
			
						<div class="mt-4">
							<img id="showAvatar" style="width: 200px; margin-bottom:30px;" src="{{ $cource->avatar ?? asset('uploads/not_image.jpg') }}" alt="">
						</div>
			
			
			
							@error('pic')
								<p style="color:red; font-size:12px;">{{ $message }}</p>
							@enderror
						<div class="input-group mb-5 mt-0">
							<div class="input-group-prepend">	<span class="input-group-text" id="avatar">Фото мастера</span>
							</div>
							<div class="custom-file">
								<input type="file" name="avatar" class="custom-file-input" id="avatar2" aria-describedby="avatar">
								<label class="custom-file-label" for="avatar">Выберите файл</label>
							</div>
							
						</div>
			
			


					</div>






					<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
						
						<div class="mb-3">
							<label for="metatitle">meta-title (70-80 занаков)</label>
							<input class="form-control @error('title') error_line @enderror" id="metatitle" name="metatitle" type="text" placeholder="" value="{{ $cource->metatitle }}">
							@error('metatitle')
								<p class="mistake">{{ $message }}</p>
							@enderror
						</div>

						<div class="mb-5">
							<label for="metadescr">meta-descr (до 160 знаков)</label>
							@error('metadescr')
								<p class="mistake">{{ $message }}</p>
							@enderror
							<textarea id="metadescr" name="metadescr" class="form-control" rows="4" cols="3">{{ $cource->metadescr }}</textarea>
						</div>

						<div class="mb-5">
							<label for="metakeys">meta-keys</label>
							@error('metakeys')
								<p class="mistake">{{ $message }}</p>
							@enderror
							<textarea id="metakeys" name="metakeys" class="form-control" rows="4" cols="3">{{ $cource->metakeys }}</textarea>
						</div>

					</div>



				</div>





		
				<br>
				<button class="btn btn-info m-1 px-5 radius-30" type="submit">Создать</button>
				<a href="{{ route('dashboard.cources.home') }}" class="btn btn-outline-info m-1 px-5 radius-30" type="submit">Назад</a>
	
			</form>
			@endif




	</div>
</div>












@push('scripts')
	<script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
	<script>
		$("#phone").mask("8 (999) 999 99 99");
	</script>
@endpush



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
        .create( document.querySelector('#short') )
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

<script>
	ClassicEditor
			.create( document.querySelector('#text_spiker') )
			.catch( error => {
					console.error( error );
			} );
</script>
@endpush




@endsection