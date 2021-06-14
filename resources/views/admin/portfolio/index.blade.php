@extends('layouts.admin')
@section('title', 'Портфолио')




@section('content')

{{-- breadcrumb --}}
<div class="row">
	<div class="col-12">
		<div class="card radius-15">
			<div class="card-body">
				<div class="page-breadcrumb d-none d-md-flex align-items-center mb-0">
					<div class="breadcrumb-title pr-3">Портфолио</div>
					<div class="pl-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class='bx bx-home-alt'></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard.home') }}">Главная</a></li>
								<li class="breadcrumb-item active" aria-current="page">Портфолио</li>
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
		<div class="create_button_wrap">
			<h3>Портфолио </h3>

			@php
				$res = count($folios)
			@endphp


			@if($res != 1000)
				<a href="{{ route('dashboard.photogallery.create') }}" class="btn btn-outline-info m-1 px-5 radius-30">Создать</a>
			@endif

		</div>
	</div>
</div>
<br>



 

<div class="card radius-15">
	<div class="card-body">
		<div class="table-responsive">
			<table class="table mb-0">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Название</th>
						<th scope="col">Фото</th>
						<th style="width: 200px;"></th>
					</tr>
				</thead>

				<tbody>

					@php
						$i = 1;
					@endphp

					@if(true)
					@foreach($folios as $folio)
					<tr>
						<th scope="row">{{ $i++ }}</th>
						<td>{{ $folio->title }}</td>
						<td><img width="120" src="{{ asset($folio->pic ?? 'uploads/not_image.jpg')  }}" alt=""></td>

						<td>
							<div class="btn-group m-1" role="group" aria-label="Basic example">
								<a href="{{ route('dashboard.photogallery.edit', $folio->id) }}" type="button" class="btn btn-sm btn-info">редактировать</a>
								<a href="{{ route('dashboard.photogallery.delete', $folio->id) }}" onclick="return confirm('удалить?')" type="button" class="btn btn-sm btn-outline-danger">удалить</a>
							</div>
						</td>
					</tr>
					@endforeach
					@endif
		



				</tbody>


			</table>
		</div>
	</div>
</div>




@endsection