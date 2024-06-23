@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add Personal Details form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal" action="{{route('personal.new')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Personal Details ID :</label>
                            <div class="col-9">
                                <input type="number" class="form-control" name="PD_id" id="inputEmail3" placeholder="Personal Details ID"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Name :</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="Name"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail31" class="col-3 col-form-label">Father’s Name :</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="father" id="inputEmail31" placeholder="Father’s Name"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail32" class="col-3 col-form-label">Mother’s Name :</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="mother" id="inputEmail32" placeholder="Mother’s Name"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail33" class="col-3 col-form-label">Permanent Address :</label>
                            <div class="col-9">
                                <textarea class="form-control" name="permanent" id="inputEmail33" cols="50" rows="10" placeholder="Permanent Address"></textarea>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail33" class="col-3 col-form-label">Address :</label>
                            <div class="col-9">
                                <textarea class="form-control" name="address" id="inputEmail33" cols="50" rows="10" placeholder="Address"></textarea>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail33" class="col-3 col-form-label">Date of Birth :</label>
                            <div class="col-9">

                                <input type="text" class="form-control" name="dob" id="inputEmail3" placeholder="Date of Birth"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail34" class="col-3 col-form-label">Gender :</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="gender" id="inputEmail3" placeholder="Gender"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail33" class="col-3 col-form-label">Nationality :</label>
                            <div class="col-9">

                                <input type="text" class="form-control" name="nationality" id="inputEmail3" placeholder="Nationality"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail34" class="col-3 col-form-label">Religion :</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="religion" id="inputEmail3" placeholder="Religion"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail33" class="col-3 col-form-label">Mobile No :</label>
                            <div class="col-9">

                                <input type="number" class="form-control" name="mobile" id="inputEmail3" placeholder="Mobile"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail34" class="col-3 col-form-label">WhatsApp :</label>
                            <div class="col-9">
                                <input type="number" class="form-control" name="whatsApp" id="inputEmail3" placeholder="WhatsApp"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail33" class="col-3 col-form-label">E-mail :</label>
                            <div class="col-9">

                                <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="E-mail"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail34" class="col-3 col-form-label">Portfolio :</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="portfolio" id="inputEmail3" placeholder="Portfolio"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail33" class="col-3 col-form-label">LinkedIn :</label>
                            <div class="col-9">

                                <input type="text" class="form-control" name="linkedIn" id="inputEmail3" placeholder="LinkedIn"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail34" class="col-3 col-form-label">Github :</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="github" id="inputEmail3" placeholder="Github"/>
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