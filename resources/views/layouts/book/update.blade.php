<div class="modal fade" id="updateBookModal{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="updateBookModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateBookModalLabel">Update Informasi Buku</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('book.update', ['id' => $book->id]) }}" method="POST"> <!-- Update the route for updating -->
                    @csrf
                    @method('PUT') <!-- Assuming you are using PUT method for updates, change it to match your API or backend setup -->
                    <div class="form-group mb-3">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}"> <!-- Populate input fields with existing data -->
                    </div>
                    <div class="form-group mb-3">
                        <label for="writer">Penulis</label>
                        <input type="text" class="form-control" id="writer" name="writer" value="{{ $book->writer }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="publisher">Penerbit</label>
                        <input type="text" class="form-control" id="publisher" name="publisher" value="{{ $book->publisher }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button> <!-- Update button text to signify updating -->
                </form>
            </div>
        </div>
    </div>
</div>
