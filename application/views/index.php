<!DOCTYPE html>
<html>
  <head>
    <?php $this->load->view('inc/head'); ?>

  </head>
  <body class="skin-blue">
  <!-- wrapper di bawah footer -->
    <div class="wrapper">
      
      <?php $this->load->view('inc/head2'); ?>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <?php $this->load->view('inc/sidebar'); ?>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <b>DASHBOARD</b>
          </h1>
          <!-- <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol> -->
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $total_komentar; ?></h3>
                  <p><b>TOTAL KOMENTAR</b></p>
                </div>
                <div class="icon">
                  <i class="fa fa-comments-o"></i>
                </div>
                <a href="#" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $total_product; ?></h3>
                  <p><b>TOTAL PRODUCT</b></p>
                </div>
                <div class="icon">
                  <i class="fa fa-photo"></i>
                </div>
                <a href="#" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $product_view[0]['totalview']; ?></h3>
                  <p><b>TOTAL PENGUNJUNG</b></p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="#" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $total_testimoni; ?></h3>
                  <p><b>TOTAL TESTIMONI</b></p>
                </div>
                <div class="icon">
                  <i class="fa fa-folder"></i>
                </div>
                <a href="#" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
              <!-- Chat box -->
              <div class="box box-success">
                <div class="box-header">
                  <i class="fa fa-comments-o"></i>
                  <h3 class="box-title">Komentar Terakhir</h3>
                </div>
                <div class="box-body chat" id="chat-box">
                  <!-- chat item -->
                  <div class="item">
                    <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="user image" class="online"/>
                    <p class="message">
                      <a href="#" class="name">
                        <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
                        Sari Putri
                      </a>
                      olshop yang sangat lengkap ..
                    </p>
                  </div><!-- /.item -->
                  <!-- chat item -->
                  <div class="item">
                    <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="user image" class="offline"/>
                    <p class="message">
                      <a href="#" class="name">
                        <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                        Sarifudin
                      </a>
                      Produk ori dan berkualitas
                    </p>
                  </div><!-- /.item -->
                  <!-- chat item -->
                  <div class="item">
                    <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="user image" class="offline"/>
                    <p class="message">
                      <a href="#" class="name">
                        <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
                        Eri susan
                      </a>
                      sangat terpercaya.
                    </p>
                  </div><!-- /.item -->
                </div><!-- /.chat -->
              </div><!-- /.box (chat box) -->
            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">

            </section><!-- right col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <!-- <b>Version</b> 2.0 -->
        </div>
        <strong>Copyright &copy; 2019 <a href="#"></a></strong>
        <strong><p class="pull-right">Designed by <span>bhond005 and Developed by Trisnatya Mahardhika</span></p></strong>
      </footer>
    </div><!-- ./wrapper -->
    <?php $this->load->view('inc/footer', TRUE); ?>
  </body>
</html>