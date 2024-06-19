@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add Training Summary form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal" action="{{route('training.new')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Training Summary ID :</label>
                            <div class="col-9">
                                <input type="number" class="form-control" name="TS_id" id="inputEmail3" placeholder="Training Summary ID"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-3 col-form-label">Topic :</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="topic" id="inputEmail31" placeholder="Topic"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail32" class="col-3 col-form-label">Institute :</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="institute" id="inputEmail32" placeholder="Institute"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail33" class="col-3 col-form-label">Duration :</label>
                            <div class="col-9">

                                <input type="text" class="form-control" name="duration" id="inputEmail3" placeholder="Duration"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail34" class="col-3 col-form-label"> Year :</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="year" id="inputEmail3" placeholder="Year"/>
                            </div>
                        </div>




                        <div class="justify-content-end row">
                            <div class="col-9">
                                <button type="submit" class="btn btn-info">Create New Training Summary</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection