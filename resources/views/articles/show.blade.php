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
	@if ($article->id > 1)
			<a href="{{ route('articles.show', ['article' => $prev]) }}"><i class="fas fa-chevron-left"></i></a>	
	@endif

	@if ($article->id < $max)
			<a href="{{ route('articles.show', ['article' => $next]) }}"><i class="fas fa-chevron-right"></i></a>
	@endif
		
	
	

@endsection