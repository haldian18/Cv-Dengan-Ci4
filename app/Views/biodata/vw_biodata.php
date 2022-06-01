<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Mahasiswa</title>
</head>

<body>
    <form action="biodata/save" method="GET">
        <h2>BIODATA MAHASISWA</h2>
        <table>
            <tr>
                <td>
                    Npm : <?php echo $_GET['npm']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Nama : <?php echo $_GET['nama']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Email : <?php echo $_GET['email']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Jenis Kelamin : <?php echo $_GET['jenis_kelamin']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Agama : <?php echo $_GET['agama']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Alamat : <?php echo $_GET['alamat']; ?>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>