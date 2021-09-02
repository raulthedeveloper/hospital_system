<?php include './model/create_db.php' ?>


<?php include 'view/includes/header.php' ?>


<div class="container d-flex justify-content-center flex-column" style="height:70vh">
  <div class="row justify-content-center">
    <div class="col-6">
    <form class="p-3 bg-light rounded">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">User Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3 form-check">
        <a href="./view/register.php">Register</a>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    
  </div>
</div>



<?php include 'view/includes/footer.php' ?>