    <div>



  


       <div class="section-title-01 honmob">
            <div class="bg_parallax image_01_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">

                    
        @if(Session::has('message'))
        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
        @endif
        @if(Session::has('failed'))
        <div class="alert alert-danger" role="alert">{{Session::get('failed')}}</div>
        @endif
                    <h1>{{$scategory->name}}</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>{{$scategory->name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 single-blog">
                                <div class="post-item">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="post-header">
                                                <div class="post-format-icon post-format-standard"
                                                    style="margin-top: -10px;">
                                                    
                                                    <i class="fa fa-server"></i>
                                                </div>
                                                <div class="post-info-wrap">
                                                    <h2 class="post-title"><a href="/" title="Post Format: Standard"
                                                            rel="bookmark">{{$scategory->name}}</a></h2>
                                                    <div class="post-meta" style="height: 10px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="single-carousel">
                                                <div class="img-hover">
                                                    <img src="{{asset('assets/images/categories')}}/{{$scategory->image}}" alt="{{$scategory->name}}"
                                                        class="img-responsive" style="max-width:80px;height:auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="post-content">
                                                <h3>{{$scategory->name}}</h3>
                                                <p>{{$scategory->description}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <aside class="widget" style="margin-top: 18px;">
                                    <div class="panel panel-default">                              
                                        @if(Route::has('login'))
                                           @auth
                                               @if(Auth::user()->utype==='CST')
                                                <div class="panel-footer">
                                                    <h5>No Charge</h5>
                                                    <a class="btn btn-primary" href="/customer/book/cod/{{$scategory->id}}" onclick="return confirm('Are you sure?')">
                                                        Get Service
                                                    </a>
                                                </div>
                                                @else
                                                <div class="panel-footer">
                                                   <h5>Login as Customer to Make Order</h5>
                                                </div>
                                                @endif
                                           @else   
                                           <div class="panel-footer">
                                               <form action="{{route('login')}}" method="GET">
                                                  @csrf
                                                  <input type="submit" class="btn btn-primary" value="Login as Customer to Book">
                                               </form >
                                           </div>       
                                           @endif

                                        @endif    
                                        


                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </section>
    </div>

  
