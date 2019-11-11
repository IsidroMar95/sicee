@extends('layouts._layout')
@section('title', 'Dashboard')
@section('content')

    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <i class="mdi mdi-account text-danger icon-xg"></i>
                        </div>
                        <div class="float-right">
                            <p class="mb-0 text-right">Total Alumnos</p>
                            <div class="fluid-container">
                                <h3 class="font-weight-medium text-right mb-0">560</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <i class="mdi mdi-account-badge text-info icon-xg"></i>
                        </div>
                        <div class="float-right">
                            <p class="mb-0 text-right">Total Profesores</p>
                            <div class="fluid-container">
                                <h3 class="font-weight-medium text-right mb-0">68</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <i class="mdi mdi-account-box-multiple text-warning icon-xg"></i>
                        </div>
                        <div class="float-right">
                            <p class="mb-0 text-right">Grupos</p>
                            <div class="fluid-container">
                                <h3 class="font-weight-medium text-right mb-0">22</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <i class="mdi mdi-briefcase text-success icon-xg"></i>
                        </div>
                        <div class="float-right">
                            <p class="mb-0 text-right">Carreras</p>
                            <div class="fluid-container">
                                <h3 class="font-weight-medium text-right mb-0">18</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
