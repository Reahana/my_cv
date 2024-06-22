@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add Volunteer Experiences form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal" action="{{route('volunteer.new')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Volunteer Experiences ID :</label>
                            <div class="col-9">
                                <input type="number" class="form-control" name="VE_id" id="inputEmail3" placeholder="Volunteer Experiences ID"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Organization :</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="organization" id="inputEmail3" placeholder="Organization"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-3 col-form-label">Position :</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="position" id="inputEmail31" placeholder="Position"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail32" class="col-3 col-form-label">Starts :</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="starts" id="inputEmail32" placeholder="Starts"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail33" class="col-3 col-form-label">Ends :</label>
                            <div class="col-9">

                                <input type="text" class="form-control" name="ends" id="inputEmail3" placeholder="Ends"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail34" class="col-3 col-form-label">Duration :</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="duration" id="inputEmail3" placeholder="Duration"/>
                            </div>
                        </div>




                        <div class="justify-content-end row">
                            <div class="col-9">
                                <button type="submit" class="btn btn-info">Create New Volunteer Experiences</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection