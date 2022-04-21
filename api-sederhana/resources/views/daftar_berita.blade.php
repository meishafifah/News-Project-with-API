<h1>Daftar Berita Terbaru</h1>

@foreach ($list_berita as $key => $value)

<div class='berita'>
    <h2> {{ $value -> judul_berita }}
        <br/>
        <small>{{ $value -> created_at }} | {{ $value -> kategori_berita }}</small>
    </h2>
    <p>{{ substr($value -> isi_berita, 0, 150) }}</p>
    <p class='linkDetail'>
        <a href='#{{ $value -> id_berita }}' class='linkBerita'>Detail</a>
    </p>
</div> 

@endforeach