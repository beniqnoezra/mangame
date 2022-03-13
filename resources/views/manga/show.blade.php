@extends('layout.main')

@section('content')
    <section id="show">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5 mb-2">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary"><i class="bi bi-backspace"></i> Kembali</a>
                </div>
                <div class="card mb-3" style="background-color: azure">
                    <div class="col-12 mt-3">
                        <div class="row">
                            <div class="col-3">
                                <img src="{{ asset('storage/' . $manga->image) }}" alt="" class="w-100 h-100" style="object-fit: cover">
                            </div>
                            <div class="col-9">
                                <h4 class="fw-bold mb-5">{{ $manga->judul }}</h4>
                                <p class="fw-bold">Penulis &nbsp;&nbsp;&nbsp;&nbsp;:
                                    <span class="fw-normal">
                                        {{ $manga->penulis }}
                                    </span>
                                </p>
                                <p class="fw-bold">Penerbit &nbsp;&nbsp;:
                                    <span class="fw-normal">
                                        {{ $manga->penerbit }}
                                    </span>
                                </p>
                                <p class="fw-bold">Tema &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                    <span class="fw-normal">
                                        {{ $manga->tema }}
                                    </span>
                                </p>
                                <p class="fw-bold">Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                    <span class="fw-normal">
                                        @if ($manga->status)
                                            Completed
                                        @else
                                            On Going
                                        @endif
                                    </span>
                                </p>

                                @if (Auth::user()->isAdmin)
                                    <div class="admin d-flex">
                                        <a href="{{ route('manga.edit', $manga->id) }}" class="btn btn-warning me-2 mt-5"><i class="bi bi-pencil-fill"></i> Edit</a>
                                            <button class="btn btn-danger mt-5" data-bs-toggle="modal" data-bs-target="#modalHapus"><i class="bi bi-trash-fill"></i> Delete</button>
                                            <div class="modal fade" id="modalHapus" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                      <p>Apakah anda yakin ingin menghapus Manga ini?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{ route('manga.destroy', $manga->id) }}" method="post">
                                                            @method('delete')
                                                            @csrf
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i> Close</button>
                                                            <button class="btn btn-danger ms-1" type="submit" class="btn btn-primary"><i class="bi bi-check-lg"></i> Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3 mb-3">
                        <h4 class="fw-bold">Ringkasan</h4>
                        <article class="mt-2">{!! $manga->ringkasan !!}</article>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection