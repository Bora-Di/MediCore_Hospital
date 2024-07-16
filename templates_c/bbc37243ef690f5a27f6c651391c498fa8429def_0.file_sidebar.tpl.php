<?php
/* Smarty version 5.3.1, created on 2024-07-16 21:30:50
  from 'file:includes/sidebar.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_6696ca6aa6bf43_30352567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbc37243ef690f5a27f6c651391c498fa8429def' => 
    array (
      0 => 'includes/sidebar.tpl',
      1 => 1721158247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6696ca6aa6bf43_30352567 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\MediCare_Hospital\\includes';
?><aside class="main-sidebar sidebar-primary-green elevation-4">
    <a href="#" class="brand-link">
        <img src="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/dist/img/MediLogo.png" alt="Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">MediCore</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Patient Details</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-md"></i>
                        <p>Doctor Details</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-dollar-sign"></i>
                        <p>Payment Details</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-hospital"></i>
                        <p>E-Channeling</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<?php }
}
