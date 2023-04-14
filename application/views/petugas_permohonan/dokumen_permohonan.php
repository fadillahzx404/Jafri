                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>

                     <div class="row">

                    <div class="col-auto">

                    

                    <?= form_error('user','<div class="alert alert-danger" role="alert">', '</div>'); ?>

                      <?= $this->session->flashdata('notif'); ?>


                    </div>
                    </div>

                    <div class="row">
                        <div class="col">

                        <table class="table table-hover">
                            <thead>
                                <tr>

                                <th scope="col">No.</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jenis laporan</th>
                                <th scope="col" >Nama Perushaan</th>
                                <th scope="col">Isi Laporan</th>
                                <th scope="col">Lampiran Dokumen</th>
                                <th scope="col" style="text-align: center;">Status</th>
                                <th scope="col" style="text-align: center;">Action</th>
                                
                                
                                </tr>
                                <tbody>





                                <?php $i = 1; ?>
                                <?php foreach ($dokumenpermohonan as $dp) : ?>
                                
                                <tr>
                                
                                <th scope="row"><?= $i; ?></th>
                                <td><?= date('d-F-Y',$dp['date']); ?></td>
                                <td><?= $dp['jenis_dokumen']; ?></td>
                                <td style="padding-left: 60px;"><?= $dp['perusahaan_id']; ?></td>
                                <td style="padding-left: 20px;"><button data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-primary btn-sm">Lihat</button></td>
                                <td style="padding-left: 70px;"> <a href="<?= base_url()?>dokumen/dokumen_permohonan/<?= $dp['dokumen'];?>" download>
                                <i class="far fa-file-alt fa-2x"></i></a></td>

                                <?php if($dp['status_id'] == 1):?>
                                <td class="alert alert-warning" style="text-align: center;"><strong><?= $dp['status']; ?></strong></td>
                                <?php elseif ($dp['status_id'] == 2): ?>
                                <td class="alert alert-primary" style="text-align: center;"><strong><?= $dp['status']; ?></strong></td>
                                <?php elseif ($dp['status_id'] == 3): ?>
                                <td class="alert alert-danger" style="text-align: center;"><strong><?= $dp['status']; ?></strong></td>
                                <?php elseif ($dp['status_id'] == 4): ?>
                                <td class="alert alert-success" style="text-align: center;"><strong><?= $dp['status']; ?></strong></td>
                                <?php else :?>
                                  <td><?= $dp['status']; ?></td>
                                <?php endif; ?>

                                <td style="text-align: center;">
                                    <a href="<?= base_url('petugas_permohonan/lihatdokpermohonan/')?><?= $dp['id']; ?>" type="button" class="btn btn-success btn-sm">Lihat</a>
                                    
                                </td>
                                
                                </tr>
                                <?php $i++ ?>
                                <?php endforeach; ?>

                                
                            </tbody>
                            </thead>
                           
                            </table>
                                                    </div>
                    </div>
                                                
                    
                    
                   
                    
                </div>
                
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


            <!-- Modal  Tambah-->



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Isi Laporan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?= $dp['isi_laporan']; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>




