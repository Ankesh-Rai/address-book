@extends('header')
@section('dashboard')
    <div class="col-8 col-sm-8 col-md-8 col-lg-10 col-xl-10" style="height:250px;">
        <div class="pt-2">
            <h2 style="font-size:24px;">Admin Dashboard<small class="pl-2" style="font-size:18px;">Control Pannel</small></h2>
        </div>
        <div class="row pt-2">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3 height">
                <div class="small-box bg-info height">
                    <div class="inner">
                        <h3>0</h3>
                        <p>Present Days</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-check"></i>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3 height">
                <div class="small-box bg-danger height">
                    <div class="inner">
                        <h3>0</h3>
                        <p>Absent Days</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-window-close"></i>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-3 height">
                <div class="small-box bg-yellow height">
                    <div class="inner">
                        <h3>0</h3>
                        <p>Total Working Hour</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-clock-o"></i>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl mb-3        height">
                <div class="small-box bg-green height">
                    <div class="inner">
                        <h3>0</h3>
                        <p>Current Shift Detail</p>
                    </div>
                    <div class="icon">
                    <i class="fa fa-arrows"></i>
                </div>
                </div>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-md-5 box p-3 overflow-auto celebration-box">
                <div class="box-body">
                    <i class="fa fa-star text-success" style="font-size:20px;"><span class="pl-2" style="font-size:25px;color:black;">Celebration</span></i>
                </div>
                <div class="box-body p-3">
                    <i class="fa fa-gift text-success" style="font-size:20px;"><span class="pl-2" style="font-size:16px;color:black;">BIRTHDAYS</span></i>
                </div>
            </div>
            <div class="col-md-5 offset-md-2 p-3 overflow-auto celebration-box">
                <div class="box-body">
                    <i class="fa fa-star text-success" style="font-size:20px;"><span class="pl-2" style="font-size:25px;color:black;">Celebration</span></i>
                </div>
                <div class="box-body p-3">
                    <i class="fa fa-trophy text-success" style="font-size:20px;"><span class="pl-2" style="font-size:16px;color:black;">MARRIGE ANNYVERSARY</span></i>
                </div>
            </div>
        </div>
    </div>
@endsection

