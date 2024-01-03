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
                    <h1>Contacts</h1>
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
                                    @if(Session::has('message'))
                                           <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                    @endif
                                    @if(Session::has('failed'))
                                           <div class="alert alert-danger" role="alert">{{Session::get('failed')}}</div>
                                    @endif
                                    <h4>Order View </h4>
                                       <div class="row">
                                            <div class="col-md-6">
                                               
                                               @if($order->payment_completed==0)
                                               <a href="/admin/payment-accepted/{{$order->id}}" class="btn btn-primary" onclick="return confirm('Are you sure?')">Payment Accepted</a>
                                               @endif
                                               @if($order->order_completed==0)
                                               <a href="/admin/order-completed/{{$order->id}}" class="btn btn-primary" onclick="return confirm('Are you sure?')">Order Completed</a>
                                               @endif
                                               <h4>Is payment accepted:
                                                    @if($order->payment_completed==0)
                                                    <span class="btn btn-danger">NO</span>
                                                    @else
                                                    <span class="btn btn-success">Yes</span>
                                                    @endif                                                    
                                               </h4>
                                               <h4>Is Service Provider completed this order: 
                                                    @if($order->provider_completed==0)
                                                    <span class="btn btn-danger">NO</span>
                                                    @else
                                                    <span class="btn btn-success">Yes</span>
                                                    @endif
                                                </h4>
                                               <h4>Is order completed: 
                                                    @if($order->order_completed==0)
                                                    <span class="btn btn-danger">NO</span>
                                                    @else
                                                    <span class="btn btn-success">Yes</span>
                                                    @endif
                                                </h4>

                                            </div>
                                            <div class="col-md-6">
                                                
                                            </div>
                                       </div>
                                       @if($order->provider_completed!=1)
                                       <br>
                                       <h4>Provide order to a service provider</h4>
                                       <form action="/admin/order-to-provider/{{$order->id}}" method="POST">
                                                @csrf

                                                <select name="provider_user_id" style="margin-bottom:6px;" required class="form-select form-control" aria-label="Default select example">
                                                    <option value="0" selected>Select Service Provider</option>
                                                    @foreach($s_providers as $provider)
                                                    <option value="{{$provider->user_id}}" @php if($provider->user_id==$order->to_provider_id) { echo "selected";  } @endphp>{{'Id:'.$provider->user->id.' Name:'.$provider->user->name}}</option>
                                                    @endforeach
                                                </select>

                                                <button type="submit" class="btn btn-primary">Provide</button>
                                                
                                                
                                        </form>  
                                        @endif
                                   </div>
                                   <div class="panel-body"  >
                                        
                                     
                                        <ul class="list-group">
                                          <li class="list-group-item"><b>Order Id:</b> {{$order->id}}</li>
                                          <li class="list-group-item"><b>Customer Name:</b> {{$order->user->name}}</li>
                                          <li class="list-group-item"><b>Customer Email:</b> {{$order->user->email}}</li>
                                          <li class="list-group-item"><b>Customer Phone:</b> {{$order->user->phone}}</li>
                                          <li class="list-group-item"><b>Service Category:</b> {{$order->service->name}}</li>
                                          <li class="list-group-item"><b>Total Bill</b>:{{$order->total_bill}}</li>
                                          <li class="list-group-item"><b>Payment Mode</b>:{{$order->book_type}}</li>
                                          <li class="list-group-item"><b>Transiction Id</b>:{{$order->transiction_id}}</li>
                                          <li class="list-group-item"><b>Is Order Completed</b>:{{$order->order_completed==0 ? 'No': 'Yes'}}</li>
                                          <li class="list-group-item"><b>Is Payment Completed</b>:{{$order->payment_completed==0 ? 'No': 'Yes'}}</li>
                                          <li class="list-group-item"><b>Service provided to</b>:{{$order->to_provider_id==0 ? 'No One': ' Id: '.$order->s_provider->id.' and Name: '.$order->s_provider->name}}</li>
                                          <li class="list-group-item"><b>Ordered Date</b>:{{date('d-m-Y',strtotime($order->created_at))}}</li>
                                          <li class="list-group-item"><b>Updated Date</b>:{{date('d-m-Y',strtotime($order->updated_at))}}</li>
                                        </ul>
                                       
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