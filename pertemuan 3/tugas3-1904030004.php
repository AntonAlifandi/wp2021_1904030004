<?php
echo "<h2>Belajar Bahasa Pemrograman PHP</h2>";
echo ("Hallo Kawan Semua<br>");
echo "Perkenalkan ", "Nama ", "Saya ", "Anton ", "Alifandi <br>";
echo "Saya sedang belajar Pemrograman PHP Pertemuan 3<br>";

?>
<?php
print "<h2>Belajar Bahasa Pemrograman PHP</h2>";
print "Hallo Kawan Semua<br>";
print "Perkenalkan Nama Saya Anton Alifandi<br>";
print "Saya sedang belajar Pemrograman PHP Pertemuan 3"
?><?php
      $namaLengkap = "Anton Alifandi";
      $namadepan = "Anton";
      $namabelakang = "Alifandi";
      $panggilan = "Anton";
      $nim = "1904030004";
      $ttl = "Tangerang, 20 Februari 2001";
      $jeniskelamin = "Laki-Laki";
      $umur = (0x14);
      $hobby = "Futsal dan Sepak bola";
      $alamat = "Rancalele, Kp. Cicayur 1, Kec. Pagedangan, Kab.Tangerang - Banten ";
      $nohp = "0858-7872-1367";
      $email = "alifandianton20@gmail.com";
      ?>

<h2>Identitas Diri</h2>
<p>
  Nama Lengkap:
  <?php echo $namaLengkap ?>
</p>
<p>
  Nama:
  <?php echo $namadepan . " " . $namabelakang; ?>
</p>
<p>
  Nama Panggilan:
  <?php echo $panggilan ?>
</p>
<p>
  NIM:
  <?php echo $nim ?>
</p>
<p>
  Tempat, Tanggal Lahir:
  <?php echo $ttl ?>
</p>
<p>
  Jenis Kelamin:
  <?php echo $jeniskelamin ?>
</p>
<p>
  Umur:
  <?php echo $umur ?>
</p>
<p>
  Hobi:
  <?php echo $hobby ?>
</p>
<p>
  Alamat:
  <?php echo $alamat ?>
</p>
<p>
  No. HP:
  <?php echo $nohp ?>
</p>
<p>
  Email:
  <?php echo $email; ?>
</p>