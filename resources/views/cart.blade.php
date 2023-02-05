@extends('layouts.app')
@section('content')

<div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header d-flex justify-content-md-between">
            <h1 class="w-100 modal-title fs-5 text-center text-success bold " id="bayModalLabel">سلة المشتريات</h1>
            <button type="button" class="btn-close m-0 p-0" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>اسم المنتج</th>
                        <th>صورة المنتج</th>
                        <th>المبلغ</th>
                        <th>الكمية</th>
                        <th>الاجمالي</th>
                        <th>الضريبة 15%</th>
                        <th>المبلغ المستحق</th>
                        <th>الإجراء</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart as $item)                                            
                    <tr>                                
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td><img src="{{ url('/images/products/' .  $item->image ) }}" width="80" height="90" /></td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>{{ $item->price * $item->qty }}</td>
                        <td>{{ $item->price * $item->qty * 0.15 }}</td>
                        <td>{{ $item->price * $item->qty + $item->price * $item->qty * 0.15 }}</td>
                        <td><a href="#"  class="text-danger px-3 py-1"><i class="fa-solid fa-remove "></i></a></td>
                    </tr>  
                    @endforeach                          
                </tbody>

                <tfoot class="bg-light">
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="bold">الإجمالي</td>
                        <td class="bold"> </td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="w-100 border-0 text-center">
            <a class="btn btn-secondary mx-2">إلغاء</a>
            <a class="btn btn-primary mx-2">اتمام الشراء</a>
        </div>
    </div>
</div>
@endsection