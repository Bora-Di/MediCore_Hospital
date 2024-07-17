<?php
/* Smarty version 5.3.1, created on 2024-07-17 16:43:08
  from 'file:includes/sidebar.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_6697d87c7f76e8_26518034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbc37243ef690f5a27f6c651391c498fa8429def' => 
    array (
      0 => 'includes/sidebar.tpl',
      1 => 1721227375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6697d87c7f76e8_26518034 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\MediCare_Hospital\\includes';
?><aside class="main-sidebar ">
    <a href="#" class="brand-link">
        <img src="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/dist/img/MediLogo.png" alt="Logo" class="brand-image ">
        <h2> <span class="brand1-text ">MediCore</span></h2>
        <h3> <span class="brand2-text">Hospital</span></h3>
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
