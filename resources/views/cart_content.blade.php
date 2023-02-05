<div class="container border rounded table-responsive">
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
            @php
                $total = 0;
                $i = 1;            
            @endphp
            @foreach ($cart as $item)                                                  
            <tr>                                
                <td>{{ $i }}</td>
                <td>{{ $item->products->name }}</td>
                <td><img src="{{ url('/images/products/' .  $item->products->image ) }}" width="80" height="90" /></td>
                <td>{{ $item->products->price }}</td>
                <td>{{ $item->qty }}</td>
                <td>{{ $item->products->price * $item->products->qty }}</td>
                <td>{{ $item->products->price * $item->products->qty * 0.15 }}</td>
                <td>{{ $item->products->price * $item->products->qty + $item->products->price * $item->products->qty * 0.15 }}</td>
                <td><a href="{{route('deleteItemCart', $item->id )}}"  class="text-danger px-3 py-1"><i class="fa-solid fa-remove "></i></a></td>
            </tr>  
            @php 
                $i += 1;                           
                $total += $item->products->price * $item->products->qty + $item->products->price * $item->products->qty * 0.15 ;
            @endphp
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
                <td class="bold fs-6 text-success">إجمالي الضريبة : </td>
                <td class="bold fs-6 text-dark"> {{ $total * 0.15}} ر.س</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="bold fs-6 text-success">قيمة الخصم : </td>
                <td class="bold fs-6 text-dark">
                    <div class="w-50 d-flex">
                        <input  type="text" name="discout_tb" id="discout_tb" value="{{ old('discount') ?? '0' }}" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"><span class="mx-2"> ر.س</span>
                    </div>
                    <span class="text-danger">
                    <strong id="discount-error"></strong>
                </span>
                </td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="bold fs-6 text-success">الإجمالي : </td>
                <td class="bold fs-6 text-dark" id="total_tb"> {{ $total }} ر.س</td>
                <td></td>
            </tr>
        </tfoot>
    </table>
</div>