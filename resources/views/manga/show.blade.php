@extends('layout.main')

@section('content')
    <section id="show">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5 mb-2">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary"><i class="bi bi-backspace"></i> Kembali</a>
                </div>
                <div class="card mb-3">
                    <div class="col-12 mt-3">
                        <div class="row">
                            <div class="col-3">
                                <img src="{{ asset('storage/' . $manga->image) }}" alt="" class="w-100 h-100" style="object-fit: cover">
                            </div>
                            <div class="col-9">
                                <h4 class="fw-bold">{{ $manga->judul }}</h4>
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
                                        <form action="{{ route('manga.destroy', $manga->id) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger mt-5" type="submit"><i class="bi bi-trash-fill"></i> Delete</button>
                                        </form>
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