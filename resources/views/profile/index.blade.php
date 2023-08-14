@extends("layouts.index")
@section('content')
	<div class="row">
		<div class="col-md-12">
			<form action="{{route('profile.district')}}" method="post" >
				@csrf()
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">District Details</h5>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<label  class="form-label">District Number</label>
								<input type="text" name="district_number" value="{{auth()->user()->district->district_number}}" class="form-control" required>
								<div class="form-text"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label  class="form-label">DRR Name</label>
								<input type="text" name="drr_name" value="{{auth()->user()->district->drr_name}}" class="form-control" required>
								<div class="form-text"></div>
							</div>
							<div class="col-md-6">
								<label  class="form-label">DRS Name</label>
								<input type="text" name="drs_name" value="{{auth()->user()->district->drs_name}}" class="form-control" required>
								<div class="form-text"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label  class="form-label">Description</label>
								<textarea type="text" name="description" class="form-control" required>{{auth()->user()->district->description}}</textarea>
								<div class="form-text"></div>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-md-12 text-end">
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">Profile Details & Cover Details</h5>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<label  class="form-label">Profile Photo</label>
							<input type="file" class="form-control">
							<div class="form-text"></div>
						</div>
						<div class="col-md-6">
							<label  class="form-label">Cover Photo</label>
							<input type="file" class="form-control">
							<div class="form-text"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 text-end">
							<button class="btn btn-primary">Upload</button>
						</div>
						<div class="col-md-6 text-end">
							<button class="btn btn-primary">Upload</button>							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">Past DRRs</h5>
				</div>
				<div class="card-body">
					@if($pdrrs != null && $pdrrs->count() != 0)
						@forelse ($pdrrs as $pdrrrow)
							<div class="row">
								<div class="col-md-4">
									<label  class="form-label">Name</label><br/>
									<h4 >{{$pdrrrow->name}}</h4>
									<div class="form-text"></div>
								</div>
								<div class="col-md-4">
									<label  class="form-label">Year</label><br/>
									<h4 >{{$pdrrrow->year}}</h4>
									<div class="form-text"></div>
								</div>
								<div class="col-md-2">
									<label  class="form-label">Picture</label>
									<img class="img-fluid" src="{{$pdrrrow->image}}" alt="" width="100%">
									<div class="form-text"></div>
								</div>
								<div class="col-md-2">
									<form action="{{route('districts.pdrrs.destroy', ['district' => auth()->user()->district, 'pdrr' => $pdrrrow])}}" method="post">
										@csrf()
										@method('DELETE')
										<button class="btn btn-danger">Delete</button>
									</form>
								</div>
							</div>
						@empty
						@endforelse
					@endisset
					<form action="{{route('districts.pdrrs.store', ['district' => auth()->user()->district])}}" method="post" enctype="multipart/form-data" >
						@csrf()
						<div class="row">
							<div class="col-md-6">
								<label  class="form-label">Name</label>
								<input type="text" class="form-control" name="name">
								<div class="form-text"></div>
							</div>
							<div class="col-md-4">
								<label  class="form-label">Year</label>
								<input type="text" class="form-control" name="year">
								<div class="form-text"></div>
							</div>
							<div class="col-md-2">
								<label  class="form-label">Picture</label>
								<input type="file" class="form-control" name="image">
								<div class="form-text"></div>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-md-12 text-end">
								<button class="btn btn-primary">Add</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection