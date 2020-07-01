@extends('layouts.app')
@section('content')

<div class="container">
	<h4 class="p-3 mb-2 bg-secondary text-white">Input Data Kategori</h4>
	<form method="post" action="{{url('/category')}}">
	@csrf
		<table>
			<tr>
				<td>NAMA</td>
				<td><input type="text" name="cat_name" class="form-control"></td>
			</tr>
			<tr>
				<td>KETERANGAN</td>
				<td><input type="text" name="cat_text" class="form-control"></td>
			</tr>
			

			<tr>
				<td></td>
			<td><button type="submit" class="btn btn-success">SIMPAN</button></td>
			</tr>
		</table>

	</form>
</div>

@endsection