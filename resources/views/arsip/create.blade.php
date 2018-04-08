@extends ('template')

@section('main')
	<div id="arsip">
		<h2>Tambah Arsip</h2>

		@include('errors.form_error_list')

		{!! Form::open(['url'=>'arsip']) !!}
			<div class="form-group">
				{!! Form::label('no_dokumen', "No Dokumen", ['class'=>'control-label']) !!}
				{!! Form::text('no_dokumen', null, ['class'=>'form-control']) !!}
				</div>
	
	
			<div class="form-group">
				{!! Form::label('negara', "Negara", ['class'=>'control-label']) !!}
				{!! Form::text('negara', null, ['class'=>'form-control']) !!}
				</div>

			<div class="form-group">
				{!! Form::label('tahun', "Tahun", ['class'=>'control-label']) !!}
				{!! Form::text('tahun', null, ['class'=>'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('judul', "Judul Dokumen", ['class'=>'control-label']) !!}
				{!! Form::text('judul', null, ['class'=>'form-control']) !!}
			</div>


			<div class="form-group">
				{!! Form::label('tipe', "Tipe Dokumen:", ['class'=>'control-label']) !!}
				<div class="radio">
					<label>{!! Form::radio('tipe', 'Rahasia') !!}Rahasia</label>
				</div>
				<div class="radio">
					<label>{!! Form::radio('tipe', 'Umum') !!}Umum</label>
				</div>	
			</div>

			<div class="form-group">
				{!! Form::submit('Tambah Arsip', ['class'=>'btn btn-primary form-control']) !!}
			</div>

		{!! Form::close()!!}
	</div>
@stop

@section('footer')
	@include('footer')
@stop