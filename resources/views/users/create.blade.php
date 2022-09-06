@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Users</div>

                <div class="card-body">


                    @if (count($errors) > 0)
                        @foreach ($errors->all() as $error)

                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <div class="alert alert-danger" role="alert">
                                        {{ $error }}
                                      </div>
                                </li>
                            </ul>

                        @endforeach
                    @endif
                    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- <div class="form-group">
                          <label for="photo">Photo</label>
                          <input type="file" class="form-control" name="photo">
                        </div> --}}
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" class="form-control" name="name" placeholder="Type Name">
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label><br>
                          <input type="text" class="form-control" name="email" placeholder="Type Email">
                        </div>
                        {{-- <label for="github">Email : Github</label>
                        <input type="text" class="form-control" name="github" placeholder="Type Email"> --}}
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('users') }}" class="btn btn-secondary ">Back</a>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
