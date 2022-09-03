@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts Soft Deleted</div>

                <div class="card-body">
                    @if ($posts->count()>0)
                    <table class="table table-striped">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Restore</th>
                            <th scope="col">Created_at</th>
                            <th scope="col">Updated_at</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                            @foreach ($posts as $post)

                            <tbody>
                            <tr>
                                <th scope="row">{{ $post->id }}</th>
                                <td>{{ $post->title }}</td>
                                <td>
                                    <img src="{{ $post->featured }}" alt="{{ $post->title }}" class="img-thumbnail" width="100px" height="100px">
                                </td>
                                <td>{{ $post->created_at }}</td>
                                <td>{{ $post->updated_at }}</td>
                                <td>
                                    {{-- <a href="{{ route('category.edit', ['id' => $post->id]) }}" class="btn btn-warning">Edit</a> --}}
                                    <a href="{{ route('post.restore', ['id' => $post->id]) }}" class="btn btn-secondary">Restore</a>
                                    <a href="{{ route('post.hdelete', ['id' => $post->id]) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            </tbody>

                        @endforeach
                        @else
                        <tr>
                            <th><div class="alert alert-danger" class="text-center">No Trached Post</div><th>
                        </tr>
                       @endif
                      </table>
                      <a href="{{ route('posts') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
