  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo asset_url();?>backend/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url();?>admin/admin_panel">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Member</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>admin/daftar_member"><i class="fa fa-circle-o"></i> Daftar Member</a></li>
            <li><a href="<?php echo base_url();?>admin/paket_membership"><i class="fa fa-circle-o"></i> Paket Membership</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i> <span>Artikel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>admin/daftar_artikel"><i class="fa fa-circle-o"></i> Daftar Artikel</a></li>
            <li><a href="<?php echo base_url();?>admin/tambah_artikel"><i class="fa fa-circle-o"></i> Tambah Artikel</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Newsletter</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>admin/daftar_newsletter"><i class="fa fa-circle-o"></i> Daftar Newsletter</a></li>
            <li><a href="<?php echo base_url();?>admin/newsletter_baru"><i class="fa fa-circle-o"></i> Newsletter Baru</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-sm-6">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <div class="widget-user-image">
                <img class="img-circle" src="<?php echo asset_url();?>backend/img/user8-128x128.jpg" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username text-center">Profil Member</h3>
            </div>
            <div class="box-body no-padding">
              <table class="table table-condensed">
                <tr>
                  <br>
                  <br>
                  <th class="text-center" colspan="3"><h4><b>Nama Member</b></h4></th>
                </tr>
                <tr>
                  <td style="width: 35%">Nomer Member</td>
                  <td style="width: 15%">:</td>
                  <td>000000</td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>:</td>
                  <td>rudy@gmail.com</td>
                </tr>
                <tr>
                  <td>Tempat Lahir</td>
                  <td>:</td>
                  <td>jakarta</td>
                </tr>
                <tr>
                  <td>Tanggal Lahir</td>
                  <td>:</td>
                  <td>24-06-1995</td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td>:</td>
                  <td>jalan bagus no 77 kelapa gading, jakarta pusat</td>
                </tr>
                <tr>
                  <td>Kota</td>
                  <td>:</td>
                  <td>jakarta</td>
                </tr>
                <tr>
                  <td>Provinsi</td>
                  <td>:</td>
                  <td>DKI</td>
                </tr>
                <tr>
                  <td>No Telepon</td>
                  <td>:</td>
                  <td>085722341223</td>
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>
                  <td>:</td>
                  <td>Pria</td>
                </tr>
                <tr>
                  <td>Status</td>
                  <td>:</td>
                  <td>Mahasiswa</td>
                </tr>
                <tr>
                  <td></td>
                  <td><button type="button" class="btn btn-danger btn-flat"><i></i>hapus</button></td>
                  <td></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->