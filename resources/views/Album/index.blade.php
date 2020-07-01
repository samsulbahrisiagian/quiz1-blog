@extends('layouts.app')
@section('content')

<div class="container">
	<h4 class="p-3 mb-2 bg-secondary text-white">Data Album</h4>

	<table class="table">
		<thead class="table-success">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">PHOTO ID</th>
			<th scope="col">NAMA</th>
			<th scope="col">KETERANGAN</th>
			<th scope="col">EDIT</th>
		</tr>

		@foreach($rows as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>{{ $row->album_pho_id }}</td>
			<td>{{ $row->album_name }}</td>
			<td>{{ $row->album_text }}</td>
			<td>
				<a href="{{ url('album/' . $row->id . '/edit')}}" class="btn btn-outline-success">EDIT</a>
				
				<form action="{{ url('album/' . $row->id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="btn btn-outline-warning">DELETE</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
	<a href="{{ url('album/create') }}" class="btn btn-success">Tambah Data</a>
</div>

@endsection