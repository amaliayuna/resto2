<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h2 style="text-align: center;">Selamat Memesan Makanan Di Resto Hits</h2>
					<div class="row">
					</div><br>
				</div>
				<div class="col-md-12">
			  		<div class="row" id="lihat_masakan">
			  			
			  		</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="detail_masakan">
<div class="modal-dialog modal-lg">
	<div class="modal-content">
	<div class="modal-header">
		<h4 class="modal-title">Detail Masakan</h4>
	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	</div>
	<div class="modal-body">
	<div class="row">
		<div class="col-md-6">
			<div id="gambar"></div>
		</div>
	<div class="col-md-4">
		<div id="deskripsi"></div>
		<div id="jumlah"></div><br>
		<div id="meja"></div><br>
		<br>
		<div id="btn"></div>
		<div id="pesan"></div>
	</div>
	</div>

	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
	</div>
</div>
</div>

<!-- //menampilkan data makanan -->
<script type="text/javascript">
	$.getJSON("<?=base_url()?>index.php/Get_masakan",function(data){
		var datanya="";
		$.each(data,function(key,dt){
			datanya+=
			'<div class="col-md-4" >'+
			'<div class="card">'+
			'<div class="card-header">'+
			'<strong class="card-title">'+dt['nama_masakan']+'</strong>'+
			'</div>'+
			'<div class="card-body">'+
			'<div class="mx-auto d-block">'+
			'<img style="height:165px;width:210px;" src="<?=base_url('assets/gambar/')?>'+dt['gambar']+'" alt="Card image cap"><br><br>'+
			'<p class="card-text">'+dt['status_masakan']+'</p><br>'+
			'<p class="card-text">Rp.'+dt['harga']+',00</p></br>'+
			'<a href="#detail_masakan" ' + 'class="thumbnail text-center" data-toggle="modal" onclick="detail_makanan('+dt['id_masakan']+')" style="text-decoration:none" class="btn btn-success">detail</a>'+
			'</div>'+
			'</div>'+
			'</div>'+
			'</div>'+
			'</div>';
		});
		$("#lihat_masakan").html(datanya);
	});

	$("#cari").on('keyup',function(){
		$.getJSON("<?=base_url()?>index.php/Get_masakan/cari/"+$("#cari").val(),function(data){
			var datanya="";
			$.each(data,function(key,dt){
				datanya+=
				'<div class="card">'+
				'<div class="card-header">'+
				'<strong class="card-title">'+dt['nama_masakan']+'</strong>'+
				'</div>'+
				'<div class="card-body">'+
				'<div class="mx-auto d-block">'+
				'<img style="height:40px;width:40px;" src="<?=base_url('assets/gambar/')?>'+dt['gambar']+'" alt="Card image cap">'+
				'<p class="card-text">'+dt['status_masakan']+'</p><br>'+
				'<p class="card-text">Rp.'+dt['harga']+',00</p></br>'+
				'<a href="#detail_masakan" ' + 'class="thumbnail text-center" data-toggle="modal" onclick="detail_makanan('+dt['id_masakan']+')" style="text-decoration:none" class="btn btn-success">Beli</a>'+
				'</div>'+
				'</div>'+
				'</div>'+
				'</div>';
			});
			$("#lihat_masakan").html(datanya);
		});
	});

//tampilkan detail makanan
function detail_makanan(id_masakan){
	$.getJSON("<?=base_url()?>index.php/Get_masakan/detail/"+id_masakan,function(data){
		$("#gambar").html(
			'<img src="<?=base_url()?>assets/gambar/'+data['gambar']+'" style="width:100%">');
		$("#deskripsi").html(
			'<table class="table table-hover table-stripped">'+
			'<tr><td>Nama Masakan</td><td>'+data['nama_masakan']+'</td></tr>'+
			'<tr><td>Harga Masakan</td><td>'+data['harga']+'</td></tr>'+
			'</table>');
		$("#jumlah").html(
			'<label>jumlah</label><br>'+
			'<input type="number" id="jumlah_item" value="1" class="form-control">');
		$("#btn").html('<button id="beli" onclick="beli('+data['id_masakan']+')" class="btn btn-info">Beli</button> '+
			'<a href="<?=base_url()?>index.php/Pesan" class="btn btn-danger">CHECK OUT</a>');
	});
}

//menambahkan makanan ke pesanan
function beli(id_masakan)
{
	var jumlah=$('#jumlah_item').val();
	$('pesan').hide();
	$('pesan').removeClass("alert alert-success");
	$.getJSON("<?=base_url()?>index.php/Pesan/tambah_cart/"+id_masakan+"/"+jumlah,function(hasil)
	{
		$('#cart').html(hasil['total_cart']);
		$('#pesan').html("Item anda telah ditambahkan ke Keranjang");
		$('#pesan').addClass('alert alert-success');
		$('#pesan').show('animate');
		setTimeout(function() {
			$("#pesan").hide('fade');
		}, 3000);
	});
}

</script>
