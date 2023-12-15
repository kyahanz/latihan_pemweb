<!DOCTYPE html>
<html>
  <body>
 
  <form action="/edit_data/proses/{{ $barang->id }}" method="post">
      @method('PUT')
      {{ csrf_field() }}
      
      <input type="number" name="no_barang" value="{{$barang->no_barang}}">
      <input type="text" name="nama_barang" value="{{$barang->nama_barang}}">
      <input type="text" name="varian_barang" value="{{$barang->varian_barang}}">
      <input type="text" name="harga_beli" value="{{$barang->harga_beli}}">
      <input type="date" name="tanggal_kadaluarsa" value="{{$barang->tanggal_kadaluarsa}}">
      <input type="date" name="tanggal_produksi" value="{{$barang->tanggal_produksi}}">
      <input type="submit" value="Update Data">
  </form>
  </body>
</html>
