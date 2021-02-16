@extends('layout.template')

@section('css')
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('main')
	<div class="container">
		<table class="table table-dark table-striped table-bordered">
			@foreach ($article->getAttributes() as $key => $item)
				<tr>
					<td>{{ $key }}</td>
					<td>{{ $item }}</td>
				</tr>
			@endforeach
		</table>
	</div>

@endsection