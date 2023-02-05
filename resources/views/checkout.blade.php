@extends('layouts.app')
@section('content')

<div class="container" >
    <a class="btn btn-secondary mt-5" href="{{ url()->previous() }}" >العودة لقائمة المنتجات</a>
    <div class="row my-5">
        <div class="col-md-12 order-md-2 mb-4 ">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">سلة المشتريات</span>                
            </h4>
            <ul class="list-group mb-3 sticky-top">
                <li class="list-group-item d-flex justify-content-between">
                    <div>
                        <h6 class="my-0">اسم المنتج</h6>
                        <h3 class="text-muted">{{ $product->name}}</h3>
                    </div>
                    <h4 class="text-danger">{{ $product->price}} SR</h4>
                </li>
                
                <li class="list-group-item d-flex justify-content-between">
                    <span>الضريبة (ر.س)</span>
                    <h4 class="text-danger">{{ $product->price * 0.15}} SR</h4>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>المجموع (ر.س)</span>
                    <h4>{{ $product->price + $product->price * 0.15}} SR</h4>
                </li>
            </ul>
            <form class="card p-2" method="POST" action=" {{route('getInvoice') }}">
                @csrf
            
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">بيانات العميل</span>                
                </h4>
                    
                <div class="mb-3 row">
                    <label for="inputName" class="col-sm-2 col-form-label">الاسم</label>
                    <div class="col-sm-10">
                        <input type="Name" name="Name" class="form-control" id="inputName">
                    </div>
                    
                </div>
                <div class="mb-3 row">                          
                    <label for="inputAddress" class="col-sm-2 col-form-label">العنوان</label>
                    <div class="col-sm-10">
                        <input type="Address" name="Address" class="form-control" id="inputAddress">
                    </div>
                </div>
                <div class="mb-3 row">                          
                    <label for="inputEmail" class="col-sm-2 col-form-label">البريد الإلكتروني</label>
                    <div class="col-sm-10">
                        <input type="Email" name="Email" class="form-control" id="inputEmail">
                    </div>
                </div>
                      
                
                
                <div class="input-group">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">اتمام عملية الشراء</button>
                    </div>
                </div>
            </form>
        </div>
        
    </div>
</div>
@endsection