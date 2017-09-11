<!DOCTYPE html>
<html lang="en"> 
  

  <?php $this->view('template/head'); ?>
    

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
        <?php $this->view('template/sidebar'); ?>

        <?php $this->view('template/top'); ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="text-center" style="font-size:30px;">Notifikasi Revisi</div><br />
          <table id="example" class="table table-bordered table-striped header-fixed ">
            <thead>
            <tr>
              <th>No.</th>
              <th>Jenis Proposal</th>
              <th>Judul Proposal</th>
              <th>Nama PJK</th>
              <th>Tanggal Terkirim</th>
              <th>Catatan Revisi</th>
              <th>Korektor</th>
              
           </tr>
            </thead> 
            <tbody>
            <?php $i =1; if(!empty($revisine)) {
            foreach($revisine as $revisi) : { ?>
           <tr data-toggle="modal" data-target="myModal" class="noExl">
                <td><?php echo $i++; ?></td>
                <td><?php echo $revisi->jenis_proposal; ?></td>
                <td><a href="<?php echo base_url('kaprodi_ta/notifikasi/edit/');?><?php  echo '/'.$revisi->id_proposal; ?>"><?php echo $revisi->judul; ?></a></td>
                <td><?php echo $revisi->nama_pjk; ?></td>
                <td><?php echo $revisi->tgl_input; ?></td>
                <td><?php echo $revisi->revisi; ?></td>
                <td><?php echo $revisi->tingkatan; ?></td>
                    
            </tr>
            <?php } endforeach; } ?>
                  
          </table>

        </div>
        <!-- /page content -->

        <?php $this->view('template/footer'); ?>
      </div>
    </div>

    <?php $this->view('template/js'); ?>
    <script src="<?=base_url()?>asset/datatable/js/jquery-1.11.1.min.js"></script>
    <script src="<?=base_url()?>asset/datatable/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>asset/datatable/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>asset/datatable/js/dataTables.bootstrap.js"></script>


    <script type="text/javascript">
    $(document).ready( function () {
        $('#example').dataTable();
      } );
</script>
</body>
</html>
