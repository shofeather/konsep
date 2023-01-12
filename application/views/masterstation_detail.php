<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Data Stasiun Instr</h2>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Stasiun</th>
                    <th>VNOTCH</th>
                    <th>VCC</th>
                    <th>LOGGER</th>
                    <th>Datetime</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($Masterstation_detail as $row) :
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['nama_station'] ?></td>
                        <td><?= $row['vnotch_wl'] ?></td>
                        <td><?= $row['vcc'] ?></td>
                        <td><?= $row['logger_temp'] ?></td>
                        <td><?= date('Y-m-d H:i:s', strtotime($row["DATETIME"]))?></td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>