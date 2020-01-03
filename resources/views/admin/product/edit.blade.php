@extends('admin.layouts.master')

@section('title', '編輯產品')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            編輯產品 <small>編輯產品資訊</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 產品管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->


<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('admin.product.update', $products->id) }}" method="POST" role="form">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <div class="form-group">
                <label>品名：</label>
                <input name="name" class="form-control" placeholder="請輸入品名" value="{{$products->name}}">
            </div>

            <div class="form-group">
                <label>價格：</label>
                <textarea name="price" class="form-control" >{{$products->price}}</textarea>
            </div>

            <div class="form-group">
                <label>折扣：</label>
                <textarea name="discount" class="form-control" >{{$products->discount}}</textarea>
            </div>

            <div class="form-group">
                <label>是否上架：</label>
                <select name="whether">
                    <option value=" "> </option>
                    <option value="是">是</option>
                    <option value="否">否</option>
                </select>

            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-success">更新</button>
            </div>

        </form>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

    </div>
</div>
<!-- /.row -->
@endsection
