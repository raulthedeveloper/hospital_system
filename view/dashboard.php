<?php include 'includes/header.php' ?>
<?php include 'includes/modals/add_modal.php' ?>

<div class="container mt-3">
  <div class="row mb-3">
    <div class="display-4 text-light"> Welcome User</div>
   
  </div>
  <form class="d-flex mb-3">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>



      
  <div class="row">
  <table class="table bg-light rounded">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Procedure</th>
      <th scope="col">Doctor</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1/11/21</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">1/12/21</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">1/13/21</th>
      <td>Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

   
  </div>
</div>


<?php include 'includes/footer.php' ?>