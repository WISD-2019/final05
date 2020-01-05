@extends('admin.layouts.master')

@section('title', '查詢產品')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            查詢 <small> 輸入關鍵字</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i>查詢
            </li>
        </ol>

    </div>
</div>
<!-- /.row -->
<div class="row" style="margin-bottom: 20px; text-align: right">
    <div class="col-lg-12">

        <form action="{{ route('admin.dashboard.search') }}" method='post'>
            品名:<input type='text' name='text'>
            <input type='submit' value='確認',name='name'>
        </form>


    </div>
</div>



<div class="row">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th width="70" style="text-align: center">編號</th>
                        <th style="text-align: center">品名</th>
                        <th style="text-align: center">類別</th>
                        <th style="text-align: center">價格</th>
                        <th style="text-align: center">折扣</th>
                        <th style="text-align: center">是否上架</th>
                    </tr>
                    </thead>

                </table>
            </div>
        </div>
    </div>
</div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</div>
<!-- /.row -->

@endsection
