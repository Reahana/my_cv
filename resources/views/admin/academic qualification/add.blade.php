@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add Academic Qualification form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal" action="{{route('academic.new')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Academic Qualification ID :</label>
                            <div class="col-9">
                                <input type="number" class="form-control" name="AQ_id" id="inputEmail3" placeholder="Academic Qualification ID"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Exam Title :</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="exam" id="inputEmail3" placeholder="Exam Title"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-3 col-form-label">Concentration/Major :</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="major" id="inputEmail31" placeholder="Concentration/Major"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail32" class="col-3 col-form-label">Institute :</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="institute" id="inputEmail32" placeholder="Institute"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail33" class="col-3 col-form-label">Result :</label>
                            <div class="col-9">

                                <input type="text" class="form-control" name="result" id="inputEmail3" placeholder="Result"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail34" class="col-3 col-form-label">Pass Year :</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="year" id="inputEmail3" placeholder="Pass Year"/>
                            </div>
                        </div>




                        <div class="justify-content-end row">
                            <div class="col-9">
                                <button type="submit" class="btn btn-info">Create New Academic Qualification</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection