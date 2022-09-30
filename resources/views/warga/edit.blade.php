<h1>Edit Data Warga</h1>

<form action="/warga/{{$warga->id}}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="nama" placeholder="Nama Lengkap" value="{{$warga->nama}}"><br>
    <input type="text" name="nik" placeholder="NIK" value="{{$warga->nik}}"><br>
    <select name="jenis_kelamin">
        <option value="">Pilih Jenis Kelamin></option>
        <option value="L" @if($warga->jenis_kelamin == "L") selected @endif>Laki-Laki></option>
        <option value="P" @if($warga->jenis_kelamin == "P") selected @endif>Perempuan></option>
    </select><br>
    <p>Alamat</p>
    <textarea name="alamat" rows="10">{{$warga->alamat}}</textarea><br>
    <input type="submit" name="submit" value="update">



</form>