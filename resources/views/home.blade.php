
@extends('template')

@section('content')
	<body>
	  <br>
	  <br>
	  <br>
	  <br>
      <div class="container">

         <section class="jumbotron text-center">
            <div class="container">
               <h1 class="jumbotron-heading">UD.Mandala Giri</h1>
			   
			    @if(Auth::user())
				

					<p class="lead text-muted"> Anda Sudah Masuk, {{Auth::user()->name}}!</p>
					<br>
					<p>
						<a href="{{ route('upload') }}" class="btn btn-primary">Upload Berkas</a>
				   </p>

				@else
				   <p class="lead text-muted">Tempat Penyimpanan Data Khusus</p>
				   <p>
					  <a href="{{ route('login') }}" class="btn btn-primary">Login</a>

				   </p>
				@endif
			   
            </div>
         </section>
      </div>
   
	  <br>
	  <br>
	  <br>
	  <br>
	</body>
@endsection
