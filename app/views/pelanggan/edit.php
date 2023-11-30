<h2>Edit Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/update" method="post">
<input type="hidden" name="id" value="<?php echo $data['row']['pel_id']; ?>">
    <table>
        <tr>
            <td>PELANGGAN</td>
            <td>
                <select name="pel_id_gol">
                    <?php foreach ($data['golongan'] as $opt) { ?>
                        <option value="<?php echo $opt['gol_id']; ?>" <?php echo $opt['gol_id'] == $data['row']['pel_id_gol'] ? "selected" : ""; ?>><?php echo $opt['gol_name']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>KODE PELANGGAN</td>
            <td><input type="Varchar" name="pel_no" value="<?php echo $data['row']['pel_no'] ?>" required></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="pel_nama" value="<?php echo $data['row']['pel_nama'] ?>" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="pel_alamat" value="<?php echo $data['row']['pel_alamat'] ?>" required></td>
        </tr>
        <tr>
            <td>No.Hp</td>
            <td><input type="text" name="pel_hp" value="<?php echo $data['row']['pel_hp'] ?>" required></td>
        </tr>
        <tr>
            <td>KTP</td>
            <td><input type="text" name="pel_ktp" value="<?php echo $data['row']['pel_ktp'] ?>" required></td>
        </tr>
        <tr>
            <td>Seri</td>
            <td><input type="text" name="pel_seri" value="<?php echo $data['row']['pel_seri'] ?>" required></td>
        </tr>
        <tr>
            <td>Meteran</td>
            <td><input type="text" name="pel_meteran" value="<?php echo $data['row']['pel_meteran'] ?>" required></td>
        </tr>
        <tr>
            <td>User</td>
            <td>
                <select name="pel_id_user">
                    <option value="">-- Pilih --</option>
                    <?php foreach ($data['user'] as $opt) { ?>
                        <option value="<?php echo $opt['user_id']; ?>" <?php echo $opt['user_id'] == $data['row']['pel_id_user'] ? "selected" : ""; ?>><?php echo $opt['user_nama']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>