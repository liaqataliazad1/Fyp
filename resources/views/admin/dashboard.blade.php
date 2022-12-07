
@extends('admin.layout')
@section('container')



<x-app-layout>
                    



<div class="container-fluid mt-0">
    
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">overview</h2>
             
            </div>
        </div>
    </div>
    <div class="row m-t-25">
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c1">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="fa fa-bars"></i>
                        </div>
                        <div class="text">
                                <h2>{{ $data }}</h2>
                            <span>Total Inventories</span> 
                         
                        </div>
                    </div>
              
                    <div class="overview-chart">
                        <canvas id="widgetChart1"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c2">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="text">
                            <h2>{{ $in_use_inventories }}</h2>
                            <span>In use Inventories</span>
                        </div>
                    </div>
                    <div class="overview-chart">
                        <canvas id="widgetChart2"></canvas>
                    </div>
                </div>
            </div>
        </div>




        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c2">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="fa fa-times"></i>
                        </div>
                        <div class="text">
                            <h2>{{ $expired_inventories }}</h2>
                            <span>Expired Inventories</span>
                        </div>
                    </div>
                    <div class="overview-chart">
                        <canvas id="widgetChart2"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c2">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="fa fa-box"></i>
                        </div>
                        <div class="text">
                            <h2>{{ $departments }}</h2>
                            <span>Total Department</span>
                        </div>
                    </div>
                    <div class="overview-chart">
                        <canvas id="widgetChart2"></canvas>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
   
    
    
    <div class="row">
        <div class="col-md-12">
            <div class="copyright">
                <p>Copyright © 2022 . All rights reserved. <a href="https://facebook.coml/liaqataliazad.pk">Liaqat Khan & Salman khan Bcs 8th</a>.</p>
            </div>
        </div>
    </div>
</div>
</x-app-layout> 
@endsection