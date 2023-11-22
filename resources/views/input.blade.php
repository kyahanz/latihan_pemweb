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
                <!-- <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">

                            
 
                            {{-- menampilkan error validasi --}}
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
 
                            <br/>
                            <form action="/proses" method="post">
                                {{ csrf_field() }}
 
                                <div class="form-group">
                                    <label for="kode_barang">Kode Barang</label>
                                    <input class="form-control" type="text" name="kode_barang" value="{{ old('kode_barang') }}">
                                </div>
                                <div class="form-group">
                                    <label for="nama_barang">Nama Barang</label>
                                    <input class="form-control" type="text" name="nama_barang" value="{{ old('nama_barang') }}">
                                </div>
                                <div class="form-group">
                                    <label for="jenis_varaian">Jenis Varian</label>
                                    <input class="form-control" type="text" name="jenis_varian" value="{{ old('jenis_varian') }}">
                                </div>
                                <div class="form-group">
                                    <label for="qty">QTY</label>
                                    <input class="form-control" type="text" name="qty" value="{{ old('qty') }}">
                                </div>
                                <div class="form-group">
                                    <label for="harga_jual">Harga Jual</label>
                                    <input class="form-control" type="text" name="harga_jual" value="{{ old('harga_jual') }}">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="Proses">
                                </div>
                            </form>
 
                        </div>
                    </div>
                </div> -->
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
                        <label for="kode_barang">Kode Barang</label>
                        <input class="form-control" type="text" name="kode_barang" value="{{ old('kode_barang') }}" placeholder="Kode Barang">
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input class="form-control" type="text" name="nama_barang" value="{{ old('nama_barang') }}" placeholder="Nama Barang">
                    </div>
                    <div class="form-group">
                    <label for="jenis_varian">Jenis Varian</label>
                        <input class="form-control" type="text" name="jenis_varian" value="{{ old('jenis_varian') }}" placeholder="Jenis Varian">
                    </div>
                    <div class="form-group">
                    <label for="qty">QTY</label>
                        <input class="form-control" type="text" name="qty" value="{{ old('qty') }}" placeholder="QTY">
                    </div>
                    <div class="form-group">
                    <label for="harga_jual">Harga Jual</label>
                        <input class="form-control" type="text" name="harga_jual" value="{{ old('harga_jual') }}" placeholder="Harga Jual">
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Remember me
                      </label>
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