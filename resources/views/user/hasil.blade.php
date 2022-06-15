<!DOCTYPE html>
<html>

<head>
    <title>Hasil Medical Checkup</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <center>
            <h4>Hasil Medical Checkup</h4>
        </center>
        <br />
        {{-- <a href="" class="btn btn-primary" target="_blank">CETAK PDF</a> --}}
        <table>
            <tbody>
                @php $i=1 @endphp
                @foreach ($user as $item)
                <tr>
                    <th>Nama </th>
                    <td>{{$item->name}}</td>

                </tr>
                <tr>
                    <th>Alamat </th>
                    <td>{{$item->alamat}}</td>
                </tr>
                <tr>
                    <th>Email </th>
                    <td>{{$item->email}}</td>
                </tr>
                <tr>
                    <th>Telpon </th>
                    <td>{{$item->hp}}</td>
                </tr>
                <tr>
                    <th>Jenis Paket </th>
                    <td>{{ $item->nama }}</td>
                </tr>
                <tr>
                    <th>Keluhan</th>
                    <td>{{$item->keluhan}}</td>
                </tr>
                <br>
                <tr>
                    <th>Hasil Observasi</th>
                    <td>{{ $item->hasil }}</td>
                </tr>

                @endforeach
                <br><br>

            </tbody>
        </table>

    </div>

</body>

</html>
