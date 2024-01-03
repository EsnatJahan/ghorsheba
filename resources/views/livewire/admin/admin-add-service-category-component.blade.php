    <div>
        <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Add Service Category</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Add Service Category</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                        <div class="row portfolioContainer">
                            <div class="col-md-8 col-md-offset-2 profile1">
                               <div class="panel panel-default">
                                   <div class="panel-heading">
                                       <div class="row">
                                            <div class="col-md-6">
                                                 Add New Service Category
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{route('admin.service_categories')}}" class="btn btn-info pull-right">All categories</a>
                                            </div>
                                       </div>
                                   </div>
                                   <div class="panel-body">
                                       @if(Session::has('message'))
                                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                       @endif
                                       <form class="form-horizontal" wire:submit.prevent="createNewCategory">
                                           @csrf
                                          <div class="form-group">
                                             <label for="name" class="col-label col-sm-3">Category Name:</label>
                                             <div class="col-sm-9">
                                                  <input type="text" class="form-control" name="name" wire:model="name" wire:keyup="generateSlug">
                                                  @error('name') <p class="text-danger">{{$message}}</p> @enderror
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label for="description" class="col-label col-sm-3">Category Description:</label>
                                             <div class="col-sm-9">
                                                  <input type="text" class="form-control" name="name" wire:model="description" >
                                                  @error('description') <p class="text-danger">{{$message}}</p> @enderror
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label for="inclusion" class="col-label col-sm-3">Category Inclusion:</label>
                                             <div class="col-sm-9">
                                                  <textarea class="form-control" wire:model="inclusion"></textarea>
                                                  @error('inclusion') <p class="text-danger">{{$message}}</p> @enderror
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label for="notes" class="col-label col-sm-3">Notes to Customer:</label>
                                             <div class="col-sm-9">
                                                  <textarea class="form-control" wire:model="notes"></textarea>
                                                  @error('notes') <p class="text-danger">{{$message}}</p> @enderror
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label for="price" class="col-label col-sm-3">Category Price:</label>
                                             <div class="col-sm-9">
                                                  <input type="number" class="form-control" name="name" wire:model="price" >
                                                  @error('price') <p class="text-danger">{{$message}}</p> @enderror
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label for="discount" class="col-label col-sm-3">Category Discount:</label>
                                             <div class="col-sm-9">
                                                  <input type="number" class="form-control" name="name" wire:model="discount" >
                                                  @error('discount') <p class="text-danger">{{$message}}</p> @enderror
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label for="total" class="col-label col-sm-3">Category Total Price:</label>
                                             <div class="col-sm-9">
                                                  <input type="number" class="form-control" name="name" wire:model="total" >
                                                  @error('total') <p class="text-danger">{{$message}}</p> @enderror
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label for="slug" class="col-label col-sm-3">Category Slug:</label>
                                             <div class="col-sm-9">
                                                  <input type="text" class="form-control" name="slug" wire:model="slug">
                                                  @error('slug') <p class="text-danger">{{$message}}</p> @enderror
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label for="image" class="col-label col-sm-3">Category Image:</label>
                                             <div class="col-sm-9">
                                                  <input type="file" class="form-control-file" name="image" wire:model="image">
                                                  @error('image') <p class="text-danger">{{$message}}</p> @enderror
                                                  @if($image)
                                                     <img src="{{$image->temporaryUrl()}}" width="60">
                                                  @endif
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label for="coverimage" class="col-label col-sm-3">Category Cover Image:</label>
                                             <div class="col-sm-9">
                                                  <input type="file" class="form-control-file" name="coverimage" wire:model="coverimage">
                                                  @error('coverimage') <p class="text-danger">{{$message}}</p> @enderror
                                                  @if($coverimage)
                                                     <img src="{{$coverimage->temporaryUrl()}}" width="60">
                                                  @endif
                                             </div>
                                          </div>
                                          <button type="submit" class="btn btn-success pull-right">Add Category</button>
                                       </form>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>  
                </div>   
            </div>      
        </section>    
    </div>
