<?php
/* Smarty version 5.3.1, created on 2024-07-17 21:04:08
  from 'file:templates/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_669815a8aa14f0_14655155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7d7aa0d173e75b09cee8b15e6ababdb95d8ad66' => 
    array (
      0 => 'templates/index.tpl',
      1 => 1721243044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/header.tpl' => 1,
    'file:includes/sidebar.tpl' => 1,
    'file:includes/footer.tpl' => 1,
  ),
))) {
function content_669815a8aa14f0_14655155 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\MediCare_Hospital\\templates';
$_smarty_tpl->renderSubTemplate("file:includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:includes/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<div class="content-wrapper">
    <section class="content-header">
        
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1> <span class="HeadTitle"> Healthcare </span></h1>
            <h1> Management System </h1>
        </div>
    </div>
</div>
</section>
<section class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" id="searchInput">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar" onclick="filterTable()">
                                    <i class="fas fa-search fa-fw"></i>
                                </button>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="button-filter">
                                    <i class="fas fa-filter"></i>
                                </button>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="button-download">
                                    <i class="fas fa-download"></i> Download
                                </button>
                            </div>
                        </div>

                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>

                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="appointmentsTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>MOB</th>
                                <th>Date</th>
                                <th>Doctor</th>
                                <th>Department</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('patients'), 'patient');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('patient')->value) {
$foreach0DoElse = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->getValue('patient')['name'];?>
</td>
                                <td><?php echo $_smarty_tpl->getValue('patient')['mob'];?>
</td>
                                <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('patient')['date'],"%d/%m/%Y %H:%M");?>
</td>
                                <td><?php echo $_smarty_tpl->getValue('patient')['doctor'];?>
</td>
                                <td><?php echo $_smarty_tpl->getValue('patient')['department'];?>
</td>
                            </tr>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="info-box-container">
                <div class="row">
                    <div class="col-6">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-calendar"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Total Appointments</span>
                                <span class="info-box-number">140</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="info-box">
                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user-injured"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Total Patients</span>
                                <span class="info-box-number">370</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="info-box">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-ban"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Total Cancellations</span>
                                <span class="info-box-number">70</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="info-box">
                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user-md"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Total Avg per Doctor</span>
                                <span class="info-box-number">120</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
            <div class="card-header">
                <h3 class="card-title">Available Doctors</h3>
            </div>
            <div class="card-body">
                <input class="form-control" type="search" placeholder="Search Doctor" aria-label="Search" id="doctorSearchInput" onkeyup="filterDoctors()">
                <div id="doctorList">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('doctors'), 'doctor');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('doctor')->value) {
$foreach1DoElse = false;
?>
                    <div class="doctor-card">
                        <img src="<?php echo $_smarty_tpl->getValue('doctor')['image'];?>
" alt="<?php echo $_smarty_tpl->getValue('doctor')['name'];?>
" class="img-circle">
                        <h4><?php echo $_smarty_tpl->getValue('doctor')['name'];?>
</h4>
                        <p><?php echo $_smarty_tpl->getValue('doctor')['department'];?>
</p>
                    </div>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
        </div>
    </div>
                <!-- Info boxes -->
                <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box bg-info">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">CPU Traffic</span>
                      <span class="info-box-number">
                        10
                        <small>%</small>
                      </span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box mb-3">
                    <span class="info-box-icon bg-blue elevation-1"><i class="fas fa-thumbs-up"></i></span>
        
                    <div class="info-box-content">
                      <span class="info-box-text">Likes</span>
                      <span class="info-box-number">41,410</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
        
                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>
        
                <div class="col-12 col-sm-6 col-md-3 ">
                  <div class="info-box mb-3 bg-disabled-teal">
                    <span class="info-box-icon bg-teal elevation-1"><i class="fas fa-shopping-cart"></i></span>
        
                    <div class="info-box-content">
                      <span class="info-box-text">Pharmacy</span>
                      <span class="info-box-number">Details</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <!-- /.col -->
              </div>
              <!-- /.row -->
</div>
</section>
</div>
<?php $_smarty_tpl->renderSubTemplate("file:includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
