@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        @if ( session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <div class="card">
            <div class="card-header">
                <a href="{{ url('admin/colors') }}" class="btn btn-danger btn-sm text-white">Back</a>
                <br>
                <hr>
                <h3>Edit Color</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/colors/'.$color->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class=" col-md-12 mb-3">
                            <label>Color Name</label>
                            <input type="text" name="name" value="{{ $color->name }}" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Color Code</label>
                            <input type="text" name="code" value="{{ $color->code }}" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Status</label><br>
                            <input type="checkbox" name="status" {{ $color->status ? 'checked':'' }} style="width:15px;height:15px"/>
                        </div>
                    </div>
                    <div class="py-2 float-end">
                            <button type="submit" class="btn btn-primary text-white"> Update </button>
                    </div>
                </form>
            </div>
        </div>    
    </div>
</div>

@endsection