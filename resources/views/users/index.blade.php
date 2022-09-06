@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #C7EED8">Users</div>

                <div class="card-body">
                    @if ($users->count()>0)
                    <table class="table">
                        <thead>
                          <tr class="table-success">
                            <th scope="col">#</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th
                                {{-- {{-- <th scope="col">Created_at</th> --}}>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        @foreach ($users as $user)

                            <tbody>
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>
                                    <img src="{{ asset('uploads/avatar/1.png') }}" alt="" class="img-thumbnail" width="80" height="80px">
                                </td>
                                <td>{{ $user->name }}</td>
                                {{-- <td>{{ $user->created_at }}</td>
                                <td>{{ $user->updated_at }}</td> --}}
                                <td>
                                    @if ($user->admin)
                                    <a href="{{ route('users.not.admin', ['id' => $user->id]) }}" class="btn btn-warning">
                                        Make Not Admin
                                    </a>

                                    @else
                                    <a href="{{ route('users.admin', ['id' => $user->id]) }}" class="btn btn-success">
                                        Make Admin
                                    </a>
                                    @endif

                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            </tbody>

                        @endforeach
                        @else
                        <tr>
                            <th><div class="alert alert-danger" class="text-center">No Posts</div><th>
                        </tr>
                      @endif

                    </table>
                    <a href="{{ route('users.create') }}" class="btn btn-success">Create</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
