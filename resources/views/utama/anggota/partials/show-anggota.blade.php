<!-- Modal -->
<div class="modal fade" id="show_anggota{{ $item->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel"
                    style="font-family: 'Quicksand', sans-serif; font-weight: bold;">Detail Data Anggota - (
                    {{ $item->name }} )
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <small class="text-muted text-uppercase">About</small>
                <ul class="list-unstyled mb-4 mt-3">
                  <li class="d-flex align-items-center mb-3"><i class="bx bx-user"></i><span class="fw-medium mx-2">Full Name:</span> <span>{{ $item->name }}</span></li>
                  <li class="d-flex align-items-center mb-3"><i class="bx bx-id-card"></i><span class="fw-medium mx-2">Username:</span> <span>{{ $item->username }}</span></li>
                  <li class="d-flex align-items-center mb-3"><i class="bx bx-home"></i><span class="fw-medium mx-2">Address:</span> <span>{{ $item->alamat }}</span></li>
                </ul>
                <small class="text-muted text-uppercase">Contacts</small>
                <ul class="list-unstyled mb-4 mt-3">
                  <li class="d-flex align-items-center mb-3"><i class="bx bx-phone"></i><span class="fw-medium mx-2">Contact:</span> <span>+62{{ $item->no_telp }} </span></li>
                  <li class="d-flex align-items-center mb-3"><i class="bx bx-envelope"></i><span class="fw-medium mx-2">Email:</span> <span>{{ $item->email }}</span></li>
                </ul>
                <small class="text-muted text-uppercase">Other</small>
                <ul class="list-unstyled mt-3 mb-0">
                  <li class="d-flex align-items-center mb-3"><i class="bx bx-calendar text-primary me-2"></i>
                    <div class="d-flex flex-wrap"><span class="fw-medium me-2">Joined At:</span><span>{{ $item->created_at->diffForHumans() }}</span></div>
                  </li>
                  <li class="d-flex align-items-center"><i class="bx bx-refresh text-info me-2"></i>
                    <div class="d-flex flex-wrap"><span class="fw-medium me-2">Updated At</span><span>{{ $item->updated_at->diffForHumans() }}</span></div>
                  </li>
                </ul>
            </div>
        </div>
    </div>
</div>
