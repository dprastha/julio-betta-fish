<table class="table table-bordered">
    <tr>
        <th>Nama</th>
        <td>{{ $fish->nama }}</td>
    </tr>
    <tr>
        <th>Alamat</th>
        <td>{{ $fish->alamat }}</td>
    </tr>
    <tr>
        <th>Jumlah Pesanan</th>
        <td>{{ $fish->jumlah_pesanan }}</td>
    </tr>
    <tr>
        <th>Total Harga</th>
        <td>{{ $fish->harga_total }}</td>
    </tr>
    <tr>
        <th>Status Transaksi</th>
        <td>{{ $fish->status_transaksi }}</td>
    </tr>
    <tr>
        <th>Pembelian Produk</th>
        <td>
            <table class="table table-bordered w-100">
                <tr>
                    <th>Nama Ikan</th>
                    <th>Harga</th>
                </tr>
                @foreach ($fish->details as $detail)        
                <tr>
                    <td>{{ $detail->fish->nama_ikan }}</td>
                    <td>Rp. {{ $detail->fish->harga }}</td>
                </tr>
                @endforeach
            </table>
        </td>
    </tr>
</table>
<div class="row">
    <div class="col-4">
        <a href="{{ route('transaction.status', $fish->id) }}?status=SUKSES" class="btn btn-success btn-block">
            <i class="fa fa-check"></i> Set Sukses
        </a>
    </div>
    <div class="col-4">
        <a href="{{ route('transaction.status', $fish->id) }}?status=DIKIRIM" class="btn btn-warning btn-block">
            <i class="fa fa-times"></i> Set Dikirim
        </a>
    </div>
    <div class="col-4">
        <a href="{{ route('transaction.status', $fish->id) }}?status=DIPROSES" class="btn btn-info btn-block">
            <i class="fa fa-spinner"></i> Set Diproses
        </a>
    </div>
</div>