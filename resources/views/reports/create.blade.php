@extends("layouts.index")
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="page-description">
                    <h1>New Quarterly Report</h1>
                    <span>Add a new quarterly report</span>
                </div>
            </div>
        </div>
		<form action="{{route('reports.store')}}" method="post">
			@csrf()
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">New Quarterly Report</h5>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							@foreach ($errors->all() as $error)
								<div class="alert alert-danger">{{ $error }}</div>
							@endforeach
						</div>
					</div>
					<div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <label  class="form-label">Total Rotaract Clubs</label>
                                    <input type="text" name="total_rotaract_clubs" class="form-control" required>
                                    <div class="form-text"></div>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Total Rotaract Clubs</label>
                                    <input type="text" name="total_rotaractors" class="form-control" required>
                                    <div class="form-text"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label  class="form-label">Total Charter Clubs</label>
                                    <input type="text" name="total_charter_clubs" class="form-control" required>
                                    <div class="form-text"></div>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Total New Rotaract</label>
                                    <input type="text" name="total_new_rotaractors" class="form-control" required>
                                    <div class="form-text"></div>
                                </div>
                            </div>
						</div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <label  class="form-label">Total Club Service Projects</label>
                                    <input type="text" name="total_club_service_projects" class="form-control" required>
                                    <div class="form-text"></div>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Total Community Service Projects</label>
                                    <input type="text" name="total_community_service_projects" class="form-control" required>
                                    <div class="form-text"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label  class="form-label">Total International Service Projects</label>
                                    <input type="text" name="total_international_service_projects" class="form-control" required>
                                    <div class="form-text"></div>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Total Professional Development Service Projects</label>
                                    <input type="text" name="total_professional_development_service_projects" class="form-control" required>
                                    <div class="form-text"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label  class="form-label">Total Other Service Projects</label>
                                    <input type="text" name="total_other_service_projects" class="form-control" required>
                                    <div class="form-text"></div>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">District Newsletter Link</label>
                                    <input type="url" name="district_newsletter_link" class="form-control" required>
                                    <div class="form-text"></div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">

                                </div>
                                <div class="col-md-6">
                                    <input class='btn btn-primary' type="submit" value="Create Report">
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</form>
    </div>
@endsection