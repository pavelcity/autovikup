@extends('layouts.admin')
@section('title', 'Meta | Редактировать')

 
 
@section('content')

{{-- breadcrumb --}}
<div class="row">
	<div class="col-12">
		<div class="card radius-15">
			<div class="card-body">
				<div class="page-breadcrumb d-none d-md-flex align-items-center mb-0">
					<div class="breadcrumb-title pr-3">Редактировать Meta</div>
					<div class="pl-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class='bx bx-home-alt'></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard.home') }}">Главная</a></li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard.meta.home') }}">Meta</a></li>
								<li class="breadcrumb-item active" aria-current="page">Редактировать Meta</li>
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
			<h3>Редактировать Meta</h3>
			<a href="{{ route('dashboard.meta.home') }}" class="btn btn-outline-info m-1 px-5 radius-30">Назад</a>
		</div>
	</div>
</div>
<br>






<div class="card radius-15">
	<div class="card-body">
	

		<form action="{{ route('dashboard.meta.update', $meta->id) }}" method="post" autocomplete="off" enctype="multipart/form-data">
			@csrf

			<hr>
			<h4 class="text-primary">Ogg блок</h4>
			<br>

			<div class="mb-3">
				<label for="homepage_title">ogtitle</label>
				<input class="form-control @error('ogtitle') error_line @enderror" id="ogtitle" name="ogtitle" type="text" placeholder="" value="{{ $meta->ogtitle }}">
				@error('ogtitle')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>

			<div class="mb-3">
				<label for="ogurl">ogurl</label>
				<input class="form-control @error('ogurl') error_line @enderror" id="ogurl" name="ogurl" type="text" placeholder="" value="{{ $meta->ogurl }}">
				@error('ogurl')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>





			@if(false)

			<input type="hidden" name="old_ogimg" value="{{ $meta->ogimg }}">

			<div class="mt-4">
				<img id="showPic" style="width: 300px; margin-bottom:30px;" src="{{ asset($meta->ogimg ?? 'uploads/not_image.jpg') }}" alt="">
			</div>



				@error('pic')
					<p style="color:red; font-size:12px;">{{ $message }}</p>
				@enderror
			<div class="input-group mb-5 mt-0">
				<div class="input-group-prepend">	<span class="input-group-text" id="pic">ogg image (600x600 px)</span>
				</div>
				<div class="custom-file">
					<input type="file" name="ogimg" class="custom-file-input" id="avatar" aria-describedby="avatar">
					<label class="custom-file-label" for="avatar">Выберите файл</label>
				</div>
			</div>

			@endif







			<hr>
			<h4 class="text-primary">Meta для главной страницы</h4>
			<br>



			<div class="mb-3">
				<label for="home_title">title</label>
				<input class="form-control @error('home_title') error_line @enderror" id="home_title" name="home_title" type="text" placeholder="" value="{{ $meta->home_title }}">
				@error('home_title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="home_description">description</label>
				@error('home_description')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="home_description" name="home_description" class="form-control" rows="3" cols="3">{{ $meta->home_description }}</textarea>
			</div>

			<div class="mb-3">
				<label for="home_keywords">keywords</label>
				<input class="form-control @error('home_keywords') error_line @enderror" id="home_keywords" name="home_keywords" type="text" placeholder="" value="{{ $meta->home_keywords }}">
				@error('home_keywords')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>

			<div class="mb-3">
				<label for="author">author</label>
				<input class="form-control @error('author') error_line @enderror" id="author" name="author" type="text" placeholder="" value="{{ $meta->author }}">
				@error('author')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>

			<div class="mb-3">
				<label for="canonical">canonical</label>
				<input class="form-control @error('canonical') error_line @enderror" id="canonical" name="canonical" type="text" placeholder="" value="{{ $meta->canonical }}">
				@error('canonical')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>









			<br>
			<br>
			<br>
			<hr>
			<h4 class="text-primary">Meta для страницы Курсы</h4>
			<br>


			<div class="mb-3">
				<label for="cource_title">title</label>
				<input class="form-control @error('cource_title') error_line @enderror" id="cource_title" name="cource_title" type="text" placeholder="" value="{{ $meta->cource_title }}">
				@error('cource_title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="cource_description">description</label>
				@error('cource_description')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="cource_description" name="cource_description" class="form-control" rows="3" cols="3">{{ $meta->cource_description }}</textarea>
			</div>

			<div class="mb-3">
				<label for="cource_keywords">keywords</label>
				<input class="form-control @error('cource_keywords') error_line @enderror" id="cource_keywords" name="cource_keywords" type="text" placeholder="" value="{{ $meta->cource_keywords }}">
				@error('cource_keywords')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>

			<div class="mb-3">
				<label for="cource_canonical">canonical</label>
				<input class="form-control @error('cource_canonical') error_line @enderror" id="cource_canonical" name="cource_canonical" type="text" placeholder="" value="{{ $meta->cource_canonical }}">
				@error('cource_canonical')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="cource_avtor">author</label>
				<input class="form-control @error('cource_avtor') error_line @enderror" id="cource_avtor" name="cource_avtor" type="text" placeholder="" value="{{ $meta->cource_avtor }}">
				@error('cource_avtor')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>






@if(false)
			<br>
			<br>
			<br>
			<hr>
			<h4 class="text-primary">Meta для страницы Товары</h4>
			<br>


			<div class="mb-3">
				<label for="tovary_title">title</label>
				<input class="form-control @error('tovary_title') error_line @enderror" id="tovary_title" name="tovary_title" type="text" placeholder="" value="{{ $meta->tovary_title }}">
				@error('tovary_title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="tovary_description">description</label>
				@error('tovary_description')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="tovary_description" name="tovary_description" class="form-control" rows="3" cols="3">{{ $meta->tovary_description }}</textarea>
			</div>


			<div class="mb-3">
				<label for="tovary_keywords">keywords</label>
				<input class="form-control @error('tovary_keywords') error_line @enderror" id="tovary_keywords" name="tovary_keywords" type="text" placeholder="" value="{{ $meta->tovary_keywords }}">
				@error('tovary_keywords')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="tovary_canonical">canonical</label>
				<input class="form-control @error('tovary_canonical') error_line @enderror" id="tovary_canonical" name="tovary_canonical" type="text" placeholder="" value="{{ $meta->tovary_canonical }}">
				@error('tovary_canonical')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="tovary_avtor">author</label>
				<input class="form-control @error('tovary_avtor') error_line @enderror" id="tovary_avtor" name="tovary_avtor" type="text" placeholder="" value="{{ $meta->tovary_avtor }}">
				@error('tovary_avtor')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>
@endif

			





			<br>
			<br>
			<br>
			<hr>
			<h4 class="text-primary">Meta для страницы О нас</h4>
			<br>


			<div class="mb-3">
				<label for="about_title">title</label>
				<input class="form-control @error('about_title') error_line @enderror" id="about_title" name="about_title" type="text" placeholder="" value="{{ $meta->about_title }}">
				@error('about_title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="about_description">description</label>
				@error('about_description')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="about_description" name="about_description" class="form-control" rows="3" cols="3">{{ $meta->about_description }}</textarea>
			</div>


			<div class="mb-3">
				<label for="about_keywords">keywords</label>
				<input class="form-control @error('about_keywords') error_line @enderror" id="about_keywords" name="about_keywords" type="text" placeholder="" value="{{ $meta->about_keywords }}">
				@error('about_keywords')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="about_canonical">canonical</label>
				<input class="form-control @error('about_canonical') error_line @enderror" id="about_canonical" name="about_canonical" type="text" placeholder="" value="{{ $meta->about_canonical }}">
				@error('about_canonical')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="about_avtor">author</label>
				<input class="form-control @error('about_avtor') error_line @enderror" id="about_avtor" name="about_avtor" type="text" placeholder="" value="{{ $meta->about_avtor }}">
				@error('about_avtor')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>

			







			<br>
			<br>
			<br>
			<hr>
			<h4 class="text-primary">Meta для страницы Контакты</h4>
			<br>


			<div class="mb-3">
				<label for="contact_title">title</label>
				<input class="form-control @error('contact_title') error_line @enderror" id="contact_title" name="contact_title" type="text" placeholder="" value="{{ $meta->contact_title }}">
				@error('contact_title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="contact_description">description</label>
				@error('contact_description')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="contact_description" name="contact_description" class="form-control" rows="3" cols="3">{{ $meta->contact_description }}</textarea>
			</div>


			<div class="mb-3">
				<label for="contact_keywords">keywords</label>
				<input class="form-control @error('contact_keywords') error_line @enderror" id="contact_keywords" name="contact_keywords" type="text" placeholder="" value="{{ $meta->contact_keywords }}">
				@error('contact_keywords')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="contact_canonical">canonical</label>
				<input class="form-control @error('contact_canonical') error_line @enderror" id="contact_canonical" name="contact_canonical" type="text" placeholder="" value="{{ $meta->contact_canonical }}">
				@error('contact_canonical')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="contact_avtor">author</label>
				<input class="form-control @error('contact_avtor') error_line @enderror" id="contact_avtor" name="contact_avtor" type="text" placeholder="" value="{{ $meta->contact_avtor }}">
				@error('contact_avtor')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>

			





			<br>
			<br>
			<br>
			<hr>
			<h4 class="text-primary">Meta для страницы Блог</h4>
			<br>


			<div class="mb-3">
				<label for="blog_title">title</label>
				<input class="form-control @error('blog_title') error_line @enderror" id="blog_title" name="blog_title" type="text" placeholder="" value="{{ $meta->blog_title }}">
				@error('blog_title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="blog_description">description</label>
				@error('blog_description')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="blog_description" name="blog_description" class="form-control" rows="3" cols="3">{{ $meta->blog_description }}</textarea>
			</div>


			<div class="mb-3">
				<label for="blog_keywords">keywords</label>
				<input class="form-control @error('blog_keywords') error_line @enderror" id="blog_keywords" name="blog_keywords" type="text" placeholder="" value="{{ $meta->blog_keywords }}">
				@error('blog_keywords')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="blog_canonical">canonical</label>
				<input class="form-control @error('blog_canonical') error_line @enderror" id="blog_canonical" name="blog_canonical" type="text" placeholder="" value="{{ $meta->blog_canonical }}">
				@error('blog_canonical')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="blog_avtor">author</label>
				<input class="form-control @error('blog_avtor') error_line @enderror" id="blog_avtor" name="blog_avtor" type="text" placeholder="" value="{{ $meta->blog_avtor }}">
				@error('blog_avtor')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>












			<br>
			<br>
			<br>
			<br>

			<hr>
			<h4 class="text-primary">Meta для страницы <b>Политики конфиденциальности</b></h4>
			<br>


			<div class="mb-3">
				<label for="politics_title">title</label>
				<input class="form-control @error('politics_title') error_line @enderror" id="politics_title" name="politics_title" type="text" placeholder="" value="{{ $meta->politics_title }}">
				@error('politics_title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="politics_description">description</label>
				@error('politics_description')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="politics_description" name="politics_description" class="form-control" rows="3" cols="3">{{ $meta->politics_description }}</textarea>
			</div>


			<div class="mb-3">
				<label for="politics_keywords">keywords</label>
				<input class="form-control @error('politics_keywords') error_line @enderror" id="politics_keywords" name="politics_keywords" type="text" placeholder="" value="{{ $meta->politics_keywords }}">
				@error('politics_keywords')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="politics_canonical">canonical</label>
				<input class="form-control @error('politics_canonical') error_line @enderror" id="politics_canonical" name="politics_canonical" type="text" placeholder="" value="{{ $meta->politics_canonical }}">
				@error('politics_canonical')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="politics_avtor">author</label>
				<input class="form-control @error('politics_avtor') error_line @enderror" id="politics_avtor" name="politics_avtor" type="text" placeholder="" value="{{ $meta->politics_avtor }}">
				@error('politics_avtor')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>










			<br>
			<br>
			<br>
			<br>

			<hr>
			<h4 class="text-primary">Meta для страницы <b>Условия оплаты</b></h4>
			<br>


			<div class="mb-3">
				<label for="oplata_title">title</label>
				<input class="form-control @error('oplata_title') error_line @enderror" id="oplata_title" name="oplata_title" type="text" placeholder="" value="{{ $meta->oplata_title }}">
				@error('oplata_title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="oplata_description">description</label>
				@error('oplata_description')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="oplata_description" name="oplata_description" class="form-control" rows="3" cols="3">{{ $meta->oplata_description }}</textarea>
			</div>


			<div class="mb-3">
				<label for="oplata_keywords">keywords</label>
				<input class="form-control @error('oplata_keywords') error_line @enderror" id="oplata_keywords" name="oplata_keywords" type="text" placeholder="" value="{{ $meta->oplata_keywords }}">
				@error('oplata_keywords')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="oplata_canonical">canonical</label>
				<input class="form-control @error('oplata_canonical') error_line @enderror" id="oplata_canonical" name="oplata_canonical" type="text" placeholder="" value="{{ $meta->oplata_canonical }}">
				@error('oplata_canonical')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>
 

			<div class="mb-3">
				<label for="oplata_avtor">author</label>
				<input class="form-control @error('oplata_avtor') error_line @enderror" id="oplata_avtor" name="oplata_avtor" type="text" placeholder="" value="{{ $meta->oplata_avtor }}">
				@error('oplata_avtor')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>













			<br>
			<br>
			<br>
			<br>

			<hr>
			<h4 class="text-primary">Meta для страницы <b>Условия доставки</b></h4>
			<br>


			<div class="mb-3">
				<label for="dostavka_title">title</label>
				<input class="form-control @error('dostavka_title') error_line @enderror" id="dostavka_title" name="dostavka_title" type="text" placeholder="" value="{{ $meta->dostavka_title }}">
				@error('dostavka_title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="dostavka_description">description</label>
				@error('dostavka_description')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="dostavka_description" name="dostavka_description" class="form-control" rows="3" cols="3">{{ $meta->dostavka_description }}</textarea>
			</div>


			<div class="mb-3">
				<label for="dostavka_keywords">keywords</label>
				<input class="form-control @error('dostavka_keywords') error_line @enderror" id="dostavka_keywords" name="dostavka_keywords" type="text" placeholder="" value="{{ $meta->dostavka_keywords }}">
				@error('dostavka_keywords')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="dostavka_canonical">canonical</label>
				<input class="form-control @error('dostavka_canonical') error_line @enderror" id="dostavka_canonical" name="dostavka_canonical" type="text" placeholder="" value="{{ $meta->dostavka_canonical }}">
				@error('dostavka_canonical')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="dostavka_avtor">author</label>
				<input class="form-control @error('dostavka_avtor') error_line @enderror" id="dostavka_avtor" name="dostavka_avtor" type="text" placeholder="" value="{{ $meta->dostavka_avtor }}">
				@error('dostavka_avtor')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>











			<br>
			<br>
			<br>
			<br>

			<hr>
			<h4 class="text-primary">Meta для страницы <b>Условия доставки</b></h4>
			<br>


			<div class="mb-3">
				<label for="dostavka_title">title</label>
				<input class="form-control @error('dostavka_title') error_line @enderror" id="dostavka_title" name="dostavka_title" type="text" placeholder="" value="{{ $meta->dostavka_title }}">
				@error('dostavka_title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="dostavka_description">description</label>
				@error('dostavka_description')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="dostavka_description" name="dostavka_description" class="form-control" rows="3" cols="3">{{ $meta->dostavka_description }}</textarea>
			</div>


			<div class="mb-3">
				<label for="dostavka_keywords">keywords</label>
				<input class="form-control @error('dostavka_keywords') error_line @enderror" id="dostavka_keywords" name="dostavka_keywords" type="text" placeholder="" value="{{ $meta->dostavka_keywords }}">
				@error('dostavka_keywords')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="dostavka_canonical">canonical</label>
				<input class="form-control @error('dostavka_canonical') error_line @enderror" id="dostavka_canonical" name="dostavka_canonical" type="text" placeholder="" value="{{ $meta->dostavka_canonical }}">
				@error('dostavka_canonical')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="dostavka_avtor">author</label>
				<input class="form-control @error('dostavka_avtor') error_line @enderror" id="dostavka_avtor" name="dostavka_avtor" type="text" placeholder="" value="{{ $meta->dostavka_avtor }}">
				@error('dostavka_avtor')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>



			




			<br>
			<br>
			<br>
			<br>

			<hr>
			<h4 class="text-primary">Meta для страницы <b>Условия возврата</b></h4>
			<br>


			<div class="mb-3">
				<label for="vozvrat_title">title</label>
				<input class="form-control @error('vozvrat_title') error_line @enderror" id="vozvrat_title" name="vozvrat_title" type="text" placeholder="" value="{{ $meta->vozvrat_title }}">
				@error('vozvrat_title')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="vozvrat_description">description</label>
				@error('vozvrat_description')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="vozvrat_description" name="vozvrat_description" class="form-control" rows="3" cols="3">{{ $meta->vozvrat_description }}</textarea>
			</div>


			<div class="mb-3">
				<label for="vozvrat_keywords">keywords</label>
				<input class="form-control @error('vozvrat_keywords') error_line @enderror" id="vozvrat_keywords" name="vozvrat_keywords" type="text" placeholder="" value="{{ $meta->vozvrat_keywords }}">
				@error('vozvrat_keywords')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="vozvrat_canonical">canonical</label>
				<input class="form-control @error('vozvrat_canonical') error_line @enderror" id="vozvrat_canonical" name="vozvrat_canonical" type="text" placeholder="" value="{{ $meta->vozvrat_canonical }}">
				@error('vozvrat_canonical')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>


			<div class="mb-3">
				<label for="vozvrat_avtor">author</label>
				<input class="form-control @error('vozvrat_avtor') error_line @enderror" id="vozvrat_avtor" name="vozvrat_avtor" type="text" placeholder="" value="{{ $meta->vozvrat_avtor }}">
				@error('vozvrat_avtor')
					<p class="mistake">{{ $message }}</p>
				@enderror
			</div>












		
			<br>
			<button class="btn btn-info m-1 px-5 radius-30" type="submit">Сохранить</button>
			<a href="{{ route('dashboard.meta.home') }}" class="btn btn-outline-info m-1 px-5 radius-30" type="submit">Назад</a>

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