<?php include 'includes/header.php' ?>




<div class="container d-flex justify-content-center flex-column" style="height:70vh">
  <div class="row justify-content-center">
    <div class="col-6">
    <form class="p-3 bg-light rounded" action="../controller/register-controller.php" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">First Name</label>
        <input name="first_name" type="text" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Last Name</label>
        <input name="last_name" type="text" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input name="user_name" type="text" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" value='password' class="form-label">Password</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
        <input name="confirm_password" type="password" class="form-control" id="confirm_password">
      </div>
      <div class="mb-3 form-check">
        
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    
  </div>
</div>




<?php include 'includes/footer.php' ?>