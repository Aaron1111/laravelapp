@extends('template')

@section('main')
<div.id="arsip">
	<h2>Data Arsip</h2>

	@include('_partial.flash_message')

	
	<table class="table">
		<thead>
			<tr>
				<th>No Dokumen</th>
				<th>Negara</th>
				<th>Tahun</th>
				<th>Judul</th>
				<th>Tipe</th>
				<th>Action</th>
			</tr>
		</thead>
	<tbody>
		@if (($jumlah_arsip) > 0)
		@foreach ($arsip_list as $arsip)
			<tr>
				<td>{{$arsip->no_dokumen}}</td>
				<td>{{$arsip->negara}}</td>
				<td>{{$arsip->tahun}}</td>
				<td>{{$arsip->judul}}</td>
				<td>{{$arsip->tipe}}</td>
				<td>
					<div class="box-button">
					{{link_to('arsip/'. $arsip->id, 'Detail', ['class' => 'btn btn-success btn-sm'])}}
				</div>
				<div class="box-button"> 
					{{link_to('arsip/'. $arsip->id. '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm'])}}
				</div>
				<div class="box-button"> 
					{!! Form::open(['method' => 'DELETE', 'action' =>['ArsipController@destroy', $arsip->id]] )!!}
					{!!Form::submit('Delete', ['class'=> 'btn btn -danger btn-sm'])!!}
					{!! Form::close()!!}
				</div>
				</td>
			</tr>
		@endforeach
		@else
		<p> Tidak ada data arsip.</p>
	@endif

	</tbody>
</table>

<div class="table-bottom">
	<div class="float-right">
		{{$arsip_list->links()}}
	</div>
	<div class="float-left">
		<strong>Jumlah Arsip: {{$jumlah_arsip}}</strong>
	</div>
</div>

<div class="bottom-nav">
	<div>
		<a href="arsip/create" class="btn btn-primary">
		Tambah Arsip</a>
	</div>
	</div>
</div.id="arsip">
@stop

@section('footer')
@include('footer')
@stop
