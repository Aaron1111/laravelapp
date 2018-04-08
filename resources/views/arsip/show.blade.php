@extends ('template')

@section ('main')
	<div id="arsip">
		<h2>Detail Siswa</h2>

		<table class="table table-striped">
			<tr>
				<th>No Dokumen</th>
				<td>{{ $arsip->no_dokumen}}</td>
			</tr>
			<tr>
				<th>Negara</th>
				<td>{{ $arsip->negara}}</td>
			</tr>
			<tr>
				<th>Tahun</th>
				<td>{{ $arsip->tahun}}</td>
			</tr>
			<tr>
				<th>Judul</th>
				<td>{{ $arsip->judul}}</td>
			</tr>
			<tr>
				<th>Tipe</th>
				<td>{{ $arsip->tipe}}</td>
			</tr>
		</table>
		</div>
		@stop

		@section('footer')
	@include('footer')
@stop	
			

		</table>
	</div>