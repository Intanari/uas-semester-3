<div class="modal fade" id="deleteBookModal{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteBookModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteBookModalLabel">Konfirmasi Hapus Buku</h5>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus buku ini?</p>
            </div>
            <div class="modal-footer">
                <form action="{{ route('book.destroy', ['id' => $book->id]) }}" method="POST">
                    @csrf
                    @method('DELETE') <!-- Adjust the method based on your API or backend setup -->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
