@extends('layouts.front')

@section('content')
@include('components.flash')
    <div class="row justify-content-center">
        <div class="col-6 mt-5">
            <label for="staticEmail" class="col-sm-2 col-form-label"> <strong>#id</strong> {{ $todo->id }}</label>
            <form method="post" action="{{ route('updateTodo', $todo->id) }}">
                @csrf
                @method("patch")
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="staticEmail" placeholder="Name" value="{{ $todo->name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" name="description" class="form-control" id="inputPassword" placeholder="Description" value="{{ $todo->description }}">
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <button type="submit" class="btn btn-success mt-3 col-4 ">Update</button>
                </div>
            </form>
        </div>
    </div>

@endsection