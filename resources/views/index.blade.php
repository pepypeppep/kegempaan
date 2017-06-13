@extends('default')
@section('content')

<div class="panel panel-primary">

	<div class="panel-heading">
		    <h3 class="panel-title" style="padding:12px 0px;font-size:25px;">
		    	<center>
		    		<strong>Cari Data</strong>
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
						<div class="filter">
							<h4>Cari berdasarkan :</h4>
							<div class="form-group">
	                            <form action="" method="post">
									<input type="checkbox" name="cBulan" value="Bulan">Bulan<br/>
									<input type="checkbox" name="cKabupaten" value="Kabupaten">Kabupaten<br/>
									<input type="checkbox" name="cProvinsi" value="Provinsi">Provinsi<br/>
									<input type="checkbox" name="cMag" value="Mag">Magnitude<br/>
									<input type="checkbox" name="cKedalaman" value="Kedalaman">Kedalaman<br/>
									<input type="submit" name="enter" value="Enter">
								</form>
                            </div>
						</div>
						<br/>
				    	<table class="table table-bordered table-hover table-condensed tfix">
					    	<thead align="center">
					    	<tr>
					    		<td><b>TANGGAL</b></td>
					    		<td><b>WAKTU (UTC)</b></td>
					    		<td><b>LINTANG</b></td>
					    		<td><b>BUJUR</b></td>
					    		<td><b>KEDALAMAN (KM)</b></td>
					    		<td><b>MANITUDE</b></td>
					    		<td><b>MLv</b></td>
					    		<td><b>X</b></td>
					    		<td><b>Y</b></td>
					    		<td><b>Z</b></td>
					    		<td colspan="3"><b>KETERANGAN</b></td>
							</tr>
							</thead>
						@foreach($dataList as $key => $view)
							<tr align="center">
								<td>{{ $view->tanggal }}</td>
								<td>{{ $view->waktu }}</td>
								<td>{{ $view->lintang }}</td>
								<td>{{ $view->bujur }}</td>
								<td>{{ $view->kedalaman }}</td>
								<td>{{ $view->mag }}</td>
								<td>{{ $view->mlv }}</td>
								<td>{{ $view->x }}</td>
								<td>{{ $view->y }}</td>
								<td>{{ $view->z }}</td>
								<td>{{ $view->keterangan }}</td>
							</tr>
						@endforeach
						</table>
						<?php echo $dataList->render(); ?>
				<br/>
		    	<h3>Export File From Database:</h3>
		    	<div style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 20px;">
		    		<a href="{{ url('downloadExcel/xls') }}"><button class="btn btn-warning btn-lg">Cetak Peta</button></a> 
		    		<a href="{{ route('pdfview',['download'=>'pdf']) }}"><button class="btn btn-danger btn-lg">Unduh sebagai PDF</button></a>	 		
					<a href="{{ url('downloadExcel/xlsx') }}"><button class="btn btn-success btn-lg">Unduh sebagai Excel</button></a>
		    	</div>
		    	<br/>
				</center>
		  </div>
</div>	 		
@stop