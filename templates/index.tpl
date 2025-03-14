{include file="includes/header.tpl"}
{include file="includes/sidebar.tpl"}
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
        <div class="col-md-7">
        <div class="card">
        <div class="card-header">
            <div class="form-inline">
                <div class="input-group input-group-sm mr-2 mb-2" data-widget="sidebar-search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit ">
                        <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" id="searchInput">
                </div>
    
                <div class="input-group input-group-sm mr-2 mb-2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary btn-sm" type="button" id="button-filter">
                            <i class="fas fa-filter"></i> Filter
                        </button>
                    </div>
                </div>
    
                <div class="input-group input-group-sm mb-2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary btn-sm" type="button" id="button-download">
                            <i class="fas fa-download"></i> Download
                        </button>
                    </div>
                </div>
    
                <nav class="ml-auto mt-2">
                    <ul class="pagination pagination-sm ">
                        <li class="page-item"><a class="page-link" href="#" style="color:var(--gray); onclick="prevPage()">&lt;</a></li>
                        <li class="page-item"><a class="page-link" href="#" style="color:var(--gray);">1</a></li>
                        <li class="page-item"><a class="page-link" href="#" style="color:var(--gray); onclick="nextPage()">&gt;</a></li>
                    </ul>
                </nav>

                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="appointmentsTable">
                        <thead>
                            <tr style="font-size: 14px;">
                                <th> </th>
                                <th>Name</th>
                                <th>MOB</th>
                                <th>Date</th>
                                <th>Doctor</th>
                                <th>Department</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach $patients as $patient}
                            <tr>
                                <td>{$patient.picture}</td>
                                <td>{$patient.name}</td>
                                <td>{$patient.mob}</td>
                                <td>{$patient.date|date_format:"%d/%m/%Y %H:%M"}</td>
                                <td>{$patient.doctor}</td>
                                <td>{$patient.department}</td>
                            </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="info-box-container">
                <div class="row">
                <div class="col-6">
                <div class="info-box d-flex align-items-center">
                    <span class="info-box-icon bg-teal d-flex align-items-center" style="display: flex; align-items: center; justify-content: center; border-radius: 50%; overflow: hidden; width: 50px; height: 50px;"><i class="fas fa-calendar"></i></span>
                    <div class="info-box-content">
                        <h2 class="info-box-text">140</h2>
                        <p class="info-box-text">Total appointments</p>
                    </div>
                </div>
            </div>
                    <div class="col-6">
                    <div class="info-box d-flex align-items-center">
                        <span class="info-box-icon bg-teal d-flex align-items-center" style="display: flex; align-items: center; justify-content: center; border-radius: 50%; overflow: hidden; width: 40px; height: 40px;"><i class="fas fa-user-injured"></i></span>
                        <div class="info-box-content">
                            <h2 class="info-box-text">370</h2>
                            <p class="info-box-text">Total patients</p>
                        </div>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="info-box d-flex align-items-center">
                            <span class="info-box-icon bg-teal d-flex align-items-center" style="display: flex; align-items: center; justify-content: center; border-radius: 50%; overflow: hidden; width: 50px; height: 50px;"><i class="fas fa-ban"></i></span>
                            <div class="info-box-content">
                                <h2 class="info-box-text">70</h2>
                                <p class="info-box-text">Total Cancellations</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="info-box d-flex align-items-center">
                            <span class="info-box-icon bg-teal d-flex align-items-center" style="display: flex; align-items: center; justify-content: center; border-radius: 50%; overflow: hidden; width: 50px; height: 50px;"><i class="fas fa-user-md"></i></span>
                            <div class="info-box-content">
                                <h2 class="info-box-text">120</h2>
                                <p class="info-box-text">Total avg doctors</p>
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
                    {foreach $doctors as $doctor}
                    <div class="doctor-card">
                        <img src="{$doctor.image}" alt="{$doctor.name}" class="img-circle">
                        <h4>{$doctor.name}</h4>
                        <p>{$doctor.department}</p>
                    </div>
                    {/foreach}
                </div>
            </div>
        </div>
        </div>
    </div>
            <!-- Info boxes -->
            <div class="row">
            <div class="col-12 col-sm-4 col-md-2">
                <div class="info-box">
                <span class="info-box-icon bg-cyan img-circle" style="display: flex; align-items: center; justify-content: center; border-radius: 50%; overflow: hidden; width: 60px; height: 60px;">
                    <img src="{$base_url}admin/dist/img/emergency.png" alt="Logo" class="brand-image img-circle" style="width: 75%; height: auto;">
                </span>
                <div class="info-box-content">
                    <p class="info-box-text">Admin New</p>
                    <h5 class="info-box-number" style="color: var(--cyan);"> Patient</h5>
                </div>
                <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-2">
                <div class="info-box mb-3">
                <span class="info-box-icon bg-blue img-circle" style="display: flex; align-items: center; justify-content: center; border-radius: 50%; overflow: hidden; width: 60px; height: 60px;">
                    <img src="{$base_url}admin/dist/img/emergency.png" alt="Logo" class="brand-image img-circle" style="width: 75%; height: auto;">
                </span>
                <div class="info-box-content">
                    <p class="info-box-text">Emergency</p>
                    <h5 class="info-box-number" style="color: var(--blue);"> Room</h5>
                </div>
                <!-- /.info-box-conte nt -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
    
            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>
    
            <div class="col-12 col-sm-6 col-md-2">
            <div class="info-box mb-3 bg-disabled-teal">
                <span class="info-box-icon bg-teal img-circle" style="display: flex; align-items: center; justify-content: center; border-radius: 50%; overflow: hidden; width: 60px; height: 60px;">
                    <img src="{$base_url}admin/dist/img/pellul.png" alt="Logo" class="brand-image img-circle" style="width: 75%; height: auto;">
                </span>
            
                <div class="info-box-content">
                <p class="info-box-text">Pharmacy</p>
                <h5 class="info-box-number" style="color: var(--teal);"> Details</h5>
                </div>
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
{include file="includes/footer.tpl"}