@extends('layouts.app', ['activePage' => 'channels', 'titlePage' => __('Edit Channel')])
@section('content')



    <div class=" container-fluid mt-5 mx-3">
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

                <div class="card-header card-header-danger card-header-icon">
                    <div class="card-icon"
                        style="box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(39, 117, 176, 0.4)">
                        <i class="material-icons">dashboard</i>
                    </div>
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Edit Channel</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-danger" href="{{ route('channels.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                         <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" value="{{ $channels->name }}" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Detail:</strong>
                                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $channels->detail }}</textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Image:</strong>
                                    <input type="file" name="image" class="form-control" placeholder="image">
                                    <img src="/image/{{ $channels->image }}" width="300px">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>






    {{-- </div> --}}
@endsection
