@extends('layout.main')

@section('content')
    <section id="index">
        <div class="container">
            <div class="row">
                {{-- <div class="col-12 mt-5">
                    <a href="{{ route('manga.create') }}" class="btn btn-primary">Tambah</a>
                </div> --}}
                <div class="col-12 mt-3 mb-2">
                    <h3 class="display-6 fw-bold">Daftar Manga</h3>
                </div>
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr class="navbar-admin">
                                    <th>No</th>
                                    <th>Sampul</th>
                                    <th>Judul</th>
                                    <th>Status</th>
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
                                        <td class="align-middle">{{ $manga->judul }}</td>
                                        <td class="align-middle">
                                            @if ($manga->enabled)
                                                <span class="badge bg-primary text-uppercase">&nbsp;<i class="bi bi-check-all"></i> active &nbsp;</span>
                                            @else
                                                <span class="badge bg-warning text-uppercase"><i class="bi bi-hourglass-split"></i> waiting</span>
                                            @endif
                                        </td>
                                        <td class="align-middle">
                                            <div class="admin d-flex">
                                                <a href="{{ route('manga.show', $manga->id) }}" class="btn btn-success me-3"><i class="bi bi-card-text"></i> Detail</a>
                                                @if (!$manga->enabled)
                                                    <form action="{{ route('manga.change', $manga->id) }}" method="post">
                                                        @csrf
                                                        <button class="btn btn-primary"><i class="bi bi-file-earmark-plus"></i> Enable</button>
                                                    </form>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection