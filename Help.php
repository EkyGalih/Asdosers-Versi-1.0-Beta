<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bantuan Kecil</title>
  <!-- Core CSS - Include with every page -->
  <?php include "css.php"; ?>
</head>
<body>
  <!--  wrapper -->
  <div id="wrapper">
    <!-- navbar top -->
    <?php include "navbar.php"; ?>
    <!-- end navbar top -->

    <!-- navbar side -->
    <?php include "nav.php"; ?>
    <!-- end navbar side -->

    <!--  page-wrapper -->
    <div id="page-wrapper">

      <div class="row">
        <!-- Page Header -->
        <div class="col-lg-12">
          <h1 class="page-header">Bantuan Kecil</h1>
        </div>
        <!--End Page Header -->
      </div>

      <div class="row">
        <!-- Welcome -->
        <div class="col-lg-12">
          <div class="alert alert-info">
            <i class="fa fa-folder-open"></i>&nbsp;olla ! Berikut informasi bantuan kecil dari kami <b><a href="UserProfile.php"><?php echo $r['NamaUser'] ?></a></b> <i class="fa fa-smile-o fa-fw"></i>
          </div>
        </div>
        <!--end  Welcome -->
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h4>Menu Bantuan</h4>
            </div>
            <div class="panel-body">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#about" data-toggle="tab">Tentang App</a>
                </li>
                <li>
                  <a href="#kelas" data-toggle="tab">Kelas</a>
                </li>
                <li>
                  <a href="#JadwalPertemuan" data-toggle="tab">Jadwal &amp; Pertemmuan</a>
                </li>
                <li>
                  <a href="#NilaiMahasiswa" data-toggle="tab">Nilai &amp; Mahasiswa</a>
                </li>
                <li>
                  <a href="#other" data-toggle="tab">Bantuan Lain</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade in active" id="about">
                  <h4><hr/>Tentang Aplikasi<hr/></h4>
                  <p>Aplikasi ini awalnya dibuat hanya sekedar membantu bebrapa orang asisten dosen (ASDOS[meskipun cuman <i>"si pembuat"</i> aja yang pakek]) untuk melakukan pendataan dan penilaian terhadap hasil Ngasdos, total pendapatan, jumlah kelas, jumlah sks, dan pembuatan data nilai.<br/><br/> ide ini berawal dari keluhan salah seorang teman ASDOS yang mengeluhkan ribetnya buat penilaian terhadap mahasiswa bimbingan beliau, maka dari itu terinsipriasi dari sana barulah programer membuat aplikasi abal-abalan ini dan bertujuan untuk membantu rekan-rekan ASDOS untuk mempermudah bekerja.<br/><br/>Meskipun program ini dirancang dan dipoles sedemikian rupa, namun aplikasi ini masih memiliki banyak sekali kekurangan (silahkan kirimkan komentar anda atau jika anda seorang programer <a href="http://www.php.net" target="_blank" data-toggle="tooltip" data-placement="top" title="Situs Resmi PHP">PHP</a>, silahkan di modifikasi sendiri dan jangan lupa dibagikan kembali, Oke <i class="fa fa-smile-o fa-fw"></i>.<br/> Aplikasi ini <i>Open Source</i> jadi rekan-rekan pengembang boleh saja mengambil keuntungan materi hanya saja jangan <b><i>"BERLEBIHAN"</i></b>, Terima Kasih. <i class="fa fa-smile-o fa-fw"></i><br/><br/><i>"Learn &amp; Share"</i></p>
                </div>
                <div class="tab-pane fade" id="kelas">
                  <h4><hr/>Kelas<hr/></h4>
                  <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#1" class="collapsed">#1 Menambahkan Kelas</a>
                        </h4>
                      </div>
                      <div id="1" class="panel-collapse collapse" style="height: 0px;">
                        <div class="panel-body">
                          <ol>
                            <li>Pilih kelas di bagian menu</li>
                            <li>
                              Silahkan Masukkan:
                              <ol type="a" start="a">
                                <li>Nama Mata Kuliah</li>
                                <li>Kelas/Kelompok yang anda bimibing</li>
                                <li>Bobot Sks (khusus praktikum saja)</li>
                              </ol>
                            </li>
                            <li>Tekan Tombol <img src="assets/img/plus.png" width="20px" height="20px"> untuk tambah kelas &amp; tekan tombol <img src="assets/img/reset.png" width="20px" height="20px"> untuk reload halaman</li>
                          </ol>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#2" class="collapsed">#2 Ubah Data Kelas</a>
                        </h4>
                      </div>
                      <div id="2" class="panel-collapse collapse">
                        <div class="panel-body">
                         <ol>
                           <li>Pada tabel <i><b>"Daftar kelas anda"</b></i> pilih button <img src="assets/img/edit.png" width="20px" height="20px"> pada bagian tab <i>"Action"</i> untuk perubahan data kelas</li>
                           <li>Anda akan dialihkan ke halaman <i>"Update data kelas"</i> untuk melakukan proses pengubahan data kelas anda.</li>
                           <li>Tekan button <img src="assets/img/reload.png" width="20px" height="20px"> jika ingin menyimpan perubahan</li>
                         </ol>
                       </div>
                     </div>
                   </div>
                   <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#3" class="collapsed">#3 Hapus Kelas</a>
                      </h4>
                    </div>
                    <div id="3" class="panel-collapse collapse">
                      <div class="panel-body">
                        <ol>
                         <li>Pada tabel <i><b>"Daftar kelas anda"</b></i> pilih button <img src="assets/img/hapus.png" width="20px" height="20px"> pada bagian tab <i>"Action"</i> untuk hapus data kelas</li>
                         <li>Muncul popup <img src="assets/img/popup.png" width="130px" height="80px"> untuk konfirmasi hapus data kelas</li>
                       </ol>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="tab-pane fade" id="other">
              <h4><hr/>Bantuan Lain<hr/></h4>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#other1">#1 Kosongkan tabel</a>
                  </h4>
                </div>
                <div id="other1" class="panel-collapse collapse">
                  <div class="panel-body">
                    <ol type="I" start="I">
                      <li>Pada setiap tabel memiliki masing-masing button <img src="assets/img/clear.png" width="80px" height="30px">. Tombol ini berfunsgi untuk mengosongkan isi tabel tanpa harus menghapus satu persatu.</li>
                    </ol>
                  </div>
                </div>
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#other2">#2 Buat Jadwal</a>
                  </h4>
                </div>
                <div id="other2" class="panel-collapse collapse">
                  <div class="panel-body">
                    <video type="video/mp4" width="100%" height="auto" controls preload>
                      <source src="assets/video/videojadwal.mp4" type="video/mp4">
                      browser anda tidak mendukung type video ini
                    </video>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="JadwalPertemuan">
              <h4><hr/>Jadwal &amp; Pertemuan<hr/></h4>
              <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#4" class="collapsed">#1 Input jumlah pertemuan &amp; kalkulasi penghasilan</a>
                    </h4>
                  </div>
                  <div id="4" class="panel-collapse collapse" style="height: 0px;">
                    <div class="panel-body">
                      <ol>
                        <li>Pilih Jadwal &amp; Pertemuan di bagian menu</li>
                        <li>Pada kolom <img src="assets/img/kolomhari.png" width="120px" height="50px"> masukkan jumlah pertemuan atau jumlah kelas yang anda hadiri pada hari itu</li>
                        <li>Pada kolom <img src="assets/img/kolomsks.png" width="120px" height="50px"> masukkan total sks yang sudah anda penuhi pada hari itu.</li>
                        <li>Pada kolom <img src="assets/img/kolomtgl.png" width="120px" height="50px"> masukkan tanggal hari dimana anda mengajar, bukan tanggal dimana anda memasukkan data ini ke aplikasi</li>
                        <li>Tekan Tombol <img src="assets/img/plus.png" width="20px" height="20px"> untuk kalkulasi penghasilan anda</li>
                        <li>Jika data berhasil disimpan dan dikalkulasi, maka pada bagian bawah form akan menunjukkan jumlah penghasilan <img src="assets/img/uang.png" width="150px" height="30px"> &amp; sks <img src="assets/img/sks.png" width="120px" height="30px"> anda sesuai dengan data yang anda masukkan tadi.</li>
                      </ol>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#5" class="collapsed">#2 Pembuatan Jadwal Ngasdos</a>
                    </h4>
                  </div>
                  <div id="5" class="panel-collapse collapse">
                    <div class="panel-body">
                     <i><font color="red">* Fitur ini merupakan salah satu fitur andalan dari aplikasi ini.</font></i><br/><br/> Untuk menambahkan Jadwal :
                     <ol>
                       <li>Tekan Button <img src="assets/img/tambahjadwal.png" width="100px" height="30px"> untuk tambah jadwal. Untuk menambahkan jadwal, anda terlebih dahulu harus menambahkan data kelas anda terlebih dahulu</li>
                       <li>Akan muncul jendela popup, kemudian silahkan masukkan jadwal anda. untuk kolom <i>Deskripsi</i> anda bisa kosongkan.</li>
                       <li>Tekan button <img src="assets/img/plusblue.png" width="20px" height="20px"> untuk menambahkan jadwal</li>
                       <li>Jika berhasil, akan muncul detail jadwal anda <img src="assets/img/hasil.png" width="150px" height="50px"> pada kalender sesuai dengan tanggal dan jam yang sudah anda masukkan</li>
                     </ol>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="tab-pane fade" id="NilaiMahasiswa">
            <h4><hr/>Nilai &amp; Mahasiswa<hr/></h4>
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#6" class="collapsed">#1 Input data mahasiswa &amp; Nilai mahasiswa</a>
                  </h4>
                </div>
                <div id="6" class="panel-collapse collapse" style="height: 0px;">
                  <div class="panel-body">
                    <ol>
                      <li>Pilih <i>"Nilai Mahasiswa"</i> di bagian menu</li>
                      <li>Masukkan data mahasiswa beserta nilai yang sudah didapatkan oleh mahasiswa</li>
                      <li>Tekan button <img src="assets/img/plusblue.png" width="20px" height="20px"> untuk simpan data beserta nilai mahasiswa</li>
                      <li>Anda bisa melihat data mahasiswa behasil dimasukkan pada tabel <i>"Daftar Nilai"</i></li>
                    </ol>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#7" class="collapsed">#2 Ubah Nilai Mahasiswa</a>
                  </h4>
                </div>
                <div id="7" class="panel-collapse collapse">
                  <div class="panel-body">
                   <ol>
                    <li>Tekan button <img src="assets/img/edit.png" width="20px" height="20px"> untuk update data &amp; nilai mahasiswa.</li>
                    <li>Anda akan dialihkan ke-halaman untuk mengubah nilai mahasiswa mulai dari nilai <i>"Tugas, Uts, &amp; Uas"</i></li>
                    <li>Tekan button <img src="assets/img/reload.png" width="20px" height="20px"> untuk menyimpan perubahan nilai mahasiswa.</li>
                    <li>Nilai mahasiswa otomatis akan berubah baik <i>"Nilai Total, Nilai Rata-rata &amp; Grade"</i>.</li>
                  </ol>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#8" class="collapsed">#3 Hapus Data Mahasiswa</a>
                </h4>
              </div>
              <div id="8" class="panel-collapse collapse">
                <div class="panel-body">
                 <ol>
                  <li>Tekan button <img src="assets/img/hapus.png" width="20px" height="20px"> untuk hapus data mahasiswa.</li>
                  <li>muncul jendela popup <img src="assets/img/popup2.png" width="130px" height="60px">, untuk konfirmasi lebih lanjut mengenai tindakan anda.</i></li>
                  <li>Tekan <i>"OK"</i> untuk melanjutkan hapus data mahasiswa.</li>
                </ol>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#9" class="collapsed">#4 Cetak Data Mahasiswa</a>
              </h4>
            </div>
            <div id="9" class="panel-collapse collapse">
              <div class="panel-body">
               <ol>
                 <li>Karena satu mata kuliah bisa jadi anda mengambil 2 kelompok sekaligus. tentukan kategori Mata Kuliah &amp; Kelas mana yang ingin anda cetak terlebih dahulu.</li>
                 <li>Tekan button <img src="assets/img/cetak.png" width="50px" height="30px"> untuk mencetak niali (format xls).</li>
               </ol>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
<?php include "CP.php"; ?>
</div>
<?php include "js.php"; ?>
</body>
</html>
