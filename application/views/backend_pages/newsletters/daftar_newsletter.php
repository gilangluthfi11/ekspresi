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
        <li class="treeview">
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
        <li class="active treeview">
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
    <section class="content-header">
      <h1>
        Daftar Newsletter
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Newsletter</a></li>
        <li class="active">Daftar Newsletter</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Newsletter</h3>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-bordered table-hover">
                <tr>
                  <th style="width: 10%;">No Newsletter</th>
                  <th style="width: 15%;">Judul Newsletter</th>
                  <th style="width: 25%;">Isi Newsletter</th>
                  <th style="width: 10%;">Tanggal</th>
                  <th style="width: 15%;">Action</th>
                </tr>
                <tr>
                  <td><strong>001</strong></td>
                  <td>Event Menggambar</td>
                  <td>lorem ipsum</td>
                  <td>9 September 2018</td>
                  <td>
                    <div>
                      <button type="button" class="btn btn-info btn-flat">edit</button>
                      <button type="button" class="btn btn-danger btn-flat">hapus</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><strong>002</strong></td>
                  <td>Berbagi Karya #1</td>
                  <td>lorem ipsum</td>
                  <td>10 September 2018</td>
                  <td>
                    <div>
                      <button type="button" class="btn btn-info btn-flat">edit</button>
                      <button type="button" class="btn btn-danger btn-flat">hapus</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><strong>001</strong></td>
                  <td>Kumpul Komunitas</td>
                  <td>lorem ipsum</td>
                  <td>11 September 2018</td>
                  <td>
                    <div>
                      <button type="button" class="btn btn-info btn-flat">edit</button>
                      <button type="button" class="btn btn-danger btn-flat">hapus</button>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
            <!-- /.paginition -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
            <!-- /.paginition -->
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