<html>
	<meta charset="UTF-8">
	<title>Database Universitas</title>
	<head>
		<h2 align="center">Calculator Web</h2>
	</head>
	<body color="black" font-color="white">
		<form action="<?php echo base_url('calculator/hasil_hitung'); ?>" method="POST">
            <input type="text" name="var1" value="<?php echo $var1; ?>">
            <input type="text" name="var2" value="<?php echo $var2; ?>">
            <select name="operasi">
                <option value="kurang" <?php echo $operasi == 'kurang'?'selected':''?> >Pengurangan</option>
                <option value="tambah" <?php echo $operasi == 'tambah'?'selected':''?> >Penjumlahan</option>
                <option value="bagi" <?php echo $operasi == 'bagi'?'selected':''?> >Pembagian</option>
                <option value="kali" <?php echo $operasi == 'kali'?'selected':''?> >Perkalian</option>
                <option value="mod" <?php echo $operasi == 'mod'?'selected':''?> >Sisa Hasil Bagi</option>
            </select>
            <button type="submit">hitung</button>
        </form>

        <p>Hasil perhitungan : <?php echo $hasil; ?></p>
	</body>
</html>