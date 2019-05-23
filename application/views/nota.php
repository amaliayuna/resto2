<head>
	<link href="<?=base_url()?>assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?=base_url()?>assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?=base_url()?>assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?=base_url()?>assets/css/theme.css" rel="stylesheet" media="all">
    <script src="<?=base_url()?>assets/vendor/jquery-3.2.1.min.js"></script>
</head>
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<i class="mr-2 fa fa-align-justify"></i>
							<strong class="card-title" v-if="headerText" style="text-align: center;">NOTA</strong>
						</div>
						<div class="card-body">
		<table class="table table-hover">
		<thead>
		<tr style="text-align: center;">
			<th style="text-align: center;">No</th>
			<th style="text-align: center;">Nama Pelanggan</th>
			<th style="text-align: center;">Masakan</th>
			<th style="text-align: center;">Harga</th>
			<th style="text-align: center;">Jumlah</th>
		</tr>
		</thead>
		<tbody>
			<?php
			$no=0;
			foreach ($data_order as $dt_der) {
				$no++;
				echo '<tr style="text-align:center;">
				<td>'.$no.'</td>
				<td>'.$dt_der->nama.'</td>
				<td>'.$dt_der->nama_masakan.'</td>
				<td>'.$dt_der->harga.'</td>
				<td>'.$dt_der->jumlah.'</td>
				</tr>';
			}
			echo
			'<tr>
				<td colspan="4">Total Bayar</td>
				<td>Rp.'.$dt_der->total_bayar.',00</td>
			</tr>
			<tr>
				<td colspan="4">Keterangan</td>
				<td>'.$dt_der->status_order.'</td>
			</tr>
			<tr>
				<td colspan="4">No Meja</td>
				<td>'.$dt_der->no_meja.'</td>
			</tr>
			<tr>
				<td colspan="4">Kasir</td>
				<td>'.$this->session->userdata('username').'</td>
			</tr>'
			?>
		</tbody>
		</table>
		<button class="btn btn-info" onclick="window.print()">Print</button>
	
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

<script src="<?=base_url()?>assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?=base_url()?>assets/vendor/slick/slick.min.js">
    </script>
    <script src="<?=base_url()?>assets/vendor/wow/wow.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/animsition/animsition.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?=base_url()?>assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?=base_url()?>assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?=base_url()?>assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?=base_url()?>assets/js/main.js"></script>