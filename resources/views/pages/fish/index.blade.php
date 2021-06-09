@extends('layout.default')

@section('content')
    <div class="orders">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Daftar Ikan</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Foto</th>
                                        <th>Nama Ikan</th>
                                        <th>Harga</th>
                                        <th>Kuantitas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($fish as $f)
                                    <tr>
                                        <td>{{ $f->id }}</td>
                                        <td>
                                            <img src="{{$f->foto}}" alt="foto {{$f->nama_ikan}}">
                                        </td>
                                        <td>{{ $f->nama_ikan }}</td>
                                        <td>{{ $f->harga }}</td>
                                        <td>{{ $f->kuantitas }}</td>
                                        <td>
                                            <a href="{{ route('fish.edit', $f->id) }}" class="btn btn-primary btn-sm">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <form action="{{ route('fish.destroy', $f->id) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center p-5">
                                                Data tidak tersedia
                                            </td>
                                        </tr>                                        
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()