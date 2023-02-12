<div>
  <x-slot:title >
        Catigories
  </x-slot>
  <div class="container ">
    <div class="card-my-4">
        <div class="d-flex justefy-content-between">
        <h3>Category list</h3>
        <botton data-toggle="modal" data-target="#addCategory"
         class="btn btn-secondary">Add Category</botton>
        </div>
    </div>
    <div class="card-body">
        <div class="d-flex my-2">
           <botton class="btn btn secondary">PDF</botton>
           <botton class="btn btn secondary ml-3">Print</botton> 
        </div>
        <div class="table-responsive">
            <table class="table table-border">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                     <tr>
                        <td>2</td>
                        <td>Web Development</td>
                       <td><botton  data-toggle="modal" data-target="#updateCategory"
                           class="btn btn-success">
                       <td><svg  style="cursor:pointer; color:blue;" width="20" height="20"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                         <path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9
                                97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1
                                6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7
                                24.6 5.8l88.8-29.6c8.2-2.8 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3
                                172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0
                                96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3
                                32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7
                                 0 32-14.3 32-32s-14.3-32-32-32H96z"/>
                                </svg>
                            </botton>
                         </td> 
                     </td>
                        <td>
                            <botton class="btn btn-danger">
                        <svg style="cursor:pointer; color:blue;" width="20" height="20"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                         <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32
                                96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.
                                4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 
                                128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7
                                47.9-45L416 128z"/>
                        </svg>
                        <botton/>
                        </td>
                     </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-body">
        <div class="d-flex
        justify-content-center">
        <botton class="btn btn-success ml-1">Prev</botton>
        <botton class="btn btn-success ml-1">1</botton>
        <botton class="btn btn-secondary ml-1">2</botton>
        <botton class="btn btn-success ml-1">3</botton>
        <botton class="btn btn-success ml-1">4</botton>
        <botton class="btn btn-success ml-1">Next</botton> 
    </div>
    </div>
  </div>


<!--add category Modal -->
<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" 
aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="">
      <div class="modal-body">
        <div class="form-group">
            <label for="">Enter Category Name</label>
            <input type="text" name="" id=""
            class="form-control-lg">
        </div>
        <div class="form-group">
            <label for="">Enter Description</label>
           <textarea name="" id="" cols="30" rows="10"
           class="form-control"></textarea> 
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
        
      </form>
    </div>
  </div>
</div>
  
{{-- update category modal --}}

<div class="modal fade" id="updateCategory" tabindex="-1" role="dialog" 
aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="">
      <div class="modal-body">
        <div class="form-group">
            <label for="">Enter Category Name</label>
            <input type="text" name="" id=""
            class="form-control-lg">
        </div>
        <div class="form-group">
            <label for="">Enter Description</label>
           <textarea name="" id="" cols="30" rows="10"
           class="form-control"></textarea> 
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Update</button>
        </div>
        
      </form>
    </div>
  </div>
</div>

</div>