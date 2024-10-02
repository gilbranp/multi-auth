@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <form action="{{ route('role.update', $role->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" required value="{{ $role->name }}">
                    @error('name')
                        <small class="text-danger pl-3" role="alert">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="is_active" class="form-label">Aktif</label>
                    <select class="custom-select" id="is_active" name="is_active" required>
                        <option value="1" {{ $role->is_active == 1 ? 'selected' : '' }}>Ya</option>
                        <option value="0" {{ $role->is_active == 0 ? 'selected' : '' }}>Tidak</option>
                    </select>
                    @error('is_active')
                        <small class="text-danger pl-3" role="alert">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection