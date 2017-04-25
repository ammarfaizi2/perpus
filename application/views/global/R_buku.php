<!--css khusus halaman ini -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">


<!--modal dialog untuk hapus -->
  <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
            
                
            </div>
        </div>
    </div>
<!--content -->
<div class="box box-solid box-primary">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-book"></i> Daftar Buku</h3>
<form action="" method="get">
<select name="kat">
<option value="a.id_buku">ID Buku</option>
<option value="a.ISBN">ISBN</option>
<option value="a.judul">Judul</option>
</select>
<input type="text" name="q">
<input type="submit" value="Cari">
</form>
<!--    
    <div class="box-tools pull-right">
    
    </div>

  </div>
     <div class="box-body">
   <div class="form-group"></div>
   -->
   
   
   <table id="table-buku" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th class="center"> <i class="glyphicon glyphicon-plus"></i></th>
                <th>ID Buku</th>
                <th>ISBN</th>
                <th>Judul Buku</th>
                <th>Kategori</th>
                <th>Penerbit</th>
                <th>Pengarang</th>
                <th>No. Rak</th>
                <th>Tahun Terbit</th>
                <th>Stock</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>No</th>
                <th class="center"><i class="glyphicon glyphicon-plus"></i></th>
                <th>ID Buku</th>
                <th>ISBN</th>
                <th>Judul Buku</th>
                <th>Kategori</th>
                <th>Penerbit</th>
                <th>Pengarang</th>
                <th>No. Rak</th>
                <th>Tahun Terbit</th>
                <th>Stock</th>
                <th>Keterangan</th>
            </tr>
        </tfoot>
        <tbody>
         <?php
  $no = 1;
    foreach($data_buku->result_array() as $op)
    {
    	
    ?>
            <tr>
                <td><?php echo $no++ ;?></td>
                <td class="details-control"><i class="btn btn-box-tool" data-toggle="tooltip" title="Tampilkan Detail"><i class="glyphicon glyphicon-plus"></i></i>
                </td>

<?php
foreach($op as $qq)
print "<td>{$qq}</td>";
    }
  ?>            
         </tbody>
    </table>
  </div>
  <div class="box-footer">
    Menampilkan daftar buku, untuk melihat detail buku klik tombol + dan untuk melakukan pencarian buku gunakan form search pada bagian Kiri  atas.
  </div><!-- box-footer -->
</div><!-- /.box -->


      
  