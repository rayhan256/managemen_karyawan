@extends('layouts/main')
@section('content')
    <div class="row my-3">
        <div class="col-12">
            <h1>Tambah Pegawai</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('employee.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Nama Karyawan</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="address" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Masuk Tanggal</label>
                    <input type="date" name="join_date" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Sampai</label>
                    <input type="date" name="until_date" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Departemen</label>
                    <select name="department_id" class="form-control">
                        @foreach ($data as $i)
                            <option value="{{ $i->id }}">{{ $i->name }}</option>
                        @endforeach
                    </select>
                </div>
                <input type="submit" value="Tambah Karyawan" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection
