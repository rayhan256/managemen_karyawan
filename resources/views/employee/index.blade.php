@extends('layouts/main')
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Karyawan</h1>
            <a href="{{ route('employee.create') }}" class="btn btn-primary my-4">Tambah Karyawan</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Tanggal Masuk</th>
                        <th>Tanggal Keluar</th>
                        <th>Departemen</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $index = 1;
                    @endphp
                    @foreach ($data as $i)
                        <tr>
                            <td>{{ $index++ }}</td>
                            <td>{{ $i->name }}</td>
                            <td>{{ $i->address }}</td>
                            <td>{{ $i->join_date }}</td>
                            <td>{{ $i->until_date }}</td>
                            <td>{{ $i->department->name }}</td>
                            <td class="d-flex">
                                <a href="{{ route('employee.edit', $i->id) }}" class="btn btn-primary">Update</a>
                                <form action="{{ route('employee.destroy', $i->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
