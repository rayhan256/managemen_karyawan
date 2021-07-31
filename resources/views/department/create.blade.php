@extends('layouts/main')
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Tambah Departemen</h1>
        </div>
    </div>
    <div class="row my-4">
        <form action="/cms/department" method="post">
            @csrf
            <div class="form-group">
                <label for="">Nama Departemen</label>
                <input type="text" name="name" class="form-control">
            </div>
            <input type="submit" value="Tambah" class="btn btn-primary">
        </form>
    </div>
@endsection
