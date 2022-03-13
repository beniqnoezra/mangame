@extends('layout.main')

@section('content')
    <section id="index">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5">
                    <a href="{{ route('manga.create') }}" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Tambah</a>
                </div>
                <div class="col-12">
                    <h3 class="display-6 fw-bold">Daftar Manga</h3>
                </div>
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr class="navbar-index">
                                    <th>No</th>
                                    <th>Sampul</th>
                                    <th>Judul</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mangas as $manga)
                                    <tr>
                                        <td class="align-middle">{{ $loop->iteration }}</td>
                                        <td class="align-middle my-3 py-3">
                                            <img src="{{ asset('storage/' . $manga->image) }}" alt="" style="width: 70px">
                                        </td>
                                        <td class="align-middle fw-bold">{{ $manga->judul }}</td>
                                        <td class="align-middle">
                                            <a href="{{ route('manga.show', $manga->id) }}" class="btn btn-success"><i class="bi bi-card-text"></i> Detail</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                {{ $mangas->links() }}
            </div>
        </div>
    </section>
@endsection