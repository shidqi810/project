<?php require("includes/header.html"); ?>

			<!--Wrapper Content dan Sidebar-->
			<div class="wrapper">
				
				<?php require("includes/sidebar.html"); ?>				
				
				<!--Content-->
				<div class="content" align="justify">	
					<h2 align="center">Hubungi Kami</h2>
					
					<br><br>
					<br><br>				
					
					<!--Hubungi Kami-->
					<form>
						<table width=”600″ style="padding:50px;">  
							<tr>
								<td width="150"><label for="nama">Nama</label></td>
								<td width="50">&nbsp;</td>
								<td><input type="text" id="nama" placeholder="Masukan Nama"></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><label for="email">Email</label></td>
								<td>&nbsp;</td>
								<td><input type="email" id="email" placeholder="Masukan Email"></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><label for="telp">No. Telepon</label></td>
								<td>&nbsp;</td>
								<td><input type="tel" id="telp" placeholder="Masukan No. Telepon"></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><select width="600">
									<option>--Pilih Kategori Pesan--</option>
									<option>Kritik dan Saran</option>
									<option>Pengaduan</option>
								</select></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><label for="pesan">Pesan</label></td>
								<td>&nbsp;</td>
								<td><textarea rows="10" placeholder="Masukkan Pesan"></textarea></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td>&nbsp;</td>			
								<td>&nbsp;</td>
								<td align="right"><button type="submit" class="buttonblue">Kirim</button></td>
							</tr>
						</table>
					</form>
					<!--End Hubungi Kami-->
					
					<br><br>
					<br><br>
					<br><br>
					
					<!--Tentang Kami-->
					<table class="table-striped">
						<tbody>
							<tr>
								<td class="padding">Alamat</td>	
								<td class="padding">Jalan Palembang–Jambi KM. 117 (Simpang B1 & B2) Kelurahan Lilin Jaya Kecamatan Sungai Lilin Kabupaten Musi Banyuasin 30775, </td>
							</tr>	
							<tr>	
								<td class="padding">Telepon</td>
								<td class="padding">0813-6710-1091</td>
							</tr>	
							<tr>
								<td class="padding">Email</td>
								<td class="padding">rsudsungaililinmuba@gmail.com</td>
							</tr>				
						</tbody>
					</table>
					<!--End Tentang Kami-->
					
					<br><br>
					
					<!--Lokasi Rumah Sakit-->
					<h3>Lokasi Rumah Sakit</h3>
					<br>
					<center>
						<img src="images/lokasi.jpg">
					</center>
					<!--End Lokasi Rumah Sakit-->
					
					<br><br>
					
				</div>
				<!--End Content-->				
			</div>
			<!--Wrapper Content dan Sidebar-->
		
<?php require("includes/footer.html"); ?>