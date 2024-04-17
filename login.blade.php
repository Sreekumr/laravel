<x-layout>
    <form method="post" action="login"> 
      @csrf
    <div class="mb-3">
      
        <label for="exampleInputEmail1" class="form-label">User Name</label>
        <input type="text" class="form-control" id="name" name= "name" >
      </div>
      <div class="mb-3">
      
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="Password" name="password">
      </div>
      </div>
      
      
      <button type="submit" class="btn btn-primary">login</button>
    </form>
    </x-layout>