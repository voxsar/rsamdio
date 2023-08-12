@extends("layouts.index")
@section('content')
<form action="">
	<div class="card">
		<div class="card-header">
			<h5 class="card-title">Basic Input</h5>
		</div>
		<div class="card-body">
			<p class="card-description">Here’s a quick example to demonstrate simple input field. Add <code>.light-focus</code> to <code>.form-control</code> to get lighter border on focus.</p>
			<div class="example-container">
				<div class="example-content">
					<label for="exampleInputEmail1" class="form-label">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
				</div>
				<div class="example-code">
					<pre><code class="html">&lt;label for=&quot;exampleInputEmail1&quot; class=&quot;form-label&quot;&gt;Email address&lt;/label&gt;
&lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;exampleInputEmail1&quot; aria-describedby=&quot;emailHelp&quot;&gt;
&lt;div id=&quot;emailHelp&quot; class=&quot;form-text&quot;&gt;We'll never share your email with anyone else.&lt;/div&gt;</code></pre>
				</div>
			</div>
		</div>
	</div>
</form>
@endsection