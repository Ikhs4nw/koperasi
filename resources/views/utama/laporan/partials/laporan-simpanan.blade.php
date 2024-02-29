<div style="padding-bottom: 6px; text-align: right; padding-right: 16px;">
    <a href="{{ route('pinjaman.export') }}" class="btn btn-success" style="width: 150px;"><i class="bx bx-printer"></i>
        Export</a>
</div>
<table id="table_simpanan" class="table border-top table table-striped">
    <thead>
        <tr>
            <th style="font-weight: bold; font-size: 13px; text-align: center;">No</th>
            <th style="font-weight: bold; font-size: 13px">Nama Anggota</th>
            <th style="font-weight: bold; font-size: 13px">Tanggal Simpan</th>
            <th style="font-weight: bold; font-size: 13px">Jumlah Simpan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($simpanan as $key => $item)
            <tr>
                <td class="text-center">{{ $key += 1 }}</td>
                <td>{{ $item->user->name }}</td>
                <td>{{ date('d F Y', strtotime($item->tgl_simpanan)) }}</td>
                <td>{{ 'Rp. ' . number_format($item->jlh_simpanan, 2, ',', '.') }}</td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th colspan="3" style="font-weight: bold; font-size: 13px; text-align: right;">Total :</th>
            <th style="font-weight: bold; font-size: 13px">
                {{ 'Rp. ' . number_format($simpanan->sum('jlh_simpanan'), 2, ',', '.') }}</th>
        </tr>
    </tfoot>
</table>
