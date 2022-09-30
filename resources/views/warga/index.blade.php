<a href="/warga/create">Tambah Data</a>
<table border="1">
    <tr>
        <td>No</td>
        <td>NAMA</td>
        <td>NIK</td>
        <td>ALAMAT</td>
        <td>Jenis Kelamin</td>
        <td>Aksi</td>
    </tr>

    @foreach($warga as $w)
    <tr>
        <td>{{$w->id}}</td>
        <td>{{$w->nama}}</td>
        <td>{{$w->nik}}</td>
        <td>{{$w->alamat}}</td>
        <td>{{$w->jenis_kelamin}}</td>
        <td>
            <a href="/warga/{{$w->id}}/edit">Edit</a>
            <form action="/warga/{{$w->id}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="Delete">
            </form>
        </td>
    </tr>
    @endforeach
</table>