@extends('layouts.app')
@section('content')
    <div class="Container p-5">
      <div class="row justify-content-center" >
            @foreach ($products as $item)
                <div class="col-sm-6 col-md-6 col-xl-4 mb-4" >              
                    <div class="card p-2">
                      <a href="#">                    
                        <div class="badge bg-success text-white position-absolute" style="top: 5px; right: 5px;">متوفر</div>
                        <img  src="{{ url('/images/products/' .  $item->image ) }}"  class="card-img-top mt-5" />                        
                      </a>
                      <div class="card-body">
                            <h6 class="h6 card-title text-center bold">{{ $item->name }}</h6>
                            <div class="d-flex row align-content-center">
                                <p class="h5 text-center text-danger rounded bold">{{ $item->price }} SR</p>                                
                            </div>
                            <div class="d-grid gap-2">
                              <div class="row">
                                  <div class="col text-center">
                                      <button type="button" class="btn btn-secondary" data-bs-toggle="collapse" :data-bs-target='"#card_" + index + "_detials"' :aria-controls='"card_" + index + "_detials"' aria-expanded="false" :aria-label='"card_" + index + "_detials"'>
                                          <i class="fas fa-list-check"></i> المواصفات
                                      </button>
                                  </div>
                                  <div class="col text-center">
                                      <a href="{{ route('addProductCart', [$item->id] ) }}" class="btn btn-danger" ><i class="fas fa-cart-shopping"></i> اضف للسلة</a>                                       
                                  </div>
                              </div>
                              <div :id='"card_" + index '>
                                <div class="collapse" :id='"card_" + index + "_detials"' :data-bs-parent='"#card_" + index '>
                                    <ul>
                                        <li>التفاصيل : {{ $item->discription }}</li>                                                                   
                                    </ul>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            
                    
              
            @endforeach
          <div class="row justify-content-center" >
    </div>

    
@endsection
