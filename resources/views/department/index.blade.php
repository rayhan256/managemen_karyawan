@extends('layouts/main')
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Departemen</h1>
            <a href="/cms/department/create" class="btn btn-outline-primary my-3">Tambah Department</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Action</th>
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
                            <td class="d-flex">
                                <a href="{{ route('department.edit', $i->id) }}" class="btn btn-primary">Update</a>
                                <form action="{{ route('department.destroy', $i->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete" class="btn btn-danger" />
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
