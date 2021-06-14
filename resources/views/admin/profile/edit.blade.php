@extends('layouts.admin')
@section('title', 'Главная | Редактировать')

  

@section('content')

{{-- breadcrumb --}}
<div class="row">
	<div class="col-12">
		<div class="card radius-15">
			<div class="card-body">
				<div class="page-breadcrumb d-none d-md-flex align-items-center mb-0">
					<div class="breadcrumb-title pr-3">Главная</div>
					<div class="pl-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class='bx bx-home-alt'></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard.home') }}">Админка</a></li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard.profile.home') }}">Главная</a></li>
								<li class="breadcrumb-item active" aria-current="page">Редактировать данные сайта</li>
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
			<h3>Редактировать сайта</h3>
			<a href="{{ route('dashboard.profile.home') }}" class="btn btn-outline-info m-1 px-5 radius-30">Назад</a>
		</div>
	</div>
</div>
<br>






 

<div class="card radius-15">
	<div class="card-body">
	

		<form action="{{ route('dashboard.profile.update', $profile->id) }}" method="post" autocomplete="off" enctype="multipart/form-data">
			@csrf


			<hr>
			<h5 class="text-danger">УТП (уникальное торговое предложение)</h5>



			<input type="hidden" name="old_pic_utp" value="{{ $profile->pic_utp }}">

			<div class="mt-4">
				<img id="showPic" style="width: 400px; margin-bottom:30px;" src="{{ asset($profile->pic_utp ?? 'uploads/not_image.jpg') }}" alt="">
			</div>

				@error('pic')
					<p style="color:red; font-size:12px;">{{ $message }}</p>
				@enderror
			<div class="input-group mb-5 mt-0">
				<div class="input-group-prepend">	<span class="input-group-text" id="pic">Фото УТП</span>
				</div>
				<div class="custom-file">
					<input type="file" name="pic_utp" class="custom-file-input" id="avatar" aria-describedby="avatar">
					<label class="custom-file-label" for="avatar">Выберите файл</label>
				</div>
			</div>







			<div class="mb-3">
				<label for="title">УТП заголовок *</label>
				<input class="form-control @error('title') error_line @enderror" id="title" name="title" type="text" placeholder="" value="{{ $profile->title }}">
				@error('title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-5">
				<label for="text_utp">УТП текст</label>
				@error('text_utp')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="text_utp" name="text_utp" class="form-control" rows="10" cols="3">{{ $profile->text_utp }}</textarea>
			</div>








			<hr>
			<h5 class="text-danger">Описание разделов (для главной и внутренних страниц)</h5>			
			<br>




			<div class="mb-3">
				<label for="about_title">Обо мне (заголовок) -  измените на свой</label>
				<input class="form-control @error('about_title') error_line @enderror" id="about_title" name="about_title" type="text" placeholder="" value="{{ $profile->about_title }}">
				@error('about_title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>



			<div class="mb-5">
				<label for="about_subtitle">Обо мне (текст)</label>
				@error('about_subtitle')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="about_subtitle" name="about_subtitle" class="form-control" rows="10" cols="3">{{ $profile->about_subtitle }}</textarea>
			</div>





			<hr>

			<div class="mb-3">
				<label for="cources_title"><b>Курсы</b> (заголовок) -  измените на свой</label>
				<input class="form-control @error('cources_title') error_line @enderror" id="cources_title" name="cources_title" type="text" placeholder="" value="{{ $profile->cources_title }}">
				@error('cources_title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>

			<div class="mb-5">
				<label for="cources_subtitle">Курсы (текст)</label>
				@error('cources_subtitle')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="cources_subtitle" name="cources_subtitle" class="form-control" rows="10" cols="3">{{ $profile->cources_subtitle }}</textarea>
			</div>






			<hr>

			<div class="mb-3">
				<label for="cifres_title"><b>Цифры</b> (заголовок) -  измените на свой</label>
				<input class="form-control @error('cifres_title') error_line @enderror" id="cifres_title" name="cifres_title" type="text" placeholder="" value="{{ $profile->cifres_title }}">
				@error('cifres_title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>
 
			<div class="mb-5">
				<label for="cifres_subtitle">Интересные цифры (текст)</label>
				@error('cifres_subtitle')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="cifres_subtitle" name="cifres_subtitle" class="form-control" rows="10" cols="3">{{ $profile->cifres_subtitle }}</textarea>
			</div>






			<hr>

			<div class="mb-3">
				<label for="blog_title"><b>Блог</b> (заголовок) -  измените на свой</label>
				<input class="form-control @error('blog_title') error_line @enderror" id="blog_title" name="blog_title" type="text" placeholder="" value="{{ $profile->blog_title }}">
				@error('blog_title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-5">
				<label for="blog_subtitle">Блог / Новости (текст)</label>
				@error('blog_subtitle')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="blog_subtitle" name="blog_subtitle" class="form-control" rows="10" cols="3">{{ $profile->blog_subtitle }}</textarea>
			</div>




@if(false)
			<hr>

			<div class="mb-3">
				<label for="tovary_title"><b>Товары</b> (заголовок) -  измените на свой</label>
				<input class="form-control @error('tovary_title') error_line @enderror" id="tovary_title" name="tovary_title" type="text" placeholder="" value="{{ $profile->tovary_title }}">
				@error('tovary_title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>

			<div class="mb-5">
				<label for="tovary_subtitle">Товары (текст)</label>
				@error('tovary_subtitle')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="tovary_subtitle" name="tovary_subtitle" class="form-control" rows="10" cols="3">{{ $profile->tovary_subtitle }}</textarea>
			</div>
@endif




			<hr>

			<div class="mb-3">
				<label for="portfolio_title"><b>Портфолио</b> (заголовок) -  измените на свой</label>
				<input class="form-control @error('portfolio_title') error_line @enderror" id="portfolio_title" name="portfolio_title" type="text" placeholder="" value="{{ $profile->portfolio_title }}">
				@error('portfolio_title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>

			<div class="mb-5">
				<label for="portfolio_subtitle">Портфолио (текст)</label>
				@error('portfolio_subtitle')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="portfolio_subtitle" name="portfolio_subtitle" class="form-control" rows="10" cols="3">{{ $profile->portfolio_subtitle }}</textarea>
			</div>






			<hr>

			<div class="mb-3">
				<label for="otzivy_title"><b>Отзывы</b> (заголовок) -  измените на свой</label>
				<input class="form-control @error('otzivy_title') error_line @enderror" id="otzivy_title" name="otzivy_title" type="text" placeholder="" value="{{ $profile->otzivy_title }}">
				@error('otzivy_title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>

			<div class="mb-5">
				<label for="otzivy_subtitle">Отзывы (текст)</label>
				@error('otzivy_subtitle')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="otzivy_subtitle" name="otzivy_subtitle" class="form-control" rows="10" cols="3">{{ $profile->otzivy_subtitle }}</textarea>
			</div>






			<hr>

			<div class="mb-3">
				<label for="contacty_title"><b>Контакты</b> (заголовок) -  измените на свой</label>
				<input class="form-control @error('contacty_title') error_line @enderror" id="contacty_title" name="contacty_title" type="text" placeholder="" value="{{ $profile->contacty_title }}">
				@error('contacty_title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-5">
				<label for="contacty_subtitle">Контакты (текст)</label>
				@error('contacty_subtitle')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="contacty_subtitle" name="contacty_subtitle" class="form-control" rows="10" cols="3">{{ $profile->contacty_subtitle }}</textarea>
			</div>





			<hr>
			<h5 class="text-danger">Интересные цифры (на главной)</h5>			
			<br>

			<div class="form-row">
				<div class=" form-group col-md-6 mb-2">
					<label for="one_cifry_title">1 цифра заголовок</label>
					<input class="form-control @error('one_cifry_title') error_line @enderror" id="one_cifry_title" name="one_cifry_title" type="text" placeholder="" value="{{ $profile->one_cifry_title }}">
					@error('one_cifry_title')
						<p class="mistake">{{ $message }}</p>
					@enderror
				</div>

				<div class="form-group col-md-6 mb-2">
					<label for="one_cifry_text">1 цифра текст</label>
					<input class="form-control @error('one_cifry_text') error_line @enderror" id="one_cifry_text" name="one_cifry_text" type="text" placeholder="" value="{{ $profile->one_cifry_text }}">
					@error('one_cifry_text')
						<p class="mistake">{{ $message }}</p>
					@enderror
				</div>
			</div>
			<hr>


			<div class="form-row">
				<div class=" form-group col-md-6 mb-2">
					<label for="two_cifry_title">2 цифра заголовок</label>
					<input class="form-control @error('two_cifry_title') error_line @enderror" id="two_cifry_title" name="two_cifry_title" type="text" placeholder="" value="{{ $profile->two_cifry_title }}">
					@error('two_cifry_title')
						<p class="mistake">{{ $message }}</p>
					@enderror
				</div>

				<div class="form-group col-md-6 mb-2">
					<label for="two_cifry_text">2 цифра текст</label>
					<input class="form-control @error('two_cifry_text') error_line @enderror" id="two_cifry_text" name="two_cifry_text" type="text" placeholder="" value="{{ $profile->two_cifry_text }}">
					@error('two_cifry_text')
						<p class="mistake">{{ $message }}</p>
					@enderror
				</div>
			</div>
			<hr>


			<div class="form-row">
				<div class=" form-group col-md-6 mb-2">
					<label for="tri_cifry_title">3 цифра заголовок</label>
					<input class="form-control @error('tri_cifry_title') error_line @enderror" id="tri_cifry_title" name="tri_cifry_title" type="text" placeholder="" value="{{ $profile->tri_cifry_title }}">
					@error('tri_cifry_title')
						<p class="mistake">{{ $message }}</p>
					@enderror
				</div>

				<div class="form-group col-md-6 mb-2">
					<label for="tri_cifry_text">3 цифра текст</label>
					<input class="form-control @error('tri_cifry_text') error_line @enderror" id="tri_cifry_text" name="tri_cifry_text" type="text" placeholder="" value="{{ $profile->tri_cifry_text }}">
					@error('tri_cifry_text')
						<p class="mistake">{{ $message }}</p>
					@enderror
				</div>
			</div>
			<hr>


			<div class="form-row">
				<div class=" form-group col-md-6 mb-2">
					<label for="four_cifry_title">4 цифра заголовок</label>
					<input class="form-control @error('four_cifry_title') error_line @enderror" id="four_cifry_title" name="four_cifry_title" type="text" placeholder="" value="{{ $profile->four_cifry_title }}">
					@error('four_cifry_title')
						<p class="mistake">{{ $message }}</p>
					@enderror
				</div>

				<div class="form-group col-md-6 mb-2">
					<label for="four_cifry_text">4 цифра текст</label>
					<input class="form-control @error('four_cifry_text') error_line @enderror" id="four_cifry_text" name="four_cifry_text" type="text" placeholder="" value="{{ $profile->four_cifry_text }}">
					@error('four_cifry_text')
						<p class="mistake">{{ $message }}</p>
					@enderror
				</div>
			</div>
			<hr>




			{{-- <hr> --}}
			<br>
			<h5 class="text-danger">Контакты</h5>			
			<br>

			<div class="form-row">
				<div class=" form-group col-md-6 mb-2">
					<label for="phone">Телефон</label>
					<input class="form-control @error('phone') error_line @enderror" id="phone" name="phone" type="text" placeholder="" value="{{ $profile->phone }}">
					@error('phone')
						<p class="mistake">{{ $message }}</p>
					@enderror
				</div>

				<div class="form-group col-md-6 mb-2">
					<label for="email">Email</label>
					<input class="form-control @error('email') error_line @enderror" id="email" name="email" type="text" placeholder="" value="{{ $profile->email }}">
					@error('email')
						<p class="mistake">{{ $message }}</p>
					@enderror
				</div>
			</div>
			<hr>



			<div class="form-row">
				<div class="form-group col-md-6 mb-2">
					<label for="instagram">Инстаграм - ссылка (если есть)</label>
					<input class="form-control @error('instagram') error_line @enderror" id="instagram" name="instagram" type="text" placeholder="" value="{{ $profile->instagram }}">
					@error('instagram')
						<p class="mistake">{{ $message }}</p>
					@enderror
				</div>

				<div class="form-group col-md-6 mb-2">
					<label for="vk">Вконтакте - ссылка (если есть)</label>
					<input class="form-control @error('vk') error_line @enderror" id="vk" name="vk" type="text" placeholder="" value="{{ $profile->vk }}">
					@error('vk')
						<p class="mistake">{{ $message }}</p>
					@enderror
				</div>
			</div>
			<hr>



			<div class="form-row">
				<div class="form-group col-md-6 mb-2">
					<label for="facebook">facebook - ссылка (если есть)</label>
					<input class="form-control @error('facebook') error_line @enderror" id="facebook" name="facebook" type="text" placeholder="" value="{{ $profile->facebook }}">
					@error('facebook')
						<p class="mistake">{{ $message }}</p>
					@enderror
				</div>

				<div class="form-group col-md-6 mb-2">
					<label for="youtube">youtube - ссылка (если есть)</label>
					<input class="form-control @error('youtube') error_line @enderror" id="youtube" name="youtube" type="text" placeholder="" value="{{ $profile->youtube }}">
					@error('youtube')
						<p class="mistake">{{ $message }}</p>
					@enderror
				</div>
			</div>
			<hr>


		

			

		
			<br>
			<br>
			<button class="btn btn-info m-1 px-5 radius-30 " type="submit">Сохранить</button>
			<a href="{{ route('dashboard.profile.home') }}" class="btn btn-outline-info m-1 px-5 radius-30" type="submit">Назад</a>

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
				.create( document.querySelector('#text_utp') )
				.catch( error => {
						console.error( error );
				} );
	</script>
	<script>
		ClassicEditor
				.create( document.querySelector('#about_subtitle') )
				.catch( error => {
						console.error( error );
				} );
	</script>
	<script>
		ClassicEditor
				.create( document.querySelector('#cources_subtitle') )
				.catch( error => {
						console.error( error );
				} );
	</script>
	<script>
		ClassicEditor
				.create( document.querySelector('#cifres_subtitle') )
				.catch( error => {
						console.error( error );
				} );
	</script>
	<script>
		ClassicEditor
				.create( document.querySelector('#blog_subtitle') )
				.catch( error => {
						console.error( error );
				} );
	</script>
	<script>
		ClassicEditor
				.create( document.querySelector('#tovary_subtitle') )
				.catch( error => {
						console.error( error );
				} );
	</script>
	<script>
		ClassicEditor
				.create( document.querySelector('#portfolio_subtitle') )
				.catch( error => {
						console.error( error );
				} );
	</script>
	<script>
		ClassicEditor
				.create( document.querySelector('#otzivy_subtitle') )
				.catch( error => {
						console.error( error );
				} );
	</script>
	<script>
		ClassicEditor
				.create( document.querySelector('#contacty_subtitle') )
				.catch( error => {
						console.error( error );
				} );
	</script>

@endpush




@endsection