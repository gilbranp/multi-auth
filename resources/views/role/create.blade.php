@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <form action="{{ route('role.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    @error('name')
                        <small class="text-danger pl-3" role="alert">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="is_active" class="form-label">Aktif</label>
                    <select class="custom-select" id="is_active" name="is_active" required>
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
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