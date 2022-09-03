@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Category</div>

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
                    <form action="{{ route('category.update', ['id' => $categorys->id]) }}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="title">Name</label>
                          <input type="text" class="form-control" name="name" value="{{ $categorys->name }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Upadte</button>
                        <a href="{{ route('category') }}" class="btn btn-secondary ">Back</a>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
