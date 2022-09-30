<h1>Helloo Warga</h1>

<form action="/warga/store" method="POST">
    @csrf
    <input type="text" name="nama" placeholder="Nama Lengkap"><br>
    <input type="text" name="nik" placeholder="NIK"><br>
    <select name="jenis_kelamin">
        <option value="">Pilih Jenis Kelamin></option>
        <option value="L">Laki-Laki></option>
        <option value="P">Perempuan></option>
    </select><br>
    <p>Alamat</p>
    <textarea name="alamat" rows="10"></textarea><br>
    <input type="submit" name="submit" value="Tambah">



</form>