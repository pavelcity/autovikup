@extends('layouts.admin')
@section('title', 'Правила | Создать')

 

@section('content')

{{-- breadcrumb --}}
<div class="row">
	<div class="col-12">
		<div class="card radius-15">
			<div class="card-body">
				<div class="page-breadcrumb d-none d-md-flex align-items-center mb-0">
					<div class="breadcrumb-title pr-3">Правила создать</div>
					<div class="pl-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class='bx bx-home-alt'></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard.home') }}">Главная</a></li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard.pravila.home') }}">Правила</a></li>
								<li class="breadcrumb-item active" aria-current="page">Правила создать</li>
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
			<h3>Правила создать</h3>
			<a href="{{ route('dashboard.pravila.home') }}" class="btn btn-outline-info m-1 px-5 radius-30">Назад</a>
		</div>
	</div>
</div>
<br>






<div class="card radius-15 pravilaWrap">
	<div class="card-body">
	

		<form action="{{ route('dashboard.pravila.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
			@csrf




			<div class="mb-5">
				<label for="politics">Текст <b>политики конфиденциальности</b></label>
				@error('politics')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="politics" name="politics" class="form-control" rows="20" cols="3">{{ old('politics') }}</textarea>
			</div>





@if(false)
			<div class="mb-5">
				<label for="oplata">Условия оплаты</label>
				@error('oplata')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="oplata" name="oplata" class="form-control" rows="10" cols="3">{{ old('oplata') }}</textarea>
			</div>


			<div class="mb-5">
				<label for="dostavka">Условия доставки</label>
				@error('dostavka')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="dostavka" name="dostavka" class="form-control" rows="10" cols="3">{{ old('dostavka') }}</textarea>
			</div>

			<div class="mb-5">
				<label for="vozvrat">Условия возврата</label>
				@error('vozvrat')
					<p class="mistake">{{ $message }}</p>
				@enderror
				<textarea id="vozvrat" name="vozvrat" class="form-control" rows="10" cols="3">{{ old('vozvrat') }}</textarea>
			</div>
@endif


	


		
			<br>
			<button class="btn btn-info m-1 px-5 radius-30" type="submit">Создать</button>
			<a href="{{ route('dashboard.pravila.home') }}" class="btn btn-outline-info m-1 px-5 radius-30" type="submit">Назад</a>

		</form>



	</div>
</div>









@push('scripts')
	<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>

	<script>
    ClassicEditor
        .create( document.querySelector('#politics') )
        .catch( error => {
            console.error( error );
        } );
	</script>
	<script>
    ClassicEditor
        .create( document.querySelector('#oplata') )
        .catch( error => {
            console.error( error );
        } );
	</script>
	<script>
    ClassicEditor
        .create( document.querySelector('#dostavka') )
        .catch( error => {
            console.error( error );
        } );
	</script>
	<script>
    ClassicEditor
        .create( document.querySelector('#vozvrat') )
        .catch( error => {
            console.error( error );
        } );
	</script>
@endpush





@endsection