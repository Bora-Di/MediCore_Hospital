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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                        <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                          <div class="input-group-append">
                            <button class="btn btn-sidebar">
                              <i class="fas fa-search fa-fw"></i>
                            </button>
                          </div>
                        </div>
                      </div>
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
                                    {foreach $patients as $patient}
                                    <tr>
                                        <td>{$patient.name}</td>
                                        <td>{$patient.mob}</td>
                                        <td>{$patient.date|date_format:"%Y-%m-%d %H:%M"}</td>
                                        <td>{$patient.doctor}</td>
                                        <td>{$patient.department}</td>
                                    </tr>
                                    {/foreach}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
{include file="includes/footer.tpl"}
