@extends('layouts.main')

@section('title', 'Jenis Kucing')

@section('content')
<div class="fugu--inner-section light-version">
    <div class="container">
        <div class="fugu--breadcrumbs-section">
            <div class="fugu--breadcrumbs-data center-content">
                <h1 class="wow fadeInUpX" data-wow-delay="0s">Jenis-Jenis Kucing</h1>
                <div class="fugu--newsletter fugu--search wow fadeInUpX" data-wow-delay="0.20s">
                    <form action="/materis">
                        @if (request('kategori'))
                        <input type="hidden" name="kategori" value="{{ request('kategori') }}">
                        @endif
                        @if (request('author'))
                        <input type="hidden" name="kategori" value="{{ request('author') }}">
                        @endif
                        <input type="text" placeholder="Cari Kucingmu" name="cari" value="{{ request('cari') }}">
                        <button type="submit" id="fugu--submit-btn">Search</button>
                        <button id="fugu--search-btn"><img src="assets/images/svg2/search.svg" alt=""></button>
                    </form>
                </div>
            </div>
        </div>

        <!-- End breadcrumb -->
        <div class="fugu--blog-filtering fugu--section-padding">
            <div class="fugu--portfolio-wrap" id="fugu--two-column">
                @foreach ($materis as $materi)
                <div class="collection-grid-item analysis wow fadeInUpX" data-wow-delay="0s">
                    <div class="fugu--blog-wrap">
                        <div class="fugu--blog-thumb">
                            <a href="single-blog.html">
                                <img src="{{ asset('storage/' . $materi->image) }}" alt="{{ $materi->kategori->name ?? '' }}">
                            </a>
                            <div class="fugu--blog-badge">
                                <a href="/materis?kategori={{ $materi->kategori->slug ?? '' }}">{{ $materi->kategori->name ?? 'N/A' }}</a>
                            </div>
                        </div>
                        <div class="fugu--blog-content">
                            <div class="fugu--blog-date">
                                <ul>
                                    <li><img src="assets/images/svg2/clock2.svg" alt="">{{ $materi->created_at->diffForHumans() ?? '' }}</li>
                                </ul>
                            </div>
                            <div class="fugu--blog-title">
                                <a href="single-blog.html">
                                    <h3>{{ $materi->judul }}</h3>
                                </a>
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ $materi->excerpt }}</p>
                                <a href="/materis/{{ $materi->slug }}" class="btn btn-primary">Selanjutnya...</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {{ $materis->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
