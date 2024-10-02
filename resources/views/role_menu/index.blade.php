@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-12">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <a href="{{ route('role_menu.create') }}" class="btn btn-primary my-3">Tambah Baru</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Role</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roleMenus as $key => $item)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>
                                {{ $item->role->name }}
                            </td>
                            <td>{{ $item->menu->name }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('role_menu.edit', $item->id) }}" class="btn btn-primary mr-3">Edit</a>
                                    <form action="{{ route('role_menu.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
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