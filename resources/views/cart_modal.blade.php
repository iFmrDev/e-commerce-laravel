
{{-- @section('cartModal') --}}
<!-- Modal -->
<div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-md-between">
                <h1 class="w-100 modal-title fs-3 text-center text-success bold " id="bayModalLabel">سلة المشتريات</h1>
                <button type="button" class="btn-close m-0 p-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">               
                {{ App\Http\Controllers\ProductsController::getCart() }}                
            </div>
            <div class="container py-2">
                {{-- <div id="success-msg" class="hide">
                    <div class="alert alert-info alert-dismissible fade in" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                      <strong>Success!</strong> Check your mail for login confirmation!!
                    </div>
                </div> --}}

                <form id="checkout" class="card p-2" method="POST" >
                {{-- <form id="checkout" class="card p-2" method="POST" action=" {{ route('getInvoice') }}"> --}}
                    @csrf
                    <input type="hidden" name="discount" id="discount" value="0" />
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">بيانات العميل</span>                
                    </h4>
                        
                    <div class="mb-3 row">
                        <label for="inputName" class="col-sm-2 col-form-label">الاسم</label>
                        <div class="col-sm-10">
                            <input type="name" name="name" id="name" value="{{ old('name') }}" class="form-control">
                            <span class="text-danger">
                                <strong id="name-error"></strong>
                            </span>
                        </div>
                        
                    </div>
                    <div class="mb-3 row">                          
                        <label for="address" class="col-sm-2 col-form-label">العنوان</label>
                        <div class="col-sm-10">
                            <input type="address" name="address" id="address" value="{{ old('address') }}" class="form-control" >
                            <span class="text-danger">
                                <strong id="address-error"></strong>
                            </span>
                        </div>
                    </div>
                    <div class="mb-3 row">                          
                        <label for="email" class="col-sm-2 col-form-label">البريد الإلكتروني</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control">
                            <span class="text-danger">
                                <strong id="email-error"></strong>
                            </span>
                        </div>
                    </div>
                    <div class="w-100 border-0 mb-4 text-center">
                        <button type="submit" id="formSubmit" class="btn btn-success mx-2">اتمام عملية الشراء</button>
                        {{-- <a href="{{ route('invoice') }}" class="btn btn-success mx-2">اتمام الشراء</a> --}}
                        <a class="btn btn-secondary mx-2 " data-bs-dismiss="modal">إلغاء</a>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

{{-- <div class="modal fade" id="invoiceModal" tabindex="-1" aria-labelledby="invoiceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-md-between">
                <div class="col"><button id="btnPrint" class="btn btn-success mx-2">طباعة</button></div>
                <div class="col"><h1 class="w-100 modal-title fs-3 text-center text-success bold " id="bayModalLabel">فاتورة مبيعات</h1></div>
                <div class="col"><button type="button" class="btn-close m-0 p-0" data-bs-dismiss="modal" aria-label="Close"></button></div>
            </div>
            <div id="invoiceContent" class="modal-body">               
                              
            </div>
            
            
        </div>
    </div>
</div> --}}

{{-- @endsection --}}

@section('script')
<script type="text/javascript"> 
    $(document).ready(function(){
        $('body').on('click', '#formSubmit', function(e){
            e.preventDefault();
            var checkoutForm = $("#checkout");
            var formData = checkoutForm.serialize();
            $( '#name-error' ).html("");
            $( '#address-error' ).html("");
            $( '#email-error' ).html("");
            $( '#discount-error' ).html("");
            
            $.ajax({
                url:"{{ route('getInvoice')}}",
                type:'POST',
                data:formData,
                success:function(data) {
                    if(data.errors) {
                        if(data.errors.name){
                            $( '#name-error' ).html( data.errors.name[0] );
                        }
                        if(data.errors.email){
                            $( '#email-error' ).html( data.errors.email[0] );
                        }
                        if(data.errors.address){
                            $( '#address-error' ).html( data.errors.address[0] );
                        }
                        if(data.errors.discount){
                            $( '#discount-error' ).html( data.errors.discount[0] );
                        }
                        
                    }else{
                
                        $('#success-msg').removeClass('hide');
                        setTimeout(() => {
                            $('#name').val("");
                            $('#address').val("");
                            $('#email').val("");
                            $('#cartModal').modal('hide');
                            printInvoice(data)
                            
                        }, 100);
                        
                    }
                },
            });
        });
    });

    $('body').on('blur', '#discout_tb', function(e){        
        $('#discount').val($(this).val());
        let $total = $('#total_tb').text()
        $('#total_tb').text(parseFloat($total) - parseFloat($(this).val()))
    })
    
    function printInvoice(content){
        var printWin = window.open("","processPrint");
        printWin.document.open();
        printWin.document.write(content);
        printWin.document.close();
        setTimeout(() => {                    
            printWin.print();
        }, 300);
    }

</script>


@endsection