@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add Reference form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal" action="{{route('reference.new')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Reference ID :</label>
                            <div class="col-9">
                                <input type="number" class="form-control" name="R_id" id="inputEmail3" placeholder="Reference ID"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-3 col-form-label">Name :</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="name" id="inputEmail31" placeholder="Name"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail32" class="col-3 col-form-label">Post :</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="post" id="inputEmail32" placeholder="Post"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail33" class="col-3 col-form-label">Company :</label>
                            <div class="col-9">

                                <input type="text" class="form-control" name="company" id="inputEmail3" placeholder="Company"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail34" class="col-3 col-form-label"> Mobile :</label>
                            <div class="col-9">
                                <input type="number" class="form-control" name="mobile" id="inputEmail3" placeholder="Mobile"/>
                            </div>
                        </div>




                        <div class="justify-content-end row">
                            <div class="col-9">
                                <button type="submit" class="btn btn-info">Create New Reference</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection