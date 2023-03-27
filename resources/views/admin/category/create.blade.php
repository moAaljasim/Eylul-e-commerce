
@extends('layouts.admin')
@section('content')


  <div class="row">
     <div class="col md-12">
        <div class="card">
                <div class="card-header">
                  <h2> category
                    <a href="" class="btn btn-primary   float-end">aback</a>
                  </h2>
                 
                </div>
                <div class="card-body">
                       <form method="POST" action="{{url('admin/category')}} " enctype="multipart/form-data">
                       @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>name</label>
                                <input   type="text" name="name" class="form-control"/>
                               
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label>slug</label>
                                <input   type="text" name="slug" class="form-control"/>
                               
                            </div>

                            <div class="col-md-12 mb-3">
                                <label>description</label>
                                <input   type="text" name="description" class="form-control"/>
                               
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>image</label>
                                <input   type="file" name="image" class="form-control"/>
                             
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>status</label>
                                <input   type="checkbox" name="status" />
                                
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>meta-title</label>
                                <input   type="text" name="meta_title" class="form-control"/>
                                
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>meta-keyword</label>
                                <input   type="text" name="meta-keyword" class="form-control"/>
                                
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>meta-description</label>
                                <textarea   type="text" name="meta_description" class="form-control" rows="3"></textarea>
                               
                            </div>

                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary   ">add category</button>
                               
                            </div>
                        </div>

                       </form>
                </div>
        </div>
    
     </div>
  </div>


@endsection
