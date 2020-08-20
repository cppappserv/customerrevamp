<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>www.abesehat.com</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Phone</th>
                                <th>Cust.Grp</th>
                                <th>Kecamatan</th>
                                <th>Kota/Kab</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customer as $p)
                            <tr>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->phone }}</td>
                                <td>{{ $p->cgroup }}</td>
                                <td>{{ $p->kecam }}</td>
                                <td>{{ $p->kota }}</td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

            </div>
        </div>
    </body>
</html>