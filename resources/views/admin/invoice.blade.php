<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("assets/css/invoice.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}">
    <title>Document</title>
    <style>
        body{
            background: #000;
        }
       
        @media print {
            #print_Button {
                display: none;
            }
        }
  
    </style>
</head>
<body>
    <div class="container" id="print">
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="invoice-container">
                            <div class="invoice-header">
        
                                <!-- Row start -->
                           
                                <!-- Row end -->
        
                                <!-- Row start -->
                      
                                <!-- Row end -->
        
                                <!-- Row start -->
                                <div class="row gutters">
                                    
                                    
                                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                        <div class="invoice-details">
                                            @foreach ($users as $user )
                                            <address>
                                              User Name : {{$user->name}}
                                            </address>
                                            <address>E-mail : {{$user->email}}</address>
                                            <address>Phone : {{$user->phone}}</address>
                                            <address>Address : {{$user->address}}</address>
                                            <address>Age : {{$user->age}}</address>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="invoice-details">
                                            <div class="invoice-num">
                                                <div class="text-white">Order Date : {{$user->created_at}}</div>
                                                <div>
                                                    <button class="btn btn-outline-success w-100 mt-4" id="print_Button" onclick="printDiv()">Print</button>
                                                </div>
                                            </div>
                                        </div>													
                                    </div>
                                </div>
                                <!-- Row end -->
        
                            </div>
        
                            <div class="invoice-body">
        
                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table custom-table m-0 text-white">
                                                <thead>
                                                    <tr>
                                                        <th>Product Name</th>
                                                        <th>Product ID</th>
                                                        <th>Quantity</th>
                                                        <th>Sub Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($users as $user )
                                                        
                                                    
                                                    <tr >
                                                        <td>
                                                           
                                                            <p class="m-0 text-muted">
                                                                {{$user->pName}}
                                                            </p>
                                                        </td>
                                                        <td>{{$user->id}}</td>
                                                        <td>{{$user->quntity}}</td>
                                                        <td>${{$user->price}}</td>
                                                    </tr>
                                                  
                                                    
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td colspan="2">
                                                            <p>
                                                                Subtotal<br>
                                                                Shipping &amp; Handling<br>
                                                                
                                                            </p>
                                                            <h5 class="text-success"><strong>Grand Total</strong></h5>
                                                        </td>			
                                                        <td>
                                                            <p>
                                                                ${{$user->price}}<br>
                                                                $10.00<br>
                                                                
                                                            </p>
                                                            <h5 class="text-success"><strong>${{$user->quntity*$user->price+10}}</strong></h5>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->
        
                            </div>
        
                            <div class="invoice-footer">
                                Thank you for your Business.
                            </div>
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function printDiv() {
            var printContents = document.getElementById('print').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            location.reload();
        }
    </script>
</body>
</html>