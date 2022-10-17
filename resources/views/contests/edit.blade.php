@extends('layouts.app', ['activePage' => 'contest', 'titlePage' => __('Edit Contest')])
@section('content')



    <div class=" container-fluid mt-5 ">
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
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Edit Contest</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('contests.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('contests.update', $contest->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" value="{{ $contest->name }}" class="form-control"
                                        placeholder="Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Detail:</strong>
                                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $contest->detail }}</textarea>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Date:</strong>
                                    <input type="date" name="date" class="form-control" placeholder="Date"
                                        value="{{ $contest->date }}">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                {{-- <div class="form-group mb-3"> --}}
                                    <strong>Image</strong>
                                    <input type="file" name="image" class="form-control">
                                    <img src="{{ asset('image/'.$contest->image) }}" width="200px" height="200px" alt="Image">
                                {{-- </div> --}}


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






    {{-- </div> --}}
@endsection
