@extends('layout.main')

@section('content')
<section id="create">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h4>Form Edit Manga</h4>
            </div>
            <div class="col-12 mt-2">
                <form action="{{ route('manga.update', $manga->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Judul &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="judul" value="{{ $manga->judul }}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Penulis &nbsp;&nbsp;</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="penulis" value="{{ $manga->penulis }}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Penerbit&nbsp;</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="penerbit" value="{{ $manga->penerbit }}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Tema &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="tema" value="{{ $manga->tema }}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Status &nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <select name="status" id="" style="outline: none">
                            <option value="0">On Going</option>
                            <option value="1">Completed</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="image" value="{{ $manga->image }}">
                    </div>
                    <div class="input-group table-hover mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Ringkasan</span>
                        <input id="ringkasan" type="hidden" name="ringkasan" value="{{ $manga->ringkasan }}">
                        <trix-editor input="ringkasan"></trix-editor>
                    </div>

                    {{-- <p class="fw-bold w-75">Catatan: <span class="fw-normal">Form yang anda isi akan diperiksa oleh admin terlebih dahulu, apabila tidak sesuai dengan syarat dan ketentuan maka form ini akan dikembalikan. Terimakasih...😊</span></p> --}}

                    <div class="mb-3">
                        <a href="{{ url()->previous() }}" class="btn btn-secondary"><i class="bi bi-backspace"></i> Kembali</a>
                        <button class="btn btn-warning ms-1"><i class="bi bi-save"></i> Ubah Manga</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
</script>

@endsection