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
        <h2>Data Master Station Instr (Latest)</h2>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Stasiun</th>
                    <th>vnotch wl</th>
                    <th>vcc</th>
                    <th>logger temp</th>
                    <th>datetime</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $count = 0;
                foreach ($Masterstation as $u) :
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><a class="width-100 dsp_flex pointer" style="color: white; text-decoration: none;" href="<?php echo base_url('Masterstation/details/').$u['TableData'];?>"><?= $u['TableData'] ?></a></td>
                        <td><?php echo $vnotch_wl[$count]; ?></td>
                        <td><?php echo $vcc[$count]; ?></td>
                        <td><?php echo $logger_temp[$count]; ?></td>
                        <td><?php echo $datetime[$count]; ?></td>
                    </tr>
                <?php
                $count++;
                endforeach;
                ?>
            </tbody>
        </table>
    <!-- </div>
    <div class="container">
        <h2>Data Stasiun Instr</h2>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Stasiun</th>
                    <th>Datetime</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($Masterstation as $row) :
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['nama_station'] ?></td>
                        <td><?= date('Y-m-d H:i:s', strtotime($row["DATETIME"]))?></td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div> -->
</body>
</html>