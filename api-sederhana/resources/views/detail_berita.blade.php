<div class='isi_berita'>
    <h1>{{ $list_berita -> judul_berita }} 
        <br/>
        <small>{{ $list_berita -> created_at }} | {{ $list_berita -> ketegori_berita }}</small>
    </h1>
    <p>{{ $list_berita -> isi_berita }}</p>
 </div>