<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UTS - Framework Pemrograman Web</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>

        <div class="container">
            <div class="row justify-content-center">
                <form action="/proses" method="post">
                                {{ csrf_field() }}
                <div>
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Default form</h4>
                  <p class="card-description">
                    Basic form layout
                  </p>
                  <form class="forms-sample">

                    <div class="form-group">
                        <label for="no_barang">Nomor Barang</label>
                        <input class="form-control" type="number" name="no_barang" value="{{ old('no_barang') }}" placeholder="No Barang">
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input class="form-control" type="text" name="nama_barang" value="{{ old('nama_barang') }}" placeholder="Nama Barang">
                    </div>
                    <div class="form-group">
                    <label for="varian_barang">Jenis Varian</label>
                        <input class="form-control" type="text" name="varian_barang" value="{{ old('varian_barang') }}" placeholder="Jenis Varian">
                    </div>
                    <!-- <div class="form-group">
                    <label for="qty">QTY</label>
                        <input class="form-control" type="number" name="qty" value="{{ old('qty') }}" placeholder="QTY">
                    </div> -->
                    <div class="form-group">
                    <label for="tanggal_kadaluarsa">Tanggal Kadaluarsa</label>
                        <input class="form-control" type="date" name="tanggal_kadaluarsa" value="{{ old('tanggal_kadaluarsa') }}" placeholder="Tanggal Kadaluarsa">
                    </div>
                    <div class="form-group">
                    <label for="tanggal_produksi">Tanggal Produksi</label>
                        <input class="form-control" type="date" name="tanggal_produksi" value="{{ old('tanggal_produksi') }}" placeholder="Tanggal Produksi">
                    </div>
                    <div class="form-group">
                    <label for="harga_beli">Harga Jual</label>
                        <input class="form-control" type="number" name="harga_beli" value="{{ old('harga_beli') }}" placeholder="Harga Jual">
                    </div>
                    <button type="submit" class="btn btn-primary me-2" Value="Proses">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
                </form>

            </div>
        </div>

</body>
</html>
