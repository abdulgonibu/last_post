@extends('layouts.home')
@section('contain')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User Group</h6>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="{{ route('group.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">User Group Title</label>
                            <input type="text" class="form-control" name="title" id="title"
                                aria-describedby="emailHelp" placeholder="Group Title">
                            <small id="emailHelp" class="form-text text-muted">Please Enter Your Group Title.</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    @endsection
