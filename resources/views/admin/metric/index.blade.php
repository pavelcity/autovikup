@extends('layouts.admin')
@section('title', 'Метрики')




@section('content')

{{-- breadcrumb --}}
<div class="row">
	<div class="col-12">
		<div class="card radius-15">
			<div class="card-body">
				<div class="page-breadcrumb d-none d-md-flex align-items-center mb-0">
					<div class="breadcrumb-title pr-3">Метрики</div>
					<div class="pl-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class='bx bx-home-alt'></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard.home') }}">Главная</a></li>
								<li class="breadcrumb-item active" aria-current="page">Метрики</li>
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
			<h3>Метрики <span style="font-size: 16px;">(яндекс-гугл метрика, карта, pixel)</span></h3>

			@php
				$res = count($metrics)
			@endphp

			@if($res != 1)
			<a href="{{ route('dashboard.metric.create') }}" class="btn btn-outline-info m-1 px-5 radius-30">Создать</a>
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
						<th scope="col">Данные</th>
						<th style="width: 200px;"></th>
					</tr>
				</thead>

				<tbody>

					@php
						$i = 1;
					@endphp

					@if(true)
					@foreach($metrics as $metric)
					<tr>
						<th scope="row">{{ $i++ }}</th>
						<td>{{ $metric->yandexmetrika ?? 'изменить' }}</td>

						<td>
							<div class="btn-group m-1" role="group" aria-label="Basic example">
								<a href="{{ route('dashboard.metric.edit', $metric->id) }}" type="button" class="btn btn-sm btn-info">редактировать</a>
								<a href="{{ route('dashboard.metric.delete', $metric->id) }}" onclick="return confirm('удалить?')" type="button" class="btn btn-sm btn-outline-danger">удалить</a>
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