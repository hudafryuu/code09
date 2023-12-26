<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Form Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f4f6; 
            color: #333333; 
        }

        .container {
            margin-top: 50px;
        }

        h2 {
            color: #2A2F4F;
            text-align: center;
            margin-bottom: 20px;
        }

        .custom-table {
            max-width: 80%;
            margin: 0 auto;
            border: 2px solid #CC0000; 
            border-radius: 10px;
            overflow: hidden;
        }

        .custom-table th,
        .custom-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #CC0000; 
        }

        .custom-table th {
            background-color: #CC0000; 
            color: #fff; 
        }

        .custom-table tbody tr:nth-child(even) {
            background-color: #fff; 
            color: #343a40;
        }

        img {
            max-width: 100px;
            height: auto;
        }

        .btn-success {
            display: block;
            width: 150px;
            margin: 20px auto;
            text-align: center;
            padding: 10px;
            background-color: #CC0000; 
            color: #fff; 
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-success:hover {
            background-color: #990000; 
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Data Mahasiswa</h2>
        <table class="custom-table">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $data['nim'] }}</td>
                    <td>{{ $data['nama'] }}</td>
                    <td>{{ $data['umur'] }}</td>
                    <td>{{ $data['alamat'] }}</td>
                    <td>{{ $data['email'] }}</td>
                    <td>
                        @if ($data['foto'])
                            <img src="{{ url('storage/' . $data['foto']) }}" alt="Foto Mahasiswa">
                        @else
                            No Image
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>

        <a href="/read" class="btn btn-success">Tampilkan data</a>
    </div>
</body>

</html>
