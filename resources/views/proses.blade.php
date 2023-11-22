<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Malas Ngoding - Tutorial Laravel #18 : Membuat Form Validasi Pada Laravel</title>
    
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="my-4">Data Yang Di Input : </h3>
 
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Kode Barang</td>
                                <td>{{ $data->kode_barang }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Nama Barang</td>
                                <td>{{ $data->nama_barang }}</td>
                            </tr>
                            <tr>
                                <td>Jenis Varian</td>
                                <td>{{ $data->jenis_varian }}</td>
                            </tr>
                            <tr>
                                <td>QTY</td>
                                <td>{{ $data->qty }}</td>
                            </tr>
                            <tr>
                                <td>Harga Jual Satuan</td>
                                <td>{{ $data->harga_jual }}</td>
                            </tr>
                        </table>
                        <h3 class="my-4">Harga Yang Harus Dibayar : </h3>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Total Harga Jual</td>
                                <td>{{ $totalHargaJual }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Harga Setelah Diskon</td>
                                <td>{{ $hargaSetelahDiskon }}</td>
                            </tr>
                        </table>
 
                        <a href="/input" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</body>
</html>