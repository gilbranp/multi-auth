@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-12">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <a href="{{ route('role.create') }}" class="btn btn-primary my-3">Tambah Baru</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Aktif</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $key => $role)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>
                                {{ $role->name }}
                            </td>
                            <td>{{ $role->active ? 'Ya' : 'Tidak' }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('role.edit', $role->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('role.destroy', $role->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus role ini?')">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection