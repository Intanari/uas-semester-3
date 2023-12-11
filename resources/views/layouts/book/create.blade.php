<!-- Modal -->
<div class="modal fade" id="createBookModal" tabindex="-1" role="dialog" aria-labelledby="createBookModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createBookModalLabel">Tambah Buku Baru</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('book.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group mb-3">
                        <label for="writer">Penulis</label>
                        <input type="text" class="form-control" id="writer" name="writer">
                    </div>
                    <div class="form-group mb-3">
                        <label for="publisher">Penerbit</label>
                        <input type="text" class="form-control" id="publisher" name="publisher">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
