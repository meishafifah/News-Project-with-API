<h1>Form Berita Baru</h1>
<form action='#create_data' id='formBaru'>
    <table border='0'>
        <tr>
            <td>Judul Berita</td>
            <td>
                <input class='form-user-input' type='text' name='judul_berita' style='width: 40em'>
            </td>
        </tr>
        <tr>
            <td>Kategori Berita</td>
            <td>
                <select class='form-user-input' name='id_kategori_berita' style='width: 40em'>
                    <option value='Kesehatan'>Kesehatan</option>
                    <option value='Teknologi'>Teknologi</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Isi Berita</td>
            <td>
                <textarea class='form-user-input' name='isi_berita' style='width: 40em' rows='15'>
                </textarea>
            </td>
        </tr>
        <tr>
            <td colspan='2' style='text-align: right;'>
                <button type='submit'>Kirim Data</button>
            </td>
        </tr>
    </table>
</form>