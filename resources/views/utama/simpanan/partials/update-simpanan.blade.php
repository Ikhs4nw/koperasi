<!-- Modal -->
<div class="modal fade" id="edit_simpanan{{ $item->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel"
                    style="font-family: 'Quicksand', sans-serif; font-weight: bold;">Edit Data Simpanan - (
                    {{ $item->user->name }} )
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/simpanan/' . $item->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label>Nama Anggota</label>
                        <select class="form-control" name="user_id2" required>
                            <option value="{{ $item->user_id }}" selected>{{ $item->user->name }} - ( DIPILIH
                                SEBELUMNYA )</option>
                            @foreach ($anggota as $item_anggota)
                                <option value="{{ $item_anggota->id }}"
                                    {{ $item_anggota->id === $item->id ? 'selected' : '' }}> {{ $item_anggota->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="age_cast">Tanggal Simpan</label>
                        <input class="form-control" type="date" name="tgl_simpanan2"
                            value="{{ $item->tgl_simpanan }}" required autofocus />
                    </div>
                    <div class="form-group">
                        <label>Jumlah Simpan</label>
                        <input type="number" class="form-control" name="jlh_simpanan2" placeholder="0" min="10000"
                            value="{{ $item->jlh_simpanan }}" required autofocus />
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
