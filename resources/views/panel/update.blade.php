@include ("components.header")

<div class="container-fluid pt-4 px-4">
                <div class="row bg-light rounded mx-0">
                    <div class="col-md-12">
                        <h3> update category</h3>
                        <form method="post" action="{{url('edit')}}" enctype="multipart/form-data">
                            <input type="hidden" name="cid" value="{{$data['id']}}">
                            @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="cname"
                                      value="{{$data['name']}}"  aria-describedby="emailHelp">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">image</label>
                                    <input type="file" name="cimage" class="form-control" id="exampleInputPassword1">
                                    <img src="assets/img/categories/{{$data['image']}}" alt="" srcset="" width="90px">
                                </div>
                             
                                <button type="submit" class="btn btn-primary">submit</button>
                            </form>
                    </div>
                </div>
            </div>
         
@include ("components.footer")