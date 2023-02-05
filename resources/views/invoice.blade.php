<html>
    <head>
        <title>فاتورة مبيعات</title>
        <link href="https://fonts.bunny.net/css?family=Cairo" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        
        <style>
            * {
                direction: rtl;
                font-family: "Cairo" !important;
            }
            @media print {
                .no-print,
                .no-print * {
                    display: none !important;
                }
            }
            page[size="A4"] {
                background: #fff;
                width: 21cm;
                min-height: 29.7cm;
                display: block;
                margin: 0 auto;
                margin-bottom: 0.25cm;
                box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
            }
            @media print {
                @page {
                    size: portrait;
                }
                body,
                page[size="A4"] {
                    margin: 0 auto;
                    box-shadow: 0;
                    border: initial;
                    border-radius: initial;
                    width: initial;
                    min-height: initial;
                    box-shadow: initial;
                    background: initial;
                    page-break-after: always;
                }
                footer {
                    position: fixed;
                    bottom: 0;
                }
                table {
                    page-break-inside: auto;
                }
                tr {
                    page-break-inside: auto;
                    position: static;
                    font-size: 12px;
                }
                td{
                    font-size: 12px;
                }
                thead {
                    display: table-header-group;
                }
                tfoot {
                    display: table-footer-group;
                }
                
            }
            
            tr {
                font-size: 12px;
            }
            td{
                font-size: 12px;
            }
            footer {
                width: 100%; height: 50px;
            }
        </style>
    </head>
    <body>
        <page size="A4" layout="portrait" class="my-4">
            <div class="row p-3">
                
                <div class="col-8 mt-3 lh-1">
                    <h6 class="text-right fw-bolder text-muted" style="margin-right: 30px">بيانات العميل</h6>
                    <p class="text-right fw-bold text-muted">الاسم: <span class="text-dark">{{ $name }}</span></p>
                    <p class="text-right fw-bold text-muted">العنوان: <span class="text-dark">{{ $address }}</span></p>
                    <p class="text-right fw-bold text-muted">البريد الإلكتروني: <span class="text-dark">{{ $email }}</span></p>
                </div>

                <div class="col-4">
                    {{-- <i class="fa fa-bag-shopping text-danger shadow"></i>                                        --}}
                    <div class="text-center" ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="90" height="90" class="m-3"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M160 112c0-35.3 28.7-64 64-64s64 28.7 64 64v48H160V112zm-48 48H48c-26.5 0-48 21.5-48 48V416c0 53 43 96 96 96H352c53 0 96-43 96-96V208c0-26.5-21.5-48-48-48H336V112C336 50.1 285.9 0 224 0S112 50.1 112 112v48zm24 96c-13.3 0-24-10.7-24-24s10.7-24 24-24s24 10.7 24 24s-10.7 24-24 24zm200-24c0 13.3-10.7 24-24 24s-24-10.7-24-24s10.7-24 24-24s24 10.7 24 24z" fill="red" /></svg></div>                               
                    <h5 class="text-center fw-bolder text-success">e-commerce</h5>
                </div>
            </div>
            <div class="row">
                <h5 class="text-center fw-bolder mb-3">فاتورة رقم  ( #1 )</h5>
            </div>
            <div class="container">
                {{ App\Http\Controllers\ProductsController::getCartInvoice() }} 
            </div>

            <footer>                
                <p class="w-100 mt-3 fs-6 text-center text-muted border-top">Developed by :  ifmr4dev@gmail.com</p>
            </footer>
        </page>
    </body>
</html>
