<div class="site-section" style="background-image: url(images/pesan_bg.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto text-center mb-5 section-heading">
        <h2 class="mb-5">Entry Data Pemesanan</h2>
      </div>
    </div>

    <form action="" method="POST" class="form-dropdown" role="form">
      
      <div class="form-group">
        <input type="text" class="form-control" name="nama_pelanggan" placeholder="Masukan Nama Anda" required="">
      </div>
      
      <div class="form-group">
        <select name="jeniskelamin" class="form-control" required="">
          <option value="Silahkan Pilih">Pilih Jenis Kelamin Anda</option>
          <option value="Laki-laki">Laki-Laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>

      <div class="form-group">
        <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat Anda" required="">
      </div>
      
      <div class="form-group">  
        <input type="text" class="form-control" name="notelp" placeholder="Masukan No. Telp Anda" required="">
      </div>
  
      <div class="form-group">  
        <input type="email" class="form-control" name="email" placeholder="Masukan Email Anda" required="">
      </div>    
      
      <div class="form-group">
        <label style="color: white;">Masukan Tanggal Pesta Anda</label>
        <input type="date" class="form-control" name="tanggal_pesta" required="">
      </div>
    
      <div class="form-group">
        <select name="nama_paket" class="form-control" required="">
        <?php 
        include "config/koneksi.php";
        $query  = mysqli_query($konek,"SELECT * FROM paket");
        while($data = mysqli_fetch_assoc($query)){
        ?>
        <option value="<?php echo $data['id_paket']; ?>" ><?php echo $data['nama_paket']; ?></option>
        <?php 
        }
        ?>
        </select>
      </div>
      
      <div class="form-group" style="color: white;">
        <label>Apakah Anda Ingin Menambahkan Permintaan Khusus?<br>
        <input type="radio" name="khusus" value="Ya" required=""> Ya<br>
        <input type="radio" name="khusus" value="Tidak" required=""> Tidak
        </label>
      </div>

      <button type="submit" name="submit" class="btn btn-danger btn-lg btn-block">Pesan</button>

      </form>
    </div>
  </div>
</div>

<?php 
include "config/koneksi.php";
if (isset($_POST['submit'])){
    $tgl = date('Y-m-d',strtotime('-4 day',strtotime($_POST['tanggal_pesta'])));
    $tgl_pemasangan=$tgl;
    $query2 = mysqli_query($konek,"SELECT * FROM pelanggan ORDER BY id_pelanggan DESC");
    $data2 = mysqli_fetch_assoc($query2);
    $jml = mysqli_num_rows($query2);
    if($jml==0){
      $id_pelanggan='PL001';
      }else{
        $subid = substr($data2['id_pelanggan'],3);
        if($subid>0 && $subid<=8){
          $sub = $subid+1;
          $id_pelanggan='PL00'.$sub;
        }elseif($subid>=9 && $subid<=100){
          $sub = $subid+1;
          $id_pelanggan='PL0'.$sub;
        }elseif($subid>=99 && $subid<=1000){
          $sub = $subid+1;
          $id_pelanggan='PL'.$sub;
        }
      }

    $qr = mysqli_query($konek,"SELECT * FROM pemesanan ORDER BY id_pesan DESC");
    $dt = mysqli_fetch_assoc($qr);
    $jl = mysqli_num_rows($qr);
    if($jl==0){
      $id_pesan='PS001';
    }else{
      $suid = substr($dt['id_pesan'],3);
      if($suid>0 && $suid<=8){
        $su=$suid+1;
        $id_pesan='PS00'.$su;
      }elseif($suid>=9 && $suid<=100){
        $su=$suid+1;
        $id_pesan='PS0'.$su;
      }elseif($suid>=99 && $suid<=1000){
        $su=$suid+1;
        $id_pesan='PS'.$su;
      }
    }

    $nama_pelanggan=$_POST['nama_pelanggan'];
    $jeniskelamin=$_POST['jeniskelamin'];
    $alamat=$_POST['alamat'];
    $notelp=$_POST['notelp'];
    $email=$_POST['email'];
    $tanggal_pesan = date('Y-m-d');
    $tanggal_pesta=$_POST['tanggal_pesta'];
    $nama_paket=$_POST['nama_paket'];
    $khusus=$_POST['khusus'];
    if($khusus=='Ya'){
      $khusus=5000000;
    }else{
      $khusus=0;
    }

    $query1 = mysqli_query($konek,"SELECT * FROM paket WHERE id_paket='$nama_paket'");
    $data1 = mysqli_fetch_assoc($query1);
    $harga = $data1['harga'];
    $total_biaya = $harga + $khusus;
    $dp = 0.1 * $total_biaya;

    $que = mysqli_query($konek,"INSERT INTO pelanggan VALUES('$id_pelanggan','$nama_pelanggan','$jeniskelamin','$alamat','$notelp','$email')");
    $quer = mysqli_query($konek,"INSERT INTO pemesanan VALUES('$id_pesan','$tanggal_pesan','$id_pelanggan','$tanggal_pesta','$tgl_pemasangan','$nama_paket','$khusus','$total_biaya','$dp')");


    echo '<script>alert("Anda Berhasil Melakukan Penyewaan!");</script>';
?>
    <script>window.location.href="donepesan.php?id=<?php echo $id_pesan; ?>"</script>
<?php
  } 
  echo mysqli_error($konek);
?>
  