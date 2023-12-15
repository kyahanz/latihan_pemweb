<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = "1">
        <tr>
            <!-- <th>Id</th> -->
            <th>Nomor Barang</th>
            <th>Nama Barang</th>
            <th>Jenis Varian</th>
           
            <th>Harga</th>
            <th>Tanggal Kadaluarsa</th>
            <th>Tanggal Produksi</th>
        </tr>

        @foreach($barang as $b)
        <tr>
            <!-- <td>{{$b->id}}</td> -->
            <td>{{ $b->no_barang}}</td>
            <td>{{ $b->nama_barang}}</td>
            <td>{{ $b->varian_barang}}</td>
           
            <td>{{ $b->harga_beli}}</td>
            <td>{{ $b->tanggal_kadaluarsa}}</td>
            <td>{{ $b->tanggal_produksi}}</td>
            <td>
                <a href="/edit_data/{{$b->id}}">Edit</a>
                <form action="/hapus_data/proses/{{ $b->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Hapus">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
