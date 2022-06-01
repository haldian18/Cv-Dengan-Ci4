<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Mahasiswa</title>
</head>

<body>
    <form action="biodata/save" method="GET">
        <h1>BIODATA MAHASISWA</h1>
        <table>
            <tr>
                <td>NPM</td>
                <td> : <input type="text" name="npm">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <input type="text" name="nama">
                </td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td> : <input type="text" name="email">
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td> :
                    <input type="radio" name="jenis_kelamin" value="L">Laki-Laki
                    <input type="radio" name="jenis_kelamin" value="P">Perempuan
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td> :
                    <select name="agama">
                        <option value="agama">Islam</option>
                        <option value="agama">Kristen</option>
                        <option value="agama">Hindu</option>
                        <option value="agama">Buda</option>
                        <option value="agama">Katolik</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <textarea name="alamat" id="" cols="30" rows="5"></textarea></td>
            </tr>
            <tr>
                <td><button type="submit" value="simpan" name="save">SIMPAN</button>
                    <button type="reset" value="bata">BATAL</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>