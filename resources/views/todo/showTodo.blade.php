@extends('layouts.front')
@section('content')
    @include('components.flash')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">name</th>
            <th scope="col">Description</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>

        </tr>
        </thead>
        <tbody>
        @foreach($todos as $todo)

            <tr>
                <th scope="row">{{$todo->id}}</th>
                <td>{{$todo->name}}</td>
                <td>{{$todo->description}}</td>
                <td><a href="{{ route('showUpdateTodoForm', $todo->id) }}" class="btn btn-warning">Update</a></td>
                <td>
                    <form action="{{ route('deleteTodo', $todo->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

@endsection