<div>
  



    <div>
    


    <div>
        <style>
            nav svg{
                height: 20px;
            }
            nav .hidden{
                display: block !important;
            }
        </style>
        <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Order Dashboard</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Orders</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central"  >
            <div class="content_info" >
                <div class="paddings-mini" >
                    <div class="container" >
                        <div class="row">
                            <div class="col-md-12 profile1">
                                <div class="panel panel-default">
                                   <div class="panel-heading">
                                       <div class="row">
                                            <div class="col-md-6">
                                                Order History
                                            </div>
                                            <div class="col-md-6">
                                                
                                            </div>
                                       </div>
                                   </div>
                                   <div class="panel-body"  >
                                        @if(Session::has('message'))
                                           <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                        @endif
                                       <table class="table table-striped" >
                                            <thead>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>User Phone</th>
                                                    <th>Service Category</th>
                                                    <th>Payment Mode</th>
                                                    <th>Payment Approval</th>
                                                    <th>Order Completed</th>
                                                    <th>Created At</th>
                                                </tr>
                                           </thead>
                                           <tbody>
                                                @foreach($orders as $order)
                                                  <tr>
                                                     <td>{{$order->id}}</td>
                                                     <td>{{$order->user->phone}}</td>
                                                     <td>{{$order->service->name}}</td>
                                                     <td>{{$order->book_type}}</td>
                                                     <td>{{$order->payment_completed==0 ? 'No(Wait until payment approval)':'Yes' }}</td>
                                                     <td>{{$order->order_completed==0 ? 'No':'Yes'}}</td>
                                                     <td>{{date('d-m-Y',strtotime($order->created_at))}}</td>
                                                   </tr>
                                               @endforeach
                                           </tbody>
                                        </table>
                                       
                                   </div>
                                   </div>
                                </div> 
                            </div>
                        </div>
                    </div>  
                </div>   
            </div>      
        </section>    
    </div>

    

</div>



</div>
