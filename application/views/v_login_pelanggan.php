<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
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

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?=base_url()?>assets/images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="#" id="login" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20" type="submit">Sign in</button>
                                        <a class="au-btn au-btn--block au-btn--blue2" data-toggle="modal" href="#daftar" data-target="#daftar" style="text-align: center; color:white;">Daftar</a>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="modal fade" id="daftar">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Pendaftaran Pelanggan</h4>
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          </div>
          <div class="modal-body">
            <form id="proses_daftar" action="#" method="post">
            <table>
                <tr>
                    <td>Nama Pelanggan</td><td><input type="text" name="nama" class="form-control"></td>
                </tr>
                <tr>
                    <td>Alamat</td><td><textarea name="alamat" class="form-control"></textarea> ></td>
                </tr>
                <tr>
                    <td>Telepon</td><td><input type="text" name="telp" class="form-control"></td>
                </tr>
                <tr>
                    <td>Username</td><td><input type="text" name="username" class="form-control"></td>
                </tr>
                <tr>
                    <td>Password</td><td><input type="password" name="password" class="form-control"></td>
                </tr>
            </table>
            <input type="submit" name="daftar" value="DAFTAR">
            <p id="msg"></p>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Jquery JS-->
    <!-- Bootstrap JS-->
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

</body>

</html>

<script type="text/javascript">
	$("#proses_daftar").submit(function(event) {
        event.preventDefault();
        var data_input= $('#proses_daftar').serialize();
        $("#msg").html("<ul><li>Sedang memeriksa...</li></ul>");
        $.ajax({
            url:"<?=base_url()?>index.php/Login_user/simpan",
            type:"post",
            data:data_input,
            dataType:"json",
            success:function(hasil){
                if (hasil['status']==1) {
                    $("#msg").html(hasil['keterangan']);
                    $("[name=nama]").val('');
                    $("[name=alamat]").val('');
                    $("[name=telp]").val('');
                    $("[name=username]").val('');
                    $("[name=password]").val('');
                    setTimeout(function() {
                        $("#proses_daftar").modal("hide");
                    }, 3000);
                } else {
                    $("#msg").html(hasil['keterangan']);
                }
            }

        });
    });

    $("#login").submit(function(event)
    {
        event.preventDefault();
        var datalogin=$("#login").serialize();
        $("#pesan").html("loading...");
        $.ajax({
            url:"<?=base_url()?>index.php/Login_user/proses",
            type:"post",
            data:datalogin,
            dataType:"json",
            success:function(hasil){
                if(hasil['status']==1){
                    $("#pesan").html("Anda Sukses login");
                    setTimeout(function(){
                        location.href="<?=base_url()?>index.php/Dashboard_user";
                    }, 3000);
                } else{
                    $("#pesan").html("Username dan Password tidak cocok");
                }
            }
        })
    })
</script>
<!-- end document-->
