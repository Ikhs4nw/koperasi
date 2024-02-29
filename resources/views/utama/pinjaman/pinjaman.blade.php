@extends('layouts.app')

@section('title')
    Pinjaman
@endsection

@push('data-tables-css')
    <link rel="stylesheet" type="text/css"
        href="{{ asset('sneat') }}/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('sneat') }}/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
@endpush

@section('pinjaman-active')
    active
@endsection

@section('content')
    <div class="card">
        <h4 class="card-header"><b>Data Pinjaman</b></h4>
    </div>
    <br>
    <div class="card">
        <div class="card-header" style="padding-bottom: 6px; text-align: right; padding-right: 16px;">
            <a href="{{ route('pinjaman.export') }}" class="btn btn-success" style="width: 150px;"><i
                    class="bx bx-printer"></i> Export</a>
        </div>
        <div class="card-datatable table-responsive text-nowrap">
            <table id="table_pinjaman" class="dt-responsive table border-top table-hover">
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
        </div>
    </div>

    <!-- Collapse -->
    <br>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <p class="demo-inline-spacing">
                        <a class="btn btn-primary me-1" data-bs-toggle="collapse" href="#collapseExample" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            + Tambah Data
                        </a>
                    </p>

                    <div class="collapse" id="collapseExample">
                        <div class="">
                            <div class="content-wrapper">
                                <!-- Content -->
                                <div class="container-xxl flex-grow-1 container-p-y">
                                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Tambah Data</h4>
                                    <!-- Form -->
                                    <div class="row">
                                        <div class="col-xxl">
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <form action="{{ url('/pinjaman') }}" method="POST">
                                                        <div class="row mb-3">
                                                            <input type="hidden" name="_token"
                                                                value="{{ csrf_token() }}">
                                                            <label class="col-md-2 col-form-label">Nama Anggota</label>
                                                            <div class="col-md-10">
                                                                <select class="form-control" name="user_id2" required
                                                                    autofocus>
                                                                    <option value="" selected disabled>Pilih Salah
                                                                        Satu
                                                                    </option>
                                                                    @foreach ($anggota as $item)
                                                                        <option value="{{ $item->id }}">
                                                                            {{ $item->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3 ">
                                                            <label class="col-md-2 col-form-label">Tanggal Pinjam</label>
                                                            <div class="col-md-10">
                                                                <input class="form-control" type="date"
                                                                    name="tgl_pinjaman2" required autofocus />
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label class="col-sm-2 col-form-label"
                                                                for="basic-default-name">Jumlah Pinjaman</label>
                                                            <div class="col-sm-10">
                                                                <div class="input-group input-group-merge">
                                                                    <span id="basic-icon-default-fullname2"
                                                                        class="input-group-text"><small>Rp</small></span>
                                                                    <input type="number" class="form-control"
                                                                        name="jlh_pinjaman2" placeholder="0" min="10000"
                                                                        required autofocus />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row justify-content-end">
                                                            <div class="col-sm-10">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Tambah</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- / Content -->
                                <div class="content-backdrop fade"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('data-tables-js')
    <!-- extension responsive -->
    <script src="{{ asset('sneat') }}/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="{{ asset('sneat') }}/assets/js/tables-datatables-advanced.js"></script>

    <script>
        $(document).ready(function() {
            $('#table_pinjaman').DataTable();
        });
    </script>
@endpush
