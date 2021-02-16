@extends('layout.template')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		
@endsection

@section('main')
	
<div class="container my-5">
	<table class="table table-dark table-striped table-bordered">
		<thead>
			<th>ID</th>
			<th>Titolo</th>
			<th>Sottotitolo</th>
			<th>Testo</th>
			<th>Autore</th>
			<th>Pubblicato il</th>
		</thead>
		<tbody>
			@foreach ($articles as $article)
				<tr>
					<td>{{ $article->id }}</td>
					<td>{{ $article->title }}</td>
					<td>{{ $article->subtitle }}</td>
					<td>{{ substr($article->text, 0, 150) }}...</td>
					<td>{{ $article->author }}</td>
					<td>{{ $article->publication_date }}</td>
					<td><a class="btn btn-outline-light" href="{{ route('articles.show', $article->id) }}"><i class="fas fa-search-plus"></i></a></td>
					{{-- <td><a class="btn btn-outline-light" href=""><i class="fas fa-pencil-alt"></i></a></td>
					<td><a class="btn btn-outline-light" href=""><i class="fas fa-trash-alt"></i></a></td> --}}
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection

