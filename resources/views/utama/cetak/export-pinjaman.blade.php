<table>
    <thead>
        <tr>
            <th style="font-weight: bold; font-size: 13px">No</th>
            <th style="font-weight: bold; font-size: 13px">Nama Anggota</th>
            <th style="font-weight: bold; font-size: 13px">Tanggal Peminjaman</th>
            <th style="font-weight: bold; font-size: 13px">Jumlah Pinjaman</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pinjaman as $key => $item)
            <tr>
                <th>{{ $key += 1 }}</th>
                <td>{{ $item->user->name }}</td>
                <td>{{ date('d F Y', strtotime($item->tgl_pinjaman)) }}</td>
                <td>{{ 'Rp. ' . number_format($item->jlh_pinjaman, 2, ',', '.') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>