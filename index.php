<!DOCTYPE html>
<html>
    <head>
        <title>Test</title>
        <link rel="stylesheet" href="style.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
                        <div class="nama">
        <h1>Test Html > PHP > Mysql</h1>
        <form action="test.php" method="POST" name="form-test">
            <tr height="46">
                <td> </td>
                <td>Masukkan Nama</td>
                <td><input type="text" name="nama" size="35" maxlength="25" /></td>
                <td><input type="submit" name="Submit" value="Submit">   
                <input type="reset" name="reset" value="Cancel"></td>
                <div>
                                            <table border="7">
                            <thead>
                                <td>No</td>
                                <td>Nama</td>
                            </thead>
                    <?php
                    include "mysql.php";
                    $no = 1;
                    $query = mysqli_query($kon, 'SELECT * FROM dimas');
                    echo "Nama-Nama yang ada di Database:\n";
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                            <tbody>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data['nama'] ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <button href="reset.html"><a href="reset.html">Reset Data Di Sini</a></button>
                                        </div>
                </div>
            </tr>
        </form>
    </body>
</html>