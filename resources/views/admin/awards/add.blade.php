@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add Awards/Achievements form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal" action="{{route('awards.new')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Awards/Achievements ID :</label>
                            <div class="col-9">
                                <input type="number" class="form-control" name="A_id" id="inputEmail3" placeholder="Awards/Achievements ID"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-3 col-form-label">Occasion :</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="occasion" id="inputEmail31" placeholder="Occasion"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail32" class="col-3 col-form-label">Category :</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="category" id="inputEmail32" placeholder="Category"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail33" class="col-3 col-form-label">Position :</label>
                            <div class="col-9">

                                <input type="text" class="form-control" name="position" id="inputEmail3" placeholder="Position"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail34" class="col-3 col-form-label"> Date :</label>
                            <div class="col-9">
                                <input type="date" class="form-control" name="date" id="inputEmail3" placeholder="Date"/>
                            </div>
                        </div>




                        <div class="justify-content-end row">
                            <div class="col-9">
                                <button type="submit" class="btn btn-info">Create New Awards/Achievements</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection