@extends('components.masterl')

@section('body')
    <div class="container">
        <h1 class="text-5xl mb-5">Edit Data Jenis Ikan</h1>
        <form action="{{ route('updatetype', $fishType->type_id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="typename" class="form-label">Nama Jenis Ikan:</label>
                <input type="text" name="typename" id="typename" class="form-control"
                    value="{{ old('typename', $fishType->typename) }}" required>
            </div>

            <div class="mb-4">
                <label for="category" class="form-label">Kategori Jenis:</label>
                <input type="text" name="category" id="category" class="form-control"
                    value="{{ old('category', $fishType->category) }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
