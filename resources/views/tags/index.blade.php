@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Tag</div>

                <div class="card-body">

                    @if ($tags->count()>0)

                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        @foreach ($tags as $tag)

                            <tbody>
                            <tr>
                                <th scope="row">{{ $tag->id }}</th>
                                <td>{{ $tag->tag }}</td>
                                <td>
                                    <a href="{{ route('tag.edit', ['id' => $tag->id]) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('tag.delete', ['id' => $tag->id]) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            </tbody>

                        @endforeach

                        @else
                        <tr>
                            <th><div class="alert alert-danger" class="text-center">No Tags</div><th>
                        </tr>
                        <a href="{{ route('tag.create') }}" class="btn btn-success">Create</a>
                      @endif

                    </table>
                    <a href="{{ route('tag.create') }}" class="btn btn-success">Create</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
