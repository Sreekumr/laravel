<x-layout>
    <h1>Registeration</h1>

    <form method="post"  action="validate" >
        @csrf
    <div class="mb-3">
    @error('name')
     <p style="color:crimson;">{{$message}}</p>
    @enderror 
    <label  class="form-label">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name ="name">
  </div>
  <div class="mb-3">
  @error('email')
     <p style="color:crimson;">{{$message}}</p>
    @enderror 
    <label  class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
 
  <div class="mb-3">
  @error('password')
     <p style="color:crimson;">{{$message}}</p>
    @enderror 
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>

  <div class="mb-3">
    @error('password_confirmation')
       <p style="color:crimson;">{{$message}}</p>
      @enderror 
      <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
      <input type="password" class="form-control"  name="password_confirmation">
    </div>

  <button type="submit" class="btn btn-primary">register</button>
</form>
</x-layout>