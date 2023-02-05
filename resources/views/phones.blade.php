@extends('layouts.app')
@section('content')
    <h1 class="text-center text-primary  mt-5" >قائمة الهواتف الذكية</h1> 
    <div class="Container p-5">
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
              <tr>
                <th>Type</th>
                <th>Price</th>
                <th>Color</th>                
              </tr>
            </thead>
            <tbody>
            
            @foreach ($phones as $item)
            <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img
                        src="https://media.istockphoto.com/id/1202959585/photo/iphone-11-pro-max-in-silver-color-template-front-view-with-blank-screen-for-application.jpg?s=612x612&w=is&k=20&c=LbvUcwXJtnyFEAnffDZ64WeOzfrDtzqHwFGulfY78Hs="
                        alt=""
                        style="width: 45px; height: 45px"
                        class="rounded-circle"
                        />
                    <div class="ms-3">
                      <p class="fw-bold mb-1">{{ $item['type'] }}</p>                      
                    </div>
                  </div>
                </td>
                <td>
                    <p class="fw-bold mb-1">{{ $item['price'] }}</p>                 
                </td>
                <td>
                    <p class="fw-normal mb-1">{{ $item['color']}}</p> 
                </td>
                
              </tr>         
              
            @endforeach
            </tbody>
          </table>
    </div>
@endsection