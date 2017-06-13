	
<style type="text/css">
	table{
		border-collapse: collapse;
	}
	table td, table th{
		border:2px solid black;
	}
	table th{
		padding: 4px;
		background: grey;
	}
</style>

<div class="container">
	<br/>
	<table class="table table-bordered table-hover table-condensed tfix">
		<tr align="center">
			<th>NO</th>
			<th>TANGGAL</th>
			<th>WAKTU</th>
			<th>LINTANG</th>
			<th>BUJUR</th>
			<th>KEDALAMAN</th>
			<th>MAGNITUDE</th>
			<th>MLv</th>
			<th>x</th>
			<th>y</th>
			<th>z</th>
			<th>KETERANGAN</th>
		</tr>
		@foreach ($infogempas as $key => $item)
		<tr align="center">
			<td>{{ ++$key }}</td>
			<td>{{ $item->tanggal }}</td>
			<td>{{ $item->waktu }}</td>
			<td>{{ $item->lintang }}</td>
			<td>{{ $item->bujur }}</td>
			<td>{{ $item->kedalaman }}</td>
			<td>{{ $item->mag }}</td>
			<td>{{ $item->mlv }}</td>
			<td>{{ $item->x }}</td>
			<td>{{ $item->y }}</td>
			<td>{{ $item->z }}</td>
			<td>{{ $item->keterangan }}</td>
		</tr>
		@endforeach
	</table>
</div>