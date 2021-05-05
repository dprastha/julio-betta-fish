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
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Jumlah Pesanan</th>
                                        <th>Total Harga</th>
                                        <th>Status Transaksi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($fish as $f)
                                    <tr>
                                        <td>{{ $f->id }}</td>
                                        <td>{{ $f->nama }}</td>
                                        <td>{{ $f->alamat }}</td>
                                        <td>{{ $f->jumlah_pesanan }}</td>
                                        <td>{{ $f->harga_total }}</td>
                                        <td>
                                            @if($f->status_transaksi == 'DIPROSES')
                                                <span class="badge badge-info">
                                            @elseif($f->status_transaksi == 'SUKSES')
                                                <span class="badge badge-success">
                                            @elseif($f->status_transaksi == 'DIKIRIM')
                                                <span class="badge badge-warning">
                                            @else
                                                <span>
                                            @endif
                                            {{ $f->status_transaksi }}
                                                </span>
                                        </td>
                                        <td>
                                            @if($f->status_transaksi == 'DIPROSES')
                                                <a href="{{ route('transaction.status', $f->id) }}?status=SUKSES" 
                                                class="btn btn-success btn-sm">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                                <a href="{{ route('transaction.status', $f->id) }}?status=DIKIRIM" 
                                                class="btn btn-warning btn-sm">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            @endif
                                            <a  href="#mymodal"
                                                data-remote="{{ route('transaction.show', $f->id) }}"
                                                data-toggle="modal"
                                                data-target="#mymodal"
                                                data-title="Detail Transaksi {{ $f->uuid }}"
                                                class="btn btn-info btn-sm">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="{{ route('transaction.edit', $f->id) }}" class="btn btn-primary btn-sm">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <form action="{{ route('transaction.destroy', $f->id) }}" method="post" class="d-inline">
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