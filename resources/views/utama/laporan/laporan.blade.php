@extends('layouts.app')

@section('title')
    Laporan
@endsection

@push('data-tables-css')
    <link rel="stylesheet" type="text/css"
        href="{{ asset('sneat') }}/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('sneat') }}/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
@endpush

@section('laporan-active')
    active
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <h6 class="text-muted">Basic</h6>
            <div class="nav-align-top mb-4">
                <ul class="nav nav-pills mb-3" role="tablist">
                    <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home" aria-selected="true">
                            Simpanan
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile"
                            aria-selected="false">
                            Pinjaman
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane shofadew active" id="navs-pills-top-home" role="tabpanel">
                        @include('utama.laporan.partials.laporan-simpanan')
                    </div>

                    <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
                        @include('utama.laporan.partials.laporan-pinjaman')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pills -->
@endsection

@push('data-tables-js')
    <!-- extension responsive -->
    <script src="{{ asset('sneat') }}/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="{{ asset('sneat') }}/assets/js/tables-datatables-advanced.js"></script>

    <script>
        $(document).ready(function() {
            $('#table_simpanan').DataTable();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#table_pinjaman').DataTable();
        });
    </script>
@endpush
