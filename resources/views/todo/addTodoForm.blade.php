@extends('layouts.front')

@section('content')
    @include('components.flash')
    <div class="row justify-content-center">
        <div class="col-6 mt-5">
            <form method="post" action="{{ route('addTodo') }}">
                @csrf
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="staticEmail" placeholder="Name" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" name="description" class="form-control" id="inputPassword" placeholder="Description" value="">
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <button type="submit" class="btn btn-primary mt-3 col-4 ">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection