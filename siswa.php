<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-8"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
					<br>
					<br>
					<br>
					<br>
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Data Siswa SMK1 N PGGS</h2>
					<table class="table table-bordered table-hover" id="data-table">
						<thead>
							<br>
							<br>
							<th>NISN</th>
							<th>Nama Lengkap</th>
							<th>Jenis Kelamin</th>
							<th>Alamat</th>
						</tr>
						</thead>
						<?php

						include "koneksi.php";
						$sql=$koneksi->query("select * from siswa2 order by nama ASC");

						while($row= $sql->fetch_assoc()){
						?>
						<tr>
							<td><?php echo $row['nisn']?></td>
							<td><?php echo $row['nama']?></td>
							<td><?php echo $row['jenis_kelamin']?></td>
							<td><?php echo $row['alamat']?></td>
							<td><a href="detail-siswa.php?id=<?php echo $row['siswa_id']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-zoom-in"></button>
                </a></td>
						</tr>
						<?php } ?>
						</table>
				</div>
      </div>
			</div><!-- Akhir Kolom Pertama -->
			
      </div>
			</div><!-- Akhir Kolom Kedua -->
		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page -->
		<?php include "footer.php";?>