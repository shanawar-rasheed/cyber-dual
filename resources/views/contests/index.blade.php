
@extends('layouts.app', ['activePage' => 'contest', 'titlePage' => __('Contests')])
@section('content')

                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-success">
                                        <h4 class="card-title ">Contest</h4>
                                        <p class="card-category"> Here you can manage channels</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 text-right">
                                                <a href="{{ route('contests.create') }}" class="btn btn-success">Add Contest</a>
                                            </div>
                                        </div>
                                        <div class="table-responsive">

                                            @if ($message = Session::get('success'))
                                                <div class="alert alert-success">
                                                    <p>{{ $message }}</p>
                                                </div>
                                            @endif

                                            <table class="table table-bordered">
                                                <tr class="text-center">
                                                    <th>No</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Details</th>
                                                    <th width="320px">Action</th>
                                                </tr>
                                                @foreach ($contests as $contest)
                                                <tr>
                                                    <td>{{$contest->id }}</td>
                                                    <td><img src="/image/{{ $contest->image }}" width="100px"></td>
                                                    <td>{{ $contest->name }}</td>
                                                    <td>{{ $contest->detail }}</td>
                                                    <td  >
                                                        <form action="{{ route('contests.destroy',$contest->id) }}" method="POST">

                                                            <a class="btn btn-success" href="{{ route('contests.show',$contest->id) }}">Show</a>

                                                            <a class="btn btn-success" href="{{ route('contests.edit',$contest->id) }}">Edit</a>

                                                            @csrf
                                                            @method('DELETE')

                                                            <button type="submit" class="btn btn-success">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="alert alert-danger">
            <span style="font-size:18px;">
              <b> </b> This is a PRO feature!</span>
          </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
              @endsection
