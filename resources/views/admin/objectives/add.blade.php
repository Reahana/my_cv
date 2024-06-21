@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add Objectives form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal" action="{{route('objectives.new')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Objectives ID :</label>
                            <div class="col-9">
                                <input type="number" class="form-control" name="O_id" id="inputEmail3" placeholder="Objectives ID"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmail33" class="col-3 col-form-label">Details :</label>
                            <div class="col-9">
                                <textarea class="form-control" name="details" id="inputEmail33" cols="50" rows="10" placeholder="Details"></textarea>

                            </div>
                        </div>




                        <div class="justify-content-end row">
                            <div class="col-9">
                                <button type="submit" class="btn btn-info">Create New Career Objectives</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection