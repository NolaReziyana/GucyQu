@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        @if ( session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3>Slider List
                    <a href="{{ url('admin/sliders/create') }}" class="btn btn-primary btn-sm  text-white float-end">
                    Add Slider
                    </a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sliders as $slider)
                            <tr>
                                <td> {{ $slider->id }}</td>
                                <td> {{ $slider->title }} </td>
                                <td> {{ $slider->description }} </td>
                                <td> 
                                    <img src="{{ asset("$slider->image") }}" style="width: 70px; height: 70px" alt="Slider">
                                </td>
                                <td>
                                    <input type="checkbox" data-id="{{ $slider->id }}" name="status" class="js-switch" {{ $slider->status == 1 ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <a href="{{ url('admin/sliders/'.$slider->id.'/edit')}}" class="btn btn-success">Edit</a>
                                    <a href="{{ url('admin/sliders/'.$slider->id.'/delete')}}" 
                                        onClick="return confirm('Are you sure want to delete this slider?');"
                                        class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <script>let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
                elems.forEach(function(html) {
                    let switchery = new Switchery(html,  { size: 'small' });
                });
            </script>
        </div>    
    </div>
</div>

@endsection