@extends('layout.main')

@section('content')

    <div class="col-sm-6 col-md-3">
        <div class="row-stat">
            <p class="row-stat-label">Revenue Today</p>
            <h3 class="row-stat-value">$890.00</h3>
            <span class="label label-success row-stat-badge">+43%</span>
        </div>
        <!-- /.row-stat -->
    </div>
    <!-- /.col -->

    <div class="col-sm-6 col-md-3">
        <div class="row-stat">
            <p class="row-stat-label">Revenue This Month</p>
            <h3 class="row-stat-value">$8290.00</h3>
            <span class="label label-success row-stat-badge">+17%</span>
        </div>
        <!-- /.row-stat -->
    </div>
    <!-- /.col -->

    <div class="col-sm-6 col-md-3">
        <div class="row-stat">
            <p class="row-stat-label">Total Users</p>
            <h3 class="row-stat-value">98,290</h3>
            <span class="label label-success row-stat-badge">+26%</span>
        </div>
        <!-- /.row-stat -->
    </div>
    <!-- /.col -->

    <div class="col-sm-6 col-md-3">
        <div class="row-stat">
            <p class="row-stat-label">Currently Active Uses</p>
            <h3 class="row-stat-value">19</h3>
            <span class="label label-danger row-stat-badge">+5%</span>
        </div>
        <!-- /.row-stat -->
    </div>
    <!-- /.col -->

    <div class="row">
        <button class="btn btn-default howler" data-type="" data-icon="fa fa-table">Default</button>
        <button class="btn btn-success howler" data-type="success" data-icon="fa fa-check-square-o">Success</button>
        <button class="btn btn-warning howler" data-type="warning" data-icon="fa fa-exclamation">Warning</button>
        <button class="btn btn-danger howler" data-type="danger" data-icon="fa fa-ban">Danger</button>
        <button class="btn btn-info howler" data-type="info" data-icon="fa fa-info">Info</button>
    </div>

@endsection