@extends('layouts.app')
@section('content')
    <h1 class="text-center text-primary  mt-5" >قائمة المنتجات</h1> 
    <div class="Container p-5">
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
              <tr>
                <th>Tilte</th>
                <th>Discripton</th>
                <th>Price</th>
                <th>Qty</th>                
              </tr>
            </thead>
            <tbody>
            
            @foreach ($products as $item)
            <tr>                
                <td>
                    <p class="fw-bold mb-1">{{ $item->title }}</p>                 
                </td>
                <td>
                    <p class="fw-bold mb-1">{{ $item->discription }}</p>                 
                </td>
                <td>
                    <p class="fw-bold mb-1">{{ $item->price }}</p>                 
                </td>
                <td>
                    <p class="fw-normal mb-1">{{ $item->qyt}}</p> 
                </td>
                
              </tr>         
              
            @endforeach
            </tbody>
          </table>
    </div>
@endsection