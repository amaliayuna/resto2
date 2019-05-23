<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<i class="mr-2 fa fa-align-justify"></i>
							<strong class="card-title" v-if="headerText">Data Order</strong>
						</div>
						<div class="card-body">
		<table class="table table-hover">
		<thead>
		<tr style="text-align: center;">
			<th style="text-align: center;">ID Order</th>
			<th style="text-align: center;">Tgl</th>
			<th style="text-align: center;">Status Order</th>
			<th style="text-align: center;">Nama Plggn</th>
			<th style="text-align: center;">Total</th>
			<th style="text-align: center;">Aksi</th>
		</tr>
		</thead>
		<tbody>
			<?php
			$no=0;
			foreach ($data_order as $dt_der) {
				$no++;
				echo '<tr style="text-align:center;">
				<td>'.$dt_der->id_order.'</td>
				<td>'.$dt_der->tanggal.'</td>
				<td>'.$dt_der->status_order.'</td>
				<td>'.$dt_der->nama.'</td>
				<td>'.$dt_der->total_bayar.'</td>
				<td><a href="#update_order" class="btn btn-warning" data-toggle="modal" onclick="tm_detail('.$dt_der->id_order.')">Update</a> <a href="'.base_url('index.php/Order/Cetak/'.$dt_der->id_order).'" class="btn btn-danger">Cetak</a></td>
				</tr>';
			}
			?>
		</tbody>
		</table>
		<?php if ($this->session->flashdata('pesan')!=null): ?>
			<div class="alert alert-danger"><?= $this->session->flashdata('pesan');?></div>
		<?php endif?>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>

<div class="modal fade" id="update_order">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title" id="myModalLabel">Update Order</h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/Order/update_order')?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_order" id="id_order">
        Status Order
        <input type="text" id="status_order" name="status_order" class="form-control"><br>
        <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
		</div>
	</div>
</div>

<script type="text/javascript">

    function tm_detail(id_der) {
        $.getJSON("<?=base_url()?>index.php/Order/get_detail_order/"+id_der,function(data){
					$("#id_order").val(data['id_order']);
            $("#status_order").val(data['status_order']);
        });
    }

</script>
