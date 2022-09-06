@extends('layouts.home')
@section('contain')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create User</h6>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{-- <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:">
            <use xlink:href="#exclamation-triangle-fill" />
        </svg> --}}
                @foreach ($errors->all() as $error)
                    <span>{{ $error }}<br /> </span>
                @endforeach

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
    </div>
    @endif
    <div class="card-body">
        <div class="row justify-content-center">
            <div class="col-md-6">
                {!! Form::open(['route' => 'users.store', 'method' => 'post']) !!}
                @csrf

                <div class="form-group row">
                    <label for="group" class="col-sm-3 col-form-label block"> User Group <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        {{ Form::select('group_id', $groups, null, ['class' => 'form-control', 'id' => 'group']) }}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Name <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Type Your Name']) !!}
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        {!! Form::text('email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Type Your Email']) !!}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                    <div class="col-sm-9">
                        {!! Form::text('phone', null, ['class' => 'form-control', 'id' => 'phone', 'placeholder' => 'Type Your Phone']) !!}
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-sm-3 col-form-label">Address</label>
                    <div class="col-sm-9">
                        {!! Form::text('address', null, [
                            'class' => 'form-control',
                            'id' => 'address',
                            'placeholder' => 'Type Your Address',
                        ]) !!}
                    </div>
                </div>
                <div class="mt-3 text-right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                {!! Form::close() !!}

            </div>
        </div>

    </div>
@endsection
