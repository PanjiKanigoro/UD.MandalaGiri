@extends('template')

@section('content')

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

	<script>
		$(document).ready( function () {
			$('#list-file').DataTable();
		} );
	</script>

	<body>
	  <br>
	  <br>
	  <br>
	  <br>
      <div class="container ">
		<h1> TEMPAT DATA KHUSUS </h1>


			<br>
		<br>
		 <table id="list-file" class="display">
			<thead>
			  <tr>
				<th>Nama File</th>
				<th>Tanggal Perubahan Terakhir</th>
				<th>Detail</th>
			  </tr>
			</thead>
			<tbody>
			@foreach($files as $file)
				<tr>
				<td>{{$file->name}}</td>
				<td>{{$file->updated_at}}</td>
				<td> <a href="{{route(('detail-file'), $file->id)}}"><button type="submit">Detail</button></a></td>
			  </tr>
			@endforeach
			</tbody>
		  </table>

		</div>

	  </div>

	  <br>
	  <br>
	  <br>
	  <br>
	</body>
@endsection
