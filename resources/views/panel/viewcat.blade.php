@include("components.header")
<div class="container-fluid pt-4 px-4">
                <div class="row  bg-light rounded   mx-0">
                    <div class="col-md-12">
                        <h3>This is blank page</h3>
                        <table class="table">
                                <thead>
                                    <tr>
                                    
                                        <th scope="col"> Name</th>
                                        <th scope="col">Image</th>
                                        <th scope="col" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allCat as $values)
                                    
                                    
                                    <tr>
                                        <th scope="row">{{$values['name']}}</th>
                                        <td><img src="assets/img/categories/{{$values['image']}}" width="90px" alt=""></td>
                                        <td><a href="update.{{$values['id']}}" class="btn btn-info">Edit</a></td>
                                        <td><a href="delete.{{$values['id']}}" class="btn btn-danger">Delete</a></td>
                                   </tr>
                                   @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
            @if(session("updateCat"))
            <script>
                alert("category updated successfully")
            </script>
            @elseif(session("DeleteCategory"))
            <script>
                alert("category Delete successfully")
            </script>
            @endif
@include("components.footer")
