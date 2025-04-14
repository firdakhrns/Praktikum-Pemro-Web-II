<!DOCTYPE html>
<body>
    <?php
        $nama = $nim = $gender = "";
        $namaerror = $nimerror = $gendererror = "";

        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            if (empty($nama)) {
                $namaerror = 'nama tidak boleh kosong';
            } 

        $nim = $_POST['nim'];
            if (empty($nim)) {
                $nimerror = 'nim tidak boleh kosong';
            } 

        $gender = $_POST['gender'] ?? "";
            if (empty($gender)) {
                $gendererror = 'jenis kelamin tidak boleh kosong';
            } 
        }
    ?>

    <form action="" method="post">
        Nama: <input type="text" name="nama" value="<?= $nama ?>"><span style="color:red">*</span>
        <?php if ($namaerror) echo "<p style='color:red;'> $namaerror</p>"; ?><br>
        NIM: <input type="text" name="nim" value="<?= $nim ?>"><span style="color:red">*</span>
        <?php if ($nimerror) echo "<font color='red'> $nimerror</font>"; ?><br>
        Jenis Kelamin:<span style="color:red">*</span>
        <?php if ($gendererror) echo "<font color='red'>$gendererror</font>"; ?><br> 
        <input type="radio" name="gender" value="Laki-Laki" <?= ($gender == "Laki-Laki") ? 'checked' : '' ?>>Laki-Laki<br>
        <input type="radio" name="gender" value="Perempuan" <?= ($gender == "Perempuan") ? 'checked' : '' ?>>Perempuan<br>
        <button type="submit" name="submit">Submit</button>
    </form> 
    
    <?php
    if (isset($_POST['submit'])) {
        if ($nama && $nim && $gender) {
            echo "<h2>Output:</h2>";
            echo "$nama<br>";
            echo "$nim<br>";
            echo "$gender<br>";
        }
    }
    ?>
</body>