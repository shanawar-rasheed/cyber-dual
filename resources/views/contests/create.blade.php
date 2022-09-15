@extends('layouts.app', ['activePage' => 'contest', 'titlePage' => __('Create Contest')])


@section('content')
    <div class=" container-fluid mt-5 mlr-5">
        <div class="row">
            <div class="card">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon"
                        style="box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(39, 117, 176, 0.4)">
                        <i class="material-icons">dashboard</i>
                    </div>
                    <div class="col-lg-10 margin-tb">
                        <div class="pull-left">
                            <h2>Create New Contest</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('contests.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <form action="{{ route('contests.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Detail:</strong>
                                    <textarea class="form-control" style="height:250px" name="detail" placeholder="Detail"></textarea>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Date:</strong>
                                    <input type="date" name="date" class="form-control" placeholder="Date">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="inputState">Status</label>
                                    <select id="inputState" class="form-control">
                                    <option selected>Choose Status</option>
                                    <option value="1">Active</option>
                                    <option value="2">Close</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 ">
                                <div class="form-group">
                                    <strong>Image:</strong>

                                    <input type="file" name="image" class="form-control" placeholder="image">
                                </div>

                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    {{-- <div class="fileinput-new thumbnail img-raised">
                                        <img src="http://style.anu.edu.au/_anu/4/images/placeholders/person_8x10.png" alt="...">
                                    </div> --}}
                                    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                    <div>
                                        <span class="btn btn-raised btn-round btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image" class="form-control" />
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


@endsection
