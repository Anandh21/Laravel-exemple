@extends('layouts.front')
@section('content')

    @include('Components.flash')
    {{--    <button class="button button-blue" href="{{route('CreateTodo')}}">Create</button>--}}

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">name</th>
            <th scope="col">text</th>
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
                <td><a href="">Update</a></td>
                <td>
                    <form action="" method="post">
                        @csrf
                        @method('Delete')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

@endsection