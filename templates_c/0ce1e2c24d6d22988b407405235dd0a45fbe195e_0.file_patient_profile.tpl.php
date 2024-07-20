<?php
/* Smarty version 5.3.1, created on 2024-07-18 19:01:04
  from 'file:templates/patient/patient_profile.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66994a50c61321_82177997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ce1e2c24d6d22988b407405235dd0a45fbe195e' => 
    array (
      0 => 'templates/patient/patient_profile.tpl',
      1 => 1721322057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_66994a50c61321_82177997 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\MediCare_Hospital\\templates\\patient';
$_smarty_tpl->renderSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Patient Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Patient Details</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Your profile content goes here -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                             src="path/to/patient/image.jpg"
                             alt="Patient profile picture">
                    </div>

                    <h3 class="profile-username text-center">Patient Name</h3>

                    <p class="text-muted text-center">Patient Information</p>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Age</b> <a class="float-right">32</a>
                        </li>
                        <li class="list-group-item">
                            <b>Gender</b> <a class="float-right">Male</a>
                        </li>
                        <li class="list-group-item">
                            <b>Contact</b> <a class="float-right">123-456-7890</a>
                        </li>
                    </ul>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php $_smarty_tpl->renderSubTemplate('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
