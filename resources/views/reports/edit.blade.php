@extends("layouts.index")
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="page-description">
                    <h1>Edit Quarterly Report</h1>
                    <span>Edit a new Quarterly Report</span>
                </div>
            </div>
        </div>
		<form action="{{route('reports.update', $report)}}" method="post">
			@csrf()
            @method('PATCH')
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">Edit Quarterly Report</h5>
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
                                    <input type="text" name="total_rotaract_clubs" value="{{$report->total_rotaract_clubs}}" class="form-control" required>
                                    <div class="form-text"></div>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Total Rotaract Clubs</label>
                                    <input type="text" name="total_rotaractors" value="{{$report->total_rotaractors}}" class="form-control" required>
                                    <div class="form-text"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label  class="form-label">Total Charter Clubs</label>
                                    <input type="text" name="total_charter_clubs" value="{{$report->total_charter_clubs}}" class="form-control" required>
                                    <div class="form-text"></div>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Total New Rotaract</label>
                                    <input type="text" name="total_new_rotaractors" value="{{$report->total_new_rotaractors}}" class="form-control" required>
                                    <div class="form-text"></div>
                                </div>
                            </div>
						</div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <label  class="form-label">Total Club Service Projects</label>
                                    <input type="text" name="total_club_service_projects" value="{{$report->total_club_service_projects}}" class="form-control" required>
                                    <div class="form-text"></div>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Total Community Service Projects</label>
                                    <input type="text" name="total_community_service_projects" value="{{$report->total_community_service_projects}}" class="form-control" required>
                                    <div class="form-text"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label  class="form-label">Total International Service Projects</label>
                                    <input type="text" name="total_international_service_projects" value="{{$report->total_international_service_projects}}" class="form-control" required>
                                    <div class="form-text"></div>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Total Professional Development Service Projects</label>
                                    <input type="text" name="total_professional_development_service_projects" value="{{$report->total_professional_development_service_projects}}" class="form-control" required>
                                    <div class="form-text"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label  class="form-label">Total Other Service Projects</label>
                                    <input type="text" name="total_other_service_projects" value="{{$report->total_other_service_projects}}" class="form-control" required>
                                    <div class="form-text"></div>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">District Newsletter Link</label>
                                    <input type="url" name="district_newsletter_link" value="{{$report->district_newsletter_link}}" class="form-control" required>
                                    <div class="form-text"></div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">

                                </div>
                                <div class="col-md-6">
                                    <input class='btn btn-primary' type="submit" value="Update Report">
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>
            
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6">
					        <h5 class="card-title">Club Project</h5>
                        </div>
						<div class="col-md-6 text-end">
                            <a href="{{route('reports.cp.create', $report)}}" class="btn btn-primary">Add Club Project</a>
                        </div>
                    </div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
                            <table class="display datatable1" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Avenue of Service</th>
                                        <th>Area of Focus</th>
                                        <th>Project</th>
                                        <th>Income</th>
                                        <th>Expense</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($report->clubProjects as $project)
                                        <tr>
                                            <td>{{$project->avenue_of_service}}</td>
                                            <td>{{$project->area_of_focus}}</td>
                                            <td>{{$project->project_name}}</td>
                                            <td>{{$project->income}}</td>
                                            <td>{{$project->expense}}</td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
						</div>
					</div>
				</div>
			</div>
            
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6">
                            <h5 class="card-title">District Project</h5>
                        </div>
						<div class="col-md-6 text-end">
                            <a href="{{route('reports.dp.create', $report)}}" class="btn btn-primary">Add District Project</a>
                        </div>
                    </div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
                            <table class="display datatable1" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Avenue of Service</th>
                                        <th>Area of Focus</th>
                                        <th>Project</th>
                                        <th>Income</th>
                                        <th>Expense</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($report->clubProjects as $project)
                                        <tr>
                                            <td>{{$project->avenue_of_service}}</td>
                                            <td>{{$project->area_of_focus}}</td>
                                            <td>{{$project->project_name}}</td>
                                            <td>{{$project->income}}</td>
                                            <td>{{$project->expense}}</td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
						</div>
					</div>
				</div>
			</div>

		</form>
    </div>
@endsection