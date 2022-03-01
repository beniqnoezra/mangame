@extends('layout.main')

@section('content')
<section id="create">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <a href="{{ route('index') }}" class="btn btn-secondary"><i class="bi bi-backspace"></i> Kembali</a>
            </div>
            <div class="col-12 mt-3">
                <h4>Form Tambah Manga</h4>
            </div>
            <div class="col-12 mt-2">
                <form action="{{ route('manga.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Judul &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="judul">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Penulis &nbsp;&nbsp;&nbsp;</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="penulis">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Penerbit &nbsp;</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="penerbit">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Tema &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="tema">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <select name="status" id="" style="outline: none">
                            <option value="0">On Going</option>
                            <option value="1">Completed</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="image">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Ringkasan</span>
                        <textarea name="ringkasan" id="" cols="100" rows="5"></textarea>
                    </div>

                    <p class="fw-bold w-75">Catatan: <span class="fw-normal">Form yang anda isi akan diperiksa oleh admin terlebih dahulu, apabila tidak sesuai dengan syarat dan ketentuan maka form ini akan dikembalikan. Terimakasih...😊</span></p>

                    <button class="btn btn-primary mb-3"><i class="bi bi-send-plus"></i> Kirim</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection