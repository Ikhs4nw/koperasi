<!-- Modal -->
<div class="modal fade" id="edit_pinjaman{{ $item->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="font-family: 'Quicksand', sans-serif; font-weight: bold;">Edit Data
                    Pinjaman - ( {{ $item->user->name }} )
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/pinjaman/' . $item->id) }}" method="POST">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label>Nama Anggota</label>
                        <select class="form-control" name="user_id2" required autofocus>
                            <option value="{{ $item->user_id }}" selected>{{ $item->user->name }} - ( DIPILIH
                                SEBELUMNYA )</option>
                            @foreach ($anggota as $anggota_set)
                                <option value="{{ $anggota_set->id }}">{{ $anggota_set->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label>Tanggal Pinjam</label>
                        <input class="form-control" type="date" name="tgl_pinjaman2" value="{{ $item->tgl_pinjaman }}"
                            required autofocus />
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                    <div class="form-group">
                        <label>Jumlah Pinjaman</label>
                        <input type="number" class="form-control" name="jlh_pinjaman2" placeholder="0" min="10000"
                            value="{{ $item->jlh_pinjaman }}" required autofocus />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-danger"><i class="fa fa-times"></i>
                        Cancel</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
