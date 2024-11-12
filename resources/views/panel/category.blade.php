@include ("components.header")

<div class="container-fluid pt-4 px-4">
                <div class="row bg-light rounded mx-0">
                    <div class="col-md-12">
                        <h3>categories</h3>
                        <form method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="cname"
                                        aria-describedby="emailHelp">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">image</label>
                                    <input type="file" name="cimage" class="form-control" id="exampleInputPassword1">
                                </div>
                             
                                <button type="submit" class="btn btn-primary">submit</button>
                            </form>
                    </div>
                </div>
            </div>
            @if (session("category"))
<script>
    alert("add category")
</script>            
            @endif
@include ("components.footer")