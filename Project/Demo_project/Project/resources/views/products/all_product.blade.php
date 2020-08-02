@extends('layout.master')
@section('content')
<div class="div">
 Liệt kê sản phẩm
</div>
<table class="table table-hover table-bordered mt-5">
        <thead>
          <tr class="text-center">
            <th scope="col" class="">#</th>
            <th scope="col" class="">Tên sản phẩm</th>
            <th scope="col" class="">Hình ảnh sản phẩm</th>
            <th scope="col" class="">Giá sản phẩm</th>
            
          </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
          <tr>
            <td>{{$product->product_id}}</td>
            <td>{{$product->product_name}}</td>    
            <td><img src="public/image/{{$product->product_image}}"height="100" width="100"></td>
            <td>{{$product->product_price}}</td>
            
          </tr>
          @endforeach          
        </tbody>
</table> 
@endsection
       