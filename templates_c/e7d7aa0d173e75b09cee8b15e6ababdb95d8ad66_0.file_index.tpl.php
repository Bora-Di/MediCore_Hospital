<?php
/* Smarty version 5.3.1, created on 2024-07-16 22:21:39
  from 'file:templates/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_6696d653c3f2c3_92621629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7d7aa0d173e75b09cee8b15e6ababdb95d8ad66' => 
    array (
      0 => 'templates/index.tpl',
      1 => 1721161248,
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
function content_6696d653c3f2c3_92621629 (\Smarty\Template $_smarty_tpl) {
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Patient Details</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
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
                                        <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('patient')['date'],"%Y-%m-%d %H:%M");?>
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
            </div>
        </div>
    </section>
</div>
<?php $_smarty_tpl->renderSubTemplate("file:includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
