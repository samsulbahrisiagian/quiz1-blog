@extends('layouts.app')
@section('content')

<div class="container">
	<h4 class="p-3 mb-2 bg-secondary text-white">Data Photo</h4>

	<table class="table">
		<thead class="table-success">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">POST ID</th>
			<th scope="col">TANGGAL</th>
			<th scope="col">JUDUL</th>
			<th scope="col">KETERANGAN</th>
			<th scope="col">EDIT</th>
		</tr>

		@foreach($rows as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>{{ $row->pho_post_id }}</td>
			<td>{{ $row->pho_date }}</td>
			<td>{{ $row->pho_tittle }}</td>
			<td>{{ $row->pho_text }}</td>
			<td>
				<a href="{{ url('photo/' . $row->id . '/edit')}}" class="btn btn-outline-success">EDIT</a>
				
				<form action="{{ url('photo/' . $row->id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="btn btn-outline-warning">DELETE</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
	<a href="{{ url('photo/create') }}" class="btn btn-success">Tambah Data</a>
</div>

@endsection