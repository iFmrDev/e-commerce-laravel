<div class="container border rounded">
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
                <td class="bold fs-4 text-success">الإجمالي : </td>
                <td class="bold fs-4 text-dark"> {{ $total }} ر.س</td>
                <td></td>
            </tr>
        </tfoot>
    </table>
</div>