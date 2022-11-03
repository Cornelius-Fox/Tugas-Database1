<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book List</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>

    <div class="container text-center p-4">
        <h1>Staff IT</h1>
        <table class="table ">
            <thead>
                <th>Nama Pegawai</th>
                <th>Tanggal Lahir</th>
                <th>Jabatan</th>
                <th>Divisi</th>
                <th>Tanggal Masuk</th>
                <th>cuti</th>
                <th>aktif</th>
                <th>PHK</th>
                <th>Mengundurkan diri</th>
            </thead>
            <tbody>
                @forelse ($result as $employee)
                    <tr>
                        <td>{{ $employee->nama_pegawai }}</td>
                        <td>{{ $employee->tanggal_lahir}}</td>
                        <td>{{ $employee->jabatan }}</td>
                        <td>{{ $employee->divisi}}</td>
                        <td>{{ $employee->tanggal_masuk }}</td>
                        <td>{{ $employee->Cuti }}</td>
                        <td>{{ $employee->Aktif }}</td>
                        <td>{{ $employee->PHK }}</td>
                        <td>{{ $employee->Mengundurkan_Diri }}</td>
                    </tr>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
                @endforelse

            </tbody>
        </table>
    </div>
</body>

</html>
