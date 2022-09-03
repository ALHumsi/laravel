@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Category</div>

                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        @foreach ($categories as $category)

                            <tbody>
                            <tr>
                                <th scope="row">{{ $category->id }}</th>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('category.delete', ['id' => $category->id]) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            </tbody>

                        @endforeach
                      </table>
                      <a href="{{ route('category.create') }}" class="btn btn-success">Create</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
