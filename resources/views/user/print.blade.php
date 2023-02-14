<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabcart</title>
    <style>
        body{
            background-color: #F6F6F6; 
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
           background-color: #0d1033;
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <div>
                        <img src="{{asset("assets/logo.png")}}" class="bg-white" alt="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="company-details">
                        <p class="text-white">HexaShop</p>
                        <p class="text-white">hexashop@gmail.com</p>
                        <p class="text-white">+203685</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h2 class="heading">Invoice No.: 001</h2>
                    <p class="sub-heading">Tracking No. {{$invoices->role}} </p>
                    <p class="sub-heading">Email Address: {{Auth::user()->email}} </p>
                </div>
                <div class="col-6">
                    <p class="sub-heading">Full Name: {{Auth::user()->name}}  </p>
                    <p class="sub-heading">Address: {{Auth::user()->address}}  </p>
                    <p class="sub-heading">Phone Number: {{Auth::user()->phone}} </p>
                    <p class="sub-heading">City,State,Pincode: {{Auth::user()->address}}  </p>
                </div>
            </div>
        </div>

        <div class="body-section">
            <h3 class="heading">Ordered Items</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th class="w-20">Price</th>
                        <th class="w-20">Quantity</th>
                        <th class="w-20">Total</th>
                    </tr>
                </thead>
                <tbody>
                        
                  
                    <tr>
                        <td>{{$invoices->pName}}</td>
                        <td>{{$invoices->price}}</td>
                        <td>{{$count}}</td>
                        <td>${{$data}}</td>
                    </tr>
                   
                </tbody>
            </table>
            <br>
            <h3 class="heading">Payment Status: Paid</h3>
            <h3 class="heading">Payment Mode: Cash on Delivery</h3>
        </div>

        <form action="{{url("/order")}}" method="post">
            @csrf
              


            <input type="hidden" name="pName" id="" value="{{$invoices->pName}}">
            <input type="hidden" name="price" id="" value="{{$price}}">
            <input type="hidden" name="quntity" value="{{$count}}" >
            <input type="hidden" name="user_id" id="" value="{{$user}}">
            <div class="body-section">
                <button class="btn2">Confirm</button>
                {{-- <a href="{{url("/confirm/$invoices->id")}}" class="btn2">Confirm</a> --}}
            </form>      
               <style>
                .btn2{
                    border: 1px solid black;
                    background: #000;
                    color: #fff;
                    padding: 10px 20px;
                    cursor: pointer;
                    transition: 1s;
                    text-decoration: none;
                }
                .btn2:hover{
                    color: #000;
                    background: #fff;
                    padding: 10px 40px;
                }
               </style>
            </p>
        </div>      
    </div>      

</body>
</html>