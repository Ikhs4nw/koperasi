<table id="table_pinjaman" class="table border-top table table-striped">
    <thead>
        <tr>
            <th style="font-weight: bold; font-size: 13px">No</th>
            <th style="font-weight: bold; font-size: 13px">Nama Anggota</th>
            <th style="font-weight: bold; font-size: 13px">Tanggal Peminjaman</th>
            <th style="font-weight: bold; font-size: 13px">Jumlah Pinjaman</th>
            <th style="font-weight: bold; font-size: 13px">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pinjaman as $key => $item)
            <tr>
                <th>{{ $key += 1 }}</th>
                <td>{{ $item->user->name }}</td>
                <td>{{ date('d F Y', strtotime($item->tgl_pinjaman)) }}</td>
                <td>{{ 'Rp. ' . number_format($item->jlh_pinjaman, 2, ',', '.') }}</td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                            data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-start">
                            <a class="dropdown-item" data-bs-toggle="modal"
                                data-bs-target="#edit_pinjaman{{ $item->id }}"><i
                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                            <a class="dropdown-item" href="{{ url('/pinjaman/' . $item->id . '/destroy') }}"><i
                                    class="bx bx-trash me-1"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            @include('utama.pinjaman.partials.update-pinjaman')
        @endforeach
    </tbody>
</table>
