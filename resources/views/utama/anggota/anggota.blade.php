@extends('layouts.app')

@section('title')
    Anggota
@endsection

@push('data-tables-css')
    <link rel="stylesheet" type="text/css"
        href="{{ asset('sneat') }}/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('sneat') }}/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
@endpush

@section('anggota-active')
    active
@endsection

@section('content')
    <div class="card">
        <h4 class="card-header"><b>Data Anggota</b></h4>
    </div>
    <br>
    <!-- Responsive Datatable -->
    <div class="card">
        <div class="card-datatable table-responsive text-nowrap">
            <table id="table_anggota" class="dt-responsive table border-top table-hover">
                <thead>
                    <tr>
                        <th style="font-weight: bold; font-size: 12px; text-align: center;">No</th>
                        <th style="font-weight: bold; font-size: 12px">Nama</th>
                        <th style="font-weight: bold; font-size: 12px">Email</th>
                        <th style="font-weight: bold; font-size: 12px; text-align: center;">Phone Number</th>
                        <th style="font-weight: bold; font-size: 12px">Joined At</th>
                        <th style="font-weight: bold; font-size: 12px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($anggota as $key => $item)
                        <tr>
                            <td class="text-center">{{ $key += 1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td class="text-center">{{ $item->no_telp }}</td>
                            <td>{{ date('d F Y', strtotime($item->created_at)) }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-start">
                                        <a class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#show_anggota{{ $item->id }}"><i
                                                class="bx bx-show-alt me-1"></i> View</a>
                                        <a class="dropdown-item" href="{{ url('/anggota/' . $item->id) }}"
                                            onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')"><i
                                                class="bx bx-trash me-1"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @include('utama.anggota.partials.show-anggota')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('data-tables-js')
    <!-- extension responsive -->
    <script src="{{ asset('sneat') }}/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="{{ asset('sneat') }}/assets/js/tables-datatables-advanced.js"></script>

    <script>
        $(document).ready(function() {
            $('#table_anggota').DataTable();
        });
    </script>
@endpush
