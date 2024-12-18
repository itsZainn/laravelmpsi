@extends('components.masterl')

@section('body')
    <div class="container">
        <h1 class="text-5xl mb-5">Edit Data Ikan</h1>
        <form action="{{ route('updatefish', $fish->fish_id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="fishname" class="form-label">Nama Ikan</label>
                <input type="text" name="fishname" id="fishname" class="form-control"
                    value="{{ old('fishname', $fish->fishname) }}" required>
            </div>

            <div class="mb-4">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" name="harga" id="harga" class="form-control"
                    value="{{ old('harga', number_format($fish->harga)) }}" required>
            </div>

            <div class="mb-4">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea name="keterangan" id="keterangan" class="form-control">{{ old('keterangan', $fish->keterangan) }}</textarea>
            </div>

            <div class="mb-4">
                <label for="fishtype" class="form-label">Tipe Ikan</label>
                <select name="fishtype" id="fishtype" class="form-select" required>
                    <option value="" disabled>Pilih Tipe Ikan</option>
                    @foreach ($fishType as $type)
                        <option value="{{ $type->type_id }}" {{ $fish->fishtype == $type->type_id ? 'selected' : '' }}>
                            {{ $type->typename }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="img" class="form-label">Gambar (opsional)</label>
                <input type="file" name="img" id="img" class="form-control">
                @if ($fish->img)
                    <p class="mt-2">Gambar saat ini: <img src="{{ asset('images/' . $fish->img) }}"
                            alt="{{ $fish->fishname }}" width="100"></p>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
