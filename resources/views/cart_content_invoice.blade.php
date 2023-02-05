<div class="container border rounded table-responsive">
    <table class="table align-middle">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">اسم المنتج</th>
                {{-- <th class="text-center">صورة المنتج</th> --}}
                <th class="text-center">المبلغ</th>
                <th class="text-center">الكمية</th>
                <th class="text-center">الاجمالي</th>
                <th class="text-center">الضريبة 15%</th>
                <th class="text-center">المبلغ المستحق</th>                
            </tr>
        </thead>
        <tbody>
            @php
                $total = 0;
                $i = 1;            
            @endphp
            @foreach ($cart as $item)                                                  
            <tr>                                
                <td class="text-center">{{ $i }}</td>
                <td class="text-center">{{ $item->products->name }}</td>
                {{-- <td class="text-center"><img src="{{ url('/images/products/' .  $item->products->image ) }}" width="80" height="90" /></td> --}}
                <td class="text-center">{{ $item->products->price }}</td>
                <td class="text-center">{{ $item->qty }}</td>
                <td class="text-center">{{ $item->products->price * $item->products->qty }}</td>
                <td class="text-center">{{ $item->products->price * $item->products->qty * 0.15 }}</td>
                <td class="text-center">{{ $item->products->price * $item->products->qty + $item->products->price * $item->products->qty * 0.15 }}</td>
                
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
                {{-- <td></td> --}}
                <td></td>
                <td></td>
                <td class="fs-6 text-success">الإجمالي : </td>
                <td class="bold fs-6 text-dark"> {{ $total }} ر.س</td>
                <td></td>
            </tr>
        </tfoot>
    </table>
</div>