<?php require_once "./Includes/header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Canadian User Info Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="container mt-5">
    <h1 class="text-center text-danger col-md-1 p-5 ">Testing...</h1>

    <div class="row justify-content-center">
      <div class="col-md-10">
        <form class="row g-3" method="post" action="receive.php">
          
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4" name="email"  required>
          </div>

          <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress" name="address" required>
          </div>

          <div class="col-md-6">
            <label for="inputCity" class="form-label">City</label>
            <input type="text" class="form-control" id="inputCity" name="city" required>
          </div>

          <div class="col-md-4">
            <label for="inputState" class="form-label">Province</label>
            <select id="inputState" class="form-select" name="province" required>
              <option value="" selected disabled>Choose...</option>
              <option>Alberta</option>
              <option>British Columbia</option>
              <option>Manitoba</option>
              <option>New Brunswick</option>
              <option>Newfoundland and Labrador</option>
              <option>Northwest Territories</option>
              <option>Nova Scotia</option>
              <option>Nunavut</option>
              <option>Ontario</option>
              <option>Prince Edward Island</option>
              <option>Quebec</option>
              <option>Saskatchewan</option>
              <option>Yukon</option>
            </select>
          </div>

          <div class="col-md-2">
            <label for="inputZip" class="form-label">Postal code</label>
            <input type="text" class="form-control" id="inputZip" name="postal_code" required>
          </div>

          <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
            <div class="container">
    <div class="row justify-content-center mt-5">
       
    <div class="col-12">
                    <a href="viewrecords.php" class="btn btn-info w-100">View Records</a>

    <div class="container">
    <div class="row justify-content-center mt-3">
    <div class="col-12 d-flex p-0">

    
      <div class="col-3 bg-success-subtle text-dark p-2 text-center">
        Primary Key
      </div>


      <a href="Delet.php" class="col-9 bg-danger text-white p-2 text-center" style="text-decoration:none;">
        To delete a record, click this button
      </a>

    </div>
  </div>
</div>
                
        </div>
    </div>
</div>

          </div>
        </form>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php require_once "./Includes/footer.php"; ?>