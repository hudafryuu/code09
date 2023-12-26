<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Varela Round', sans-serif;
            margin: 0;
            padding: 0;
            color: #ffffff; 
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #1f2833;
        }

        .card {
            width: 80%;
            max-width: 400px;
            background-color: #4A4A4A;
            color: #FFFFFF; 
            margin: auto;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
            transition: all 0.3s ease;
            opacity: 0.9;
        }

        .card-header {
            background-color: #333333; 
            color: #FFFFFF;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            padding: 15px;
        }

        .form-control {
            border: 1px solid #5e5e5e; 
            border-radius: 15px;
            margin-bottom: 10px;
            color: #ffffff; 
            background-color: #4a4a4a; 
        }

        .btn-primary {
            background-color: #CC0000; 
            border-color: #CC0000;
            color: #FFFFFF;
            border-radius: 15px;
            transition: background-color 0.3s, opacity 0.3s ease;
            opacity: 0.9;
        }

        .btn-primary:hover {
            background-color: #990000; 
            border-color: #990000;
            transform: scale(1.05);
            opacity: 1;
        }
    </style>
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
                Data Mahasiswa
            </div>
            <div class="card-body">
                <form name="update-mahasiswa-form" id="update-mahasiswa-form" method="post" action="{{url('edit')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" id="nim" name="nim" class="form-control form-control-sm" required="" value="{{$data->nim}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" id="nama" name="nama" class="form-control form-control-sm" required="" value="{{$data->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="umur">UMUR</label>
                        <input type="text" id="umur" name="umur" class="form-control form-control-sm" required="" value="{{$data->umur}}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control form-control-sm" required="">{{$data->alamat}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" class="form-control form-control-sm" required="" value="{{$data->email}}">
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" id="foto" name="foto" class="form-control-file">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
