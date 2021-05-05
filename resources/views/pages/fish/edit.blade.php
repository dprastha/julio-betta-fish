@extends('layout.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Edit Ikan</strong>
            <small>{{ $fish->nama_ikan }}</small>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('fish.update', $fish->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="nama_ikan" class="form-control-label">Nama Ikan</label>
                    <input type="text" 
                        name="nama_ikan" 
                        value="{{ old('nama_ikan') ? old('nama_ikan') : $fish->nama_ikan }}" 
                        class="form-control" @error('nama_ikan') is-invalid @enderror>
                    @error('nama_ikan') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="deskripsi" class="form-control-label">Deskripsi Ikan</label>
                    <textarea name="deskripsi" rows="4"
                        class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') ? old('deskripsi') : $fish->deskripsi}}</textarea>
                    @error('deskripsi') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="harga" class="form-control-label">Harga Ikan</label>
                    <input type="number" 
                        name="harga" 
                        value="{{ old('harga') ? old('harga') : $fish->harga }}" 
                        class="form-control @error('harga') is-invalid @enderror">
                    @error('harga') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="kuantitas" class="form-control-label">Kuantitas Ikan</label>
                    <input type="number" 
                        name="kuantitas" 
                        value="{{ old('kuantitas') ? old('kuantitas') : $fish->kuantitas }}" 
                        class="form-control @error('kuantitas') is-invalid @enderror">
                    @error('kuantitas') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="foto" class="form-control-label">Foto Ikan</label>
                    <input type="file" 
                        name="foto"
                        id="foto" 
                        value="{{ old('foto') ? old('foto') : $fish->foto }}" 
                        accept="image/*"
                        class="form-control @error('foto') is-invalid @enderror">
                    @error('foto') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <button class="btn-primary btn-block" type="submit">Edit Ikan</button>
                </div>
            </form>
        </div>
    </div>
@endsection