<title>Aplikasi DaPat Versi 1.0</title>
<style type="text/css">
 td {
  padding: 2px;
  width: 350px;
  font-family: 'IstokWebRegular';
  font-size:13px;
 }
 .foto_kanan {
  width:120px;
  float:right;
  border:4px solid #343C42;
  margin-right: 10px;
}
.text_kanan {
  width:550px;
  float:right;
  margin-right: 10px;
}
.tanda_tangan {
  width:200px;
  float:right;
  margin-right: 0px;
}
.kiri {
  width:250px;
  float:left;
  margin-right: 15px;
}
table {
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
}
@media print {
button.noPrint { display: none; }
}
</style>
<body  style="font-family:Times New Roman;font-size:12px">
          <img src="<?php echo base_url()."assets/images/logo_ut.png" ?>" alt="logo" width="10%" />
          <center><h3><u>DAFTAR HADIR RAPAT</u></br>
          <?php echo $judul_rapat ?></h3>
          </center>

          <?php
            $daftar_hari = array(
             'Sunday' => 'Minggu',
             'Monday' => 'Senin',
             'Tuesday' => 'Selasa',
             'Wednesday' => 'Rabu',
             'Thursday' => 'Kamis',
             'Friday' => 'Jumat',
             'Saturday' => 'Sabtu'
            );
            ?>

         <p><b>UT BANDA ACEH<br>
         Hari/Tanggal : <?php echo $daftar_hari[date('l',strtotime($tgl_rapat))]; echo"/";  echo date('d-m-Y',strtotime($tgl_rapat)); ?></b></p> 
        <table class="table">
        <thead>
        <tr>
          <th bgcolor="silver" width="1%">No.</th>
          <th bgcolor="silver" width="5%">Nama Pegawai</th>
          <th bgcolor="silver" width="5%">Jabatan</th>
          <th bgcolor="silver" width="3%">Tanda Tangan</th>
          </thead>     
        <?php 
        $no=1;
        if( ! empty($dataRpt)){
        foreach($dataRpt as $dr) { ?>
        <tr>
          <td height="50px" align="center"><?php echo $no; ?></td>
          <td><?php echo $dr->nama_lengkap; ?></td>
          <td><?php echo $dr->jabatan; ?></td>
          <td><?php echo $no; ?></td>
        </tr>
      <?php
      $no++;
      echo "</tr>";
      }
    }
      ?>
      </table>
      </br>
     
      <br><br>         
              </div>
            </div>
            </div>
          </div>
          </div>
          </div>
          <br> 
            </br>
            <!--<p class="tanda_tangan">Banda Aceh, <?php echo date('d-m-Y'); ?><br>-->
            <p class="tanda_tangan"><b>DIREKTUR<br><br><br><br><br><br>
            <u>Drs. Edy Syarif, M. Pd</u><br>
            NIP. 196011161987031002


            </p>
  

           <a href="<?php echo base_url()."page/tabel_rapat"; ?>"><button class="noPrint" type="button" >Kembali</button></a>
           <a onClick="window.print()"><button type="button" class="noPrint" >Cetak</button></a>
           </div>
           </div>
           </div>                          
             </div>
             </div>

      </div>
    </div>
    </div>
    </div>
    </div>

  </div>
  <script src="<?php echo base_url()."assets/vendors/js/vendor.bundle.base.js" ?>"></script>
  <script src="<?php echo base_url()."assets/vendors/js/vendor.bundle.addons.js" ?>"></script>
  <script src="<?php echo base_url()."assets/js/off-canvas.js" ?>"></script>
</body>

</html>