@extends("layouts.index")
@section('content')
<form action="">
	<div class="card">
		<div class="card-header">
			<h5 class="card-title">Membership</h5>
		</div>
		<div class="card-body">
			<p class="card-description">Here’s a quick example to demonstrate simple input field. Add <code>.light-focus</code> to <code>.form-control</code> to get lighter border on focus.</p>
			<div class="example-container">
				<div class="example-content">
					<label for="exampleInputEmail1" class="form-label">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
				</div>
			</div>
		</div>
	</div>
</form>
@endsection