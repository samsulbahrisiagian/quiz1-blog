@extends('layouts.app')
@section('content')

<div class="container">
	<h4 class="p-3 mb-2 bg-secondary text-white">Data Post</h4>

	<table class="table">
		<thead class="table-success">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">KATEGORI ID</th>
			<th scope="col">TANGGAL</th>
			<th scope="col">SLUG</th>
			<th scope="col">JUDUL</th>
			<th scope="col">KETERANGAN</th>
			<th scope="col">EDIT</th>
		</tr>

		@foreach($rows as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>{{ $row->post_cat_id }}</td>
			<td>{{ $row->post_date }}</td>
			<td>{{ $row->post_slug }}</td>
			<td>{{ $row->post_tittle }}</td>
			<td>{{ $row->post_text }}</td>
			<td>
				<a href="{{ url('post/' . $row->id . '/edit')}}" class="btn btn-outline-success">EDIT</a>
				
				<form action="{{ url('post/' . $row->id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="btn btn-outline-warning">DELETE</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
	<a href="{{ url('post/create') }}" class="btn btn-success">Tambah Data</a>
</div>

@endsection