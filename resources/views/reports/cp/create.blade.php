@extends("layouts.index")
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="page-description">
                    <h1>Add Club Project</h1>
                    <span>Add a club project</span>
                </div>
            </div>
        </div>
		<form action="{{route('reports.cp.store', $report)}}" method="post" enctype="multipart/form-data">
			@csrf()
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">New Club Project</h5>
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
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <label  class="form-label">Avenue of Service</label>
                                    <input type="text" name="avenue_of_service" value="0" class="form-control" required>
                                    <div class="form-text"></div>
                                </div>
                                <div class="col-md-4">
                                    <label  class="form-label">Area of Focus</label>
                                    <input type="text" name="area_of_focus" value="0" class="form-control" required>
                                    <div class="form-text"></div>
                                </div>
                                <div class="col-md-4">
                                    <label  class="form-label">Project Name</label>
                                    <input type="text" name="project_name" class="form-control" required>
                                    <div class="form-text"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label  class="form-label">Income</label>
                                    <input type="text" name="income" value="0" class="form-control" required>
                                    <div class="form-text"></div>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Expense</label>
                                    <input type="text" name="expense" value="0" class="form-control" required>
                                    <div class="form-text"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label  class="form-label">Project Description</label>
                                    <textarea type="text" rows="5" name="project_description" class="form-control" required></textarea>
                                    <div class="form-text"></div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12 text-end">
                                    <input class="btn btn-primary" type="submit" value="Add Project">
                                </div>
                            </div>
						</div>
					</div>
                </div>
            </div>
            <div class="card">
				<div class="card-header">
					<h5 class="card-title">Add Images</h5>
				</div>
				<div class="card-body">
					<div class="row">
                        <div class="col-md-12 add_images">
                            <div class="row">
                                <div class="col-md-10">
                                    <label  class="form-label">Image</label><br/>
                                    <input type="file" name="project_images[]" class="form-control" required>
                                </div>
                                <div class="col-md-2 text-end">
                                    <label  class="form-label">&nbsp;</label><br/>
                                    <a class="btn w-100 btn-primary p-2 addimagebtn" type="submit">Add Image</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('.addimagebtn').click(function(){
                $('.add_images').prepend($('#imagehtml').html());
            });

            $(document).on('click', '.btn-danger', function(){
                $(this).parent().parent().remove();
            });
        });
    </script>
    <script type="text/html" id="imagehtml">
        <div class="row">
            <div class="col-md-10">
                <label  class="form-label">Image</label><br/>
                <input type="file" name="project_images[]" class="form-control" required>
            </div>
            <div class="col-md-2 text-end">
                <label  class="form-label">&nbsp;</label><br/>
                <a class="btn w-100 btn-danger p-2" type="submit">Remove Image</a>
            </div>
        </div>
    </script>
@endpush