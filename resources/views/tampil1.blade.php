<!DOCTYPE html>
<html>
<head>
    <title>DATA MAHASISWA</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      <h1><b>DATA MAHASISWA</b></h1>
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="get" action="{{url('tampilkan')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">NIM :</label>
          <input type="text" id="nim" name="nim" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">NAMA :</label>
          <textarea name="nama" class="form-control" required=""></textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">ALAMAT :</label>
          <textarea name="alamat" class="form-control" required=""></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Tekan Cuy</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>