@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <form action="{{ route('role_menu.update', $roleMenu->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="custom-select" id="role_id" name="role_id" required>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}" {{ $roleMenu->role_id == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                        @endforeach
                    </select>
                    @error('role_id')
                        <small class="text-danger pl-3" role="alert">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="menu" class="form-label">Menu</label>
                    <select class="custom-select" id="menu_id" name="menu_id" required>
                        @foreach ($menus as $menu)
                            <option value="{{ $menu->id }}" {{ $roleMenu->menu_id == $menu->id ? 'selected' : '' }}>{{ $menu->name }}</option>
                        @endforeach
                    </select>
                    @error('menu_id')
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