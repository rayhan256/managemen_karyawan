@extends('layouts/main')
@section('content')
    <div class="row my-3">
        <div class="col-12">
            <h1>Edit Departemen</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('department.update', $data->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Nama Departemen</label>
                    <input type="text" name="name" class="form-control" value="{{ $data->name }}">
                </div>
                <input type="submit" value="Update Departemen" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection
