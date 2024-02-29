<table>
    <thead>
        <tr>
            <th style="font-weight: bold; font-size: 12px; text-align: center;">No</th>
            <th style="font-weight: bold; font-size: 12px">Nama Anggota</th>
            <th style="font-weight: bold; font-size: 12px">Tanggal Simpan</th>
            <th style="font-weight: bold; font-size: 12px">Jumlah Simpan</th>
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
</table>