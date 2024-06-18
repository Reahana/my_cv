@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add Employment History form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal" action="{{route('user.new')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Position Name :</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="position" id="inputEmail3" placeholder="Position Name"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-3 col-form-label">Organization Name :</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="organization" id="inputEmail31" placeholder="Organization Name"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail32" class="col-3 col-form-label">Department :</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="department" id="inputEmail32" placeholder="Department"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail33" class="col-3 col-form-label">Responsibilities :</label>
                            <div class="col-9">
                                <input type="number" class="form-control" name="mobile" id="inputEmail33" placeholder="User Mobile"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail34" class="col-3 col-form-label">Starting Date :</label>
                            <div class="col-9">
                                <input type="date" class="form-control" name="starting" id="inputEmail3" placeholder="Starting Date"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmail34" class="col-3 col-form-label">Ending Date :</label>
                            <div class="col-9">
                                <input type="date" class="form-control" name="ending" id="inputEmail3" placeholder="Ending Date"/>
                            </div>
                        </div>


                        <div class="justify-content-end row">
                            <div class="col-9">
                                <button type="submit" class="btn btn-info">Create New Employment History</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
    @endsection