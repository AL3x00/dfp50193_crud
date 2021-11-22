<?php
require 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senarai Pelajar</title>
</head>

<body>
    <a href="tambah.php">Add</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr bgcolor="#ffd700">
            <th>Bil</th>
            <th>Nama Pelajar</th>
            <th>Kad Pengenalan</th>
            <th>Tindakkan</th>
        </tr>
        <?php
        $bil = 1;
        $sql = "SELECT * FROM tbl_pelajar";
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_object()) {
        ?>
                <tr>
                    <td><?php echo $bil++; ?></td>
                    <td><?php echo $row->nama_pelajar; ?></td>
                    <td><?php echo $row->kp_pelajar; ?></td>
                    <td>
                        <a href="kemaskini.php?id_pelajar=<?php echo $row->id_pelajar; ?>">Edit</a>
                        |
                        <a href="padam.php?id_pelajar=<?php echo $row->id_pelajar; ?>" onclick="return confirm('Betul ke nak padam?');">Delete</a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
</body>

</html>