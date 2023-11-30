<h2>Input Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/save" method="post">
    <table>
        <tr>
            <td>GOLONGAN</td>
            <td>
                <select name="pel_id_gol">
                    <option value="">-- Pilih --</option>
                    <?php foreach ($data['golongan'] as $opt) { ?>
                        <option value="<?php echo $opt['gol_id']; ?>"><?php echo $opt['gol_name']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>KODE PELANGGAN</td>
            <td><input type="Varchar" name="pel_no" required></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="pel_nama" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="pel_alamat" required></td>
        </tr>
        <tr>
            <td>No.Hp</td>
            <td><input type="text" name="pel_hp" required></td>
        </tr>
        <tr>
            <td>Ktp</td>
            <td><input type="text" name="pel_ktp" required></td>
        </tr>
        <tr>
            <td>Seri</td>
            <td><input type="text" name="pel_seri" required></td>
        </tr>
        <tr>
            <td>Meteran</td>
            <td><input type="text" name="pel_meteran" required></td>
        </tr>
        <tr>
            <td>User</td>
            <td>
                <select name="pel_id_user">
                    <option value="">-- Pilih --</option>
                    <?php foreach ($data['user'] as $opt) { ?>
                        <option value="<?php echo $opt['user_id']; ?>"><?php echo $opt['user_nama']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>