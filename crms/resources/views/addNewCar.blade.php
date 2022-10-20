<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRMS-Add New Car</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Post New Car</p>

                <form>
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">Car name</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" class="form-control" />
        <label class="form-label" for="form6Example2">Car model</label>
      </div>
    </div>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form6Example2">Car Type : </label>
  <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="" value="" >
                        <label class="form-check-label" >Family</label>
                      </div>

                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="" value="" >
                    <label class="form-check-label" >Non-family</label>
                  </div>
                  
  </div>

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <input type="text" id="form6Example2" class="form-control" />
        <label class="form-label" for="form6Example2">Car Number</label>
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <input type="number" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">Rent Price</label>
      </div>
    </div>
  </div>

  <div class="form-outline mb-4">
  <label class="form-label" for="form3Example1c">Select Date</label>
<input type="date" name="" class="form-control"  value="">

  </div>

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        
        <label class="form-label" for="form6Example1">Choose Car color</label>
        <select class="form-select" aria-label="Default select example">
  <option selected>Select Color</option>
  <option value="1">White</option>
  <option value="2">Black</option>
  <option value="3">Blue</option>
  </select>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        
        <label class="form-label" for="form6Example2">Choose Car Sit number</label>
        <select class="form-select" aria-label="Default select example">
  <option selected>Select Number</option>
  <option value="1">2</option>
  <option value="2">4</option>
  <option value="3">8</option>
  </select>
      </div>
    </div>
  </div>

  <div class="form-outline mb-4">
    <textarea class="form-control" id="form6Example7" rows="4"></textarea>
    <label class="form-label" for="form6Example7">Car details</label>
  </div>

  <div class="form-outline mb-4">
  <label class="form-check form-check-inline" for="form3Example1c">Select Car Pic</label>
    <input type="file" name=""   value="">
    
  </div>

  
                    

 

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Upload</button>
  <a class="nav-link" href="dashboard_renter">Back</a>
</form>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    
    
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        
    </script>
</html>