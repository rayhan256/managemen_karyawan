@extends('layouts/main')
@section('content')
    <div class="row my-3">
        <div class="col-12">
            <h1>Edit Karyawan</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('employee.update', $data->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Nama Karyawan</label>
                    <input type="text" name="name" class="form-control" value="{{ $data->name }}">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="address" class="form-control" value="{{ $data->address }}">
                </div>
                <div class="form-group">
                    <label for="">Masuk Tanggal</label>
                    <input type="date" name="join_date" class="form-control" value="{{ $data->join_date }}">
                </div>
                <div class="form-group">
                    <label for="">Sampai</label>
                    <input type="date" name="until_date" class="form-control" value="{{ $data->until_date }}">
                </div>
                <div class="form-group">
                    <label for="">Departemen</label>
                    <select name="department_id" class="form-control">
                        @foreach ($department as $i)
                            <option value="{{ $i->id }}">{{ $i->name }}</option>
                        @endforeach
                    </select>
                </div>
                <input type="submit" value="Update Karyawan" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection
