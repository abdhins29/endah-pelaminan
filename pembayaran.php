<div class="site-section" style="background-image: url(images/bayar_bg.png);" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto text-center mb-5 section-heading">
        <h2 class="mb-5">Form Pembayaran</h2>
      </div>
    </div>
</div>

	<div class="subscribe section-wrapper">
			<div class="container-fluid">
			<center>
				<form role="form" action="" method="post">
				<div class="form-group">
					<div class="input-group col-md-3 col-md-9">
						<input type="text" name="id_pesan" class="form-control" placeholder="Masukan ID_PESAN Anda" required="">
						<span class="input-group-btn">	
						<button class="btn btn-success btn-lg btn-block" name="check" type="submit">Check</button>
						</span>
					</div>
				</form>
			</center>
			</div>
			</div>
	</div> <!-- /.subscribe -->

<?php
	include ("config/koneksi.php");
	if(isset($_POST['check']))
	{
		$id_pesan = $_POST['id_pesan'];

	$sqlQ = mysqli_query($konek,"SELECT * FROM pemesanan WHERE id_pesan = '$id_pesan'");		
	if(mysqli_num_rows($sqlQ)<1){
	echo "<script>alert('ID_PESAN Tidak Dikenal!');</script>";
	echo "<script>window.location.href='index.php?page=pembayaran';</script>";
	}
	$sqlQQ = mysqli_query($konek,"SELECT * FROM konfirmasi where id_pesan = '$id_pesan'");
	if(mysqli_num_rows($sqlQQ)>0){
	?>
	<div class="subscribe section-wrapper">
		<center>
		<h2>Terima Kasih Sudah Membayar</h2>
		<div class="container">
			<div class="form-group">
				<h2>Anda Akan Kami Hubungi Dalam Waktu 2x24jam</h2>
			</div>
		</div>
		</center>
	</div>
	<?php	
	}
	else
	{	
	?>	

<!-- Find a Tour -->
<br>
<br>
<section class="tour section-wrapper container" style="background:dimgrey;padding:30px;border:2px solid dimgrey;">
	<?php
	$SqlQ = mysqli_query($konek,"SELECT pm.id_pesan, dp, nama_pelanggan, alamat, notelp, email
                              FROM pemesanan pm
                              JOIN pelanggan pl ON pm.id_pelanggan = pl.id_pelanggan WHERE id_pesan='$id_pesan'");
	$DataQ = mysqli_fetch_assoc($SqlQ);
?>		
<h2>Form Pembayaran</h2>

	<form role="form" type="" method="post" enctype="multipart/form-data"">
			<div class="form-group">
				<label>ID Pesan</label>
				<input type="text" name="id_pesan" class="form-control" value="<?php echo $DataQ['id_pesan']; ?>" readonly="" />
			</div>

			<div class="form-group">
				<label>DP Awal</label>
				<input type="text" name="dp_awal" class="form-control" value="<?php echo $DataQ['dp']; ?>" readonly="" />
			</div>

			<div class="form-group">
				<label>Upload Bukti Pembayaran</label>
					<input type="file" name="gambar" class="form-control" required=""/>
			</div>
			<div class="form-group">
        		<label>Masukan Tanggal Pembayaran Anda</label>
        			<input type="date" class="form-control" name="tanggal_bayar" required="">
      		</div>

			<div class="form-group">
					<button type="submit" name="kirim" class="btn btn-primary btn-lg">Upload</button>
			</div>
				
		</form>	
<div class="table-responsive">
<table class="table table-bordered" style="color:black;width:100%;">
	<tr style="background:aqua;color:black;font-weight:bold">
		<td>Nama Pelanggan</td>
		<td>Alamat</td>
		<td>Telp</td>
		<td>E-mail</td>
	</tr>
	<tr style="background:ghostwhite;color:">
		<td><?php echo $DataQ['nama_pelanggan']; ?></td>
		<td><?php echo $DataQ['alamat']; ?></td>
		<td><?php echo $DataQ['notelp']; ?></td>
		<td><?php echo $DataQ['email']; ?></td>
	</tr>
</table>
</div>		
		</div>
	</section> <!-- /.tour -->	
	<hr>
<?php
}
	}
	
if(isset($_POST['kirim'])){
	$query2 = mysqli_query($konek,"SELECT * FROM konfirmasi ORDER BY id_konfirmasi DESC");
    $data2 = mysqli_fetch_assoc($query2);
    $jml = mysqli_num_rows($query2);
    if($jml==0){
      $id_konfirmasi='KN001';
      }else{
        $subid = substr($data2['id_konfirmasi'],3);
        if($subid>0 && $subid<=8){
          $sub = $subid+1;
          $id_konfirmasi='KN00'.$sub;
        }elseif($subid>=9 && $subid<=100){
          $sub = $subid+1;
          $id_konfirmasi='KN0'.$sub;
        }elseif($subid>=99 && $subid<=1000){
          $sub = $subid+1;
          $id_konfirmasi='KN'.$sub;
        }
      }
    $tanggal_konfirmasi = date('Y-m-d');
	$id_pesan = $_POST['id_pesan'];
	$gambar = $_FILES['gambar']['name'];
	$tanggal_bayar = $_POST['tanggal_bayar'];
	
	mysqli_query($konek,"INSERT INTO konfirmasi VALUES('$id_konfirmasi','$tanggal_konfirmasi','$id_pesan','$gambar','$tanggal_bayar')");
	move_uploaded_file($_FILES['gambar']['tmp_name'], "images/bukti_pembayaran/".$_FILES['gambar']['name']);
	
	echo '<script>alert("Upload Bukti Berhasil");</script>';
?>
<script>window.location.href="donebayar.php?id=<?php echo $id_pesan; ?>";</script>
<?php	
}
?>