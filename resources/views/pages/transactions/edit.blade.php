@extends('layout.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Ubah Transaksi</strong>
            <small>{{ $fish->uuid }}</small>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('transaction.update', $fish->id) }}" method="post">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="nama" class="form-control-label">Nama Pemesan</label>
                    <input type="text" 
                        name="nama" 
                        value="{{ old('nama') ? old('nama') : $fish->nama }}" 
                        class="form-control" @error('nama') is-invalid @enderror>
                    @error('nama') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="alamat" class="form-control-label">Alamat</label>
                    <input type="text" 
                        name="alamat" 
                        value="{{ old('alamat') ? old('alamat') : $fish->alamat }}" 
                        class="form-control @error('alamat') is-invalid @enderror">
                    @error('alamat') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <button class="btn-primary btn-block" type="submit">Edit Transaksi</button>
                </div>
            </form>
        </div>
    </div>
@endsection