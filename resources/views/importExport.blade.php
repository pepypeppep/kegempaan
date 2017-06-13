@extends('default')
@section('content')
	<div class="container">		
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title" style="padding:12px 0px;font-size:25px;">
		    	<center>
		    		<strong>Unggah File</strong>
		    	</center>
		    </h3>
		  </div>


		  <div class="panel-body">
		  		@if ($message = Session::get('success'))
					<div class="alert alert-success" role="alert">
						{{ Session::get('success') }}
					</div>
				@endif
				@if ($message = Session::get('error'))
					<div class="alert alert-danger" role="alert">
						{{ Session::get('error') }}
					</div>
				@endif
				<center>
				<form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 20px;" action="{{ URL::to('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
					<input type="file" name="import_file" />
					{{ csrf_field() }}
					<br/>
					<button class="btn btn-success">Unggah File File</button>
					<br/>
					<h10>(File yang dapat diunggah berupa .xlsx)</h10>
				</form>
				</center>
		  </div>
		  <div class="panel-body">
		  	<center>
		  		<h5>Contoh format file yang benar :</h5>
		  		<img src="{!! asset('assets/image/format_file.png') !!}"/>
		  	</center>
		  </div>
		</div>
	</div>
	@stop