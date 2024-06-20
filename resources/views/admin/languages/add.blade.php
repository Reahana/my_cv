@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add Languages form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal" action="{{route('languages.new')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Languages ID :</label>
                            <div class="col-9">
                                <input type="number" class="form-control" name="L_id" id="inputEmail3" placeholder="Languages ID"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-3 col-form-label">Language Name :</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="name" id="inputEmail31" placeholder="Language Name"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail32" class="col-3 col-form-label">Skill Level :</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="skill" id="inputEmail32" placeholder="Skill Level"/>
                            </div>
                        </div>





                        <div class="justify-content-end row">
                            <div class="col-9">
                                <button type="submit" class="btn btn-info">Create New Languages</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection