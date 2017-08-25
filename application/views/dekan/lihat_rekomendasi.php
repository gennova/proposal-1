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
          <div class="text-center" style="font-size:30px;"> Lihat Rekomendasi</div><br />
          <table id="example" class="table table-bordered table-striped header-fixed ">
            <thead>
            <tr>
              <th>No.</th>
              <th>Judul Proposal</th>
              <th>Nama PJK</th>
              <th>View Proposal</th>
              <th>Rekomendasi RAB</th>
              <th>Rekomendasi Item</th>
           </tr>
            </thead>
            <tbody>
            <?php $i =1; if(!empty($proposale)) {
            foreach($proposale as $proposal) : { ?>
           <tr data-toggle="modal" data-target="myModal" class="noExl">
                <td><?php echo $i++; ?></td>
               
                <td><?php echo $proposal->judul; ?></td>
                <td><?php echo $proposal->nama_pjk; ?></td>
                <td><?php echo anchor("xxxxxxx",'<span class="glyphicon glyphicon-file text-primary fa-lg" aria-hidden="true" title="View Proposal"></span>'); ?>   
                </td>
                <td><?php echo anchor("xxxxxxx",'<span class="glyphicon glyphicon-list-alt text-primary fa-lg" aria-hidden="true" title="Rekomendasi RAB"></span>'); ?>   
                </td><td><?php echo anchor("xxxxxxx",'<span class="glyphicon glyphicon-list-alt text-primary fa-lg" aria-hidden="true" title="Rekomendasi Item"></span>'); ?>   
                </td>
               
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