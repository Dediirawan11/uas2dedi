<?php include "header.php"; ?>
    <div class="container kontak">

    <div class="container">
        <!-- Awal baris -->
        <div class="row">
            <div class="col-md-8"><!-- Awal Kolom Pertama -->
            <div class="panel panel-default">
                <div class="panel-body">
                <h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Hubungi Kami</h2>
                <?php 

                    if(@$_GET['pesan']=="inputBerhasil"){

                    ?>
                                    <div class="alert alert-success">
                                    Terima kasih, pesan anda sudah terkirim!
                                    </div>
                    <?php

                    }

                    ?>
                    <form action="proses-kontak.php" method="post">
                        <table class="table table-hover">
                            <tr>
                                <td>Nama Lengkap
                                <input type="text" name="nama" class="form-control input-md" placeholder="Isikan nama anda dengan lengkap" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat Email
                                <input type="email" name="email" class="form-control input-md" placeholder="Isikan alamat email yang masih aktif" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Pesan
                                <textarea name="pesan" class="form-control input-md" required> </textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <input type="submit" value="Kirim" class="btn btn-lg btn-info"> <input type="reset" value="Batal" class="btn btn-lg btn-warning">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
      </div>
        <!-- sosmed icon -->
    <div class="iconBox">
        <a href="" class="perIconBox wa">
            <i class="fab fa-whatsapp"></i>
        </a>

        <a href="" class="perIconBox fb">
            <i class="fab fa-facebook-f"></i>
        </a>

        <a href="" class="perIconBox ig">
            <i class="fab fa-instagram"></i>
        </a>

        <a href="" class="perIconBox yt">
            <i class="fab fa-youtube"></i>
        </a>

        <a href="" class="perIconBox linkin">
            <i class="fab fa-linkedin-in"></i>
        </a>
    </div>

    <div class="footer footerHubungiKami">
 <?php include"footer.php";?>       
  