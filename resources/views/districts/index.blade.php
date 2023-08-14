@extends("layouts.index")
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="page-description">
                    <h1>List of Districts</h1>
                    <span>All Districts in the RSAMDIO</span>
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
                                    <th>District Number</th>
                                    <th>DRR Name</th>
                                    <th>DRS Name</th>
                                    <th>Description</th>
                                    <th>Cover Image</th>
                                    <th>Profile Image</th>
                                    <th>PDRRs</th>
                                    <th>Reports</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($districts as $district)
                                    <tr>
                                        <td>{{$district->district_number}}</td>
                                        <td>{{$district->drr_name}}</td>
                                        <td>{{$district->drs_name}}</td>
                                        <td>{{$district->description}}</td>
                                        <td><img src="{{$district->district_cover_image}}" style='width: 100px;' class="img-thumbnail" alt="District Cover"></td>
                                        <td><img src="{{$district->district_profile_image}}" style='width: 100px;' class="img-thumbnail" alt="District Profile"></td>
                                        <td>{{$district->pdrrs->count()}}</td>
                                        <td><a href="{{route('districts.show', $district->id)}}" class="btn btn-primary btn-sm">View Reports ({{$district->reports->count()}})</a></td>
                                        <td>
                                            <a href="{{route('districts.show', $district->id)}}" class="btn btn-primary btn-sm">View</a>
                                            <a href="{{route('districts.edit', $district->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{route('districts.destroy', $district->id)}}" method="POST" style="display:inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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