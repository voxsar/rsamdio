@extends("layouts.index")
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="page-description">
                    <h1>List of Reports</h1>
                    <span>All Reports in the Select District</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <table id="datatable1" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Report ID</th>
                                    <th>Total Rotaract Clubs</th>
                                    <th>Total Rotaractors</th>
                                    <th>Total Charter Clubs</th>
                                    <th>Total New Rotaractors</th>
                                    <!--<th>Total Club Service Projects</th>
                                    <th>Total Community Service Projects</th>
                                    <th>Total International Service Projects</th>
                                    <th>Total Professional Development Service Projects</th>
                                    <th>Total Other Service Projects</th>-->
                                    <th>District Newsletter Link</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($reports as $report)
                                    <tr>
                                        <td>{{$report->id}}</td>
                                        <td>{{$report->total_rotaract_clubs}}</td>
                                        <td>{{$report->total_rotaractors}}</td>
                                        <td>{{$report->total_charter_clubs}}</td>
                                        <td>{{$report->total_new_rotaractors}}</td>
                                        <!--<td>{{$report->total_club_service_projects}}</td>
                                        <td>{{$report->total_community_service_projects}}</td>
                                        <td>{{$report->total_international_service_projects}}</td>
                                        <td>{{$report->total_professional_development_service_projects}}</td>
                                        <td>{{$report->total_other_service_projects}}</td>-->
                                        <td><a target='_blank' href="{{$report->district_newsletter_link}}">View Newsletter</a></td>
                                        <td>
                                            <a href="{{route('reports.dp.create', $report)}}" class="btn w-100 btn-primary btn-sm mt-2">Add District Projects</a><br/>
                                            <a href="{{route('reports.cp.create', $report)}}" class="btn w-100 btn-primary btn-sm mt-2">Add Club Projects</a><br/>
                                            <a href="{{route('reports.show', $report)}}" class="btn w-auto btn-primary btn-sm mt-2">View</a>
                                            <a href="{{route('reports.edit', $report)}}" class="btn w-auto btn-warning btn-sm mt-2">Edit</a>
                                            <form action="{{route('reports.destroy', $report)}}" class="w-33" method="POST" style="display:inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn w-100 btn-danger btn-sm  mt-2">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection