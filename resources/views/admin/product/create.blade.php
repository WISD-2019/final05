@extends('admin.layouts.master')

@section('title', '新增產品')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            新增產品 <small>請輸入產品資訊</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 產品管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->
@include('admin.layouts.partials.validation')

<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('admin.product.store') }}" method="POST" role="form">
            {{ csrf_field() }}
            <div class="form-group">
                <label>品名：</label>
                <input name="name" class="form-control" placeholder="請輸入品名">
            </div>

            <div class="form-group">
                <label>類別：</label>
                <select name="category">
                      <option value=" "> </option>
                    　<option value="咖啡">咖啡</option>
                    　<option value="果汁茶類">果汁茶類</option>
                    　<option value="甜點">甜點</option>
                      <option value="咖啡豆">咖啡豆</option>
                </select>
            </div>

            <div class="form-group">
                <label>價格：</label>
                <input name="price" class="form-control" ></input>
            </div>

            <div class="form-group">
                <label>折扣：</label>
                <input name="discount" class="form-control" ></input>
            </div>

            <div class="form-group">
                <label>是否上架：</label>
                <select name="whether">
                    <option value=" "> </option>
                    <option value="1">是</option>
                    <option value="0">否</option>
                </select>
            </div>


            <div class="text-right">
                <button type="submit" class="btn btn-success" style="background-color:#00B8B8;color:#FFFFFF;border:3px black">新增</button>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

        </form>
    </div>
</div>
<!-- /.row -->
@endsection
