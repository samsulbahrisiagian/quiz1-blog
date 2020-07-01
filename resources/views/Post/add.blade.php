@extends('layouts.app')
@section('content')

<div class="container">
	<h4 class="p-3 mb-2 bg-secondary text-white">Input Data Post</h4>
	<form method="post" action="{{url('/post')}}">
	@csrf
		<table>
			<tr>
				<td>KATEGORI ID</td>
				<td><input type="text" name="post_cat_id" class="form-control"></td>
			</tr>
			<tr>
				<td>TANGGAL</td>
				<td><input type="date" name="post_date" class="form-control"></td>
			</tr>
			<tr>
				<td>SLUG</td>
				<td><input type="text" name="post_slug" class="form-control"></td>
			</tr>
			<tr>
				<td>JUDUL</td>
				<td><input type="text" name="post_tittle" class="form-control"></td>
			</tr>
			<tr>
				<td>KETERANGAN</td>
				<td><input type="text" name="post_text" class="form-control"></td>
			</tr>

			<tr>
				<td></td>
			<td><button type="submit" class="btn btn-success">SIMPAN</button></td>
			</tr>
		</table>

	</form>
</div>

@endsection