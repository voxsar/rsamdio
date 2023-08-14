@extends("layouts.index")
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="page-description">
                    <h1>Add New District</h1>
                    <span>Add a new District and Login Details</span>
                </div>
            </div>
        </div>
        <!-- Add a create form for adding a new district -->
        <form action="{{route('districts.store')}}" method="post">
            @csrf()
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">District Details</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            Show errors here
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">{{ $error }}</div>
                            @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="exampleInputEmail1" class="form-label">District Number</label>
                                    <input type="text" name="district_number" class="form-control" aria-describedby="emailHelp" required>
                                    <div class="form-text"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label">DRR Name</label>
                                    <input type="text" name="drr_name" class="form-control" aria-describedby="emailHelp" required>
                                    <div class="form-text"></div>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label">DRS Name</label>
                                    <input type="text" name="drs_name" class="form-control" aria-describedby="emailHelp" required>
                                    <div class="form-text"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="exampleInputEmail1" class="form-label">Description</label>
                                    <textarea type="text" rows="5" name="description" class="form-control" aria-describedby="emailHelp" required></textarea>
                                    <div class="form-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="exampleInputEmail1" class="form-label">DRR Email</label>
                                    <input type="email" name="drremail" class="form-control" aria-describedby="emailHelp" required>
                                    <div class="form-text"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label">DRR Password</label>
                                    <input type="password" name="drrpassword" class="form-control" aria-describedby="emailHelp" required>
                                    <div class="form-text"></div>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label">DRR Confirm Password</label>
                                    <input type="password" name="drrpassword_confirmation" class="form-control" aria-describedby="emailHelp" required>
                                    <div class="form-text"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="exampleInputEmail1" class="form-label">DRS Email</label>
                                    <input type="email" name="drsemail" class="form-control" aria-describedby="emailHelp" required>
                                    <div class="form-text"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label">DRS Password</label>
                                    <input type="password" name="drspassword" class="form-control" aria-describedby="emailHelp" required>
                                    <div class="form-text"></div>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label">DRS Confirm Password</label>
                                    <input type="password" name="drspassword_confirmation" class="form-control" aria-describedby="emailHelp" required>
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
                </div>
            </div>
        </form>
    </div>
@endsection