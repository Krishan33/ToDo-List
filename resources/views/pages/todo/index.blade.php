@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="page-title">To-Do List<h1>
        </div>
        <div class="col-lg-12 mt-5">
            <form action="{{ route('todo.store') }}" method="POST" enctype="multipart/form">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <input class="form-control" type="text" name="title" placeholder="Enter Task" aria-label="default input example">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col lg-12 mt-5">
            <div>
                <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $key => $task)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $task->title }}</td>
                            <td>
                                @if ($task->done == 0)
                                <span class="badge text-bg-secondary">Not completed</span>
                                @else
                                <span class="badge text-bg-success">Completed</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('todo.delete', $task->id) }}" class="btn btn-danger">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                                <a href="{{ route('todo.done', $task->id) }}" class="btn btn-success">
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                </a>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
        </div>
    </div>

@endsection

@push('css')
<style>
    .page-title {
        padding-top: 10vh;
        font-size: 3rem;
        color: rgb(49, 196, 201);
    }
</style>

@endpush
