<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRMS- Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

<section style="background-color: #eee;">
  <div class="container py-5">

    <div class="row">

      <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">

        <h5 class="font-weight-bold mb-3 text-center text-lg-start">Renter DashBoard</h5>
        <span class="d-block p-2 bg-primary text-white">
        <h4 align="right">Welcome {{Session::get('renter')}}</h4>
       </span>

        <div class="card">
          <div class="card-body">

            <ul class="list-unstyled mb-0">
              <li class="p-2 border-bottom" style="background-color: #eee;">
                <a href="#!" class="d-flex justify-content-between">
                  <div class="d-flex flex-row">
                    
                    <div class="pt-1">
                    <a class="nav-link" href="#">Profile</a>
                    </div>
                  </div>
                  <div class="pt-1">
                    
                  </div>
                </a>
              </li>
              <li class="p-2 border-bottom">
                <a href="#!" class="d-flex justify-content-between">
                  <div class="d-flex flex-row">
                    
                    <div class="pt-1">
                    <a class="nav-link" href="addNewCar">Add New Car</a>
                    </div>
                  </div>
                  <div class="pt-1">
                    
                  </div>
                </a>
              </li>
              <li class="p-2 border-bottom">
                <a href="#!" class="d-flex justify-content-between">
                  <div class="d-flex flex-row">
                    
                    <div class="pt-1">
                      
                    </div>
                  </div>
                  <div class="pt-1">
                  <a class="nav-link" href="messageRenter">Messages</a>
                  </div>
                </a>
              </li>
              <li class="p-2 border-bottom">
                <a href="#!" class="d-flex justify-content-between">
                  <div class="d-flex flex-row">
                   
                    <div class="pt-1">
                    
                    </div>
                  </div>
                  <div class="pt-1">
                  <a class="nav-link" href="">Notices</a>
                  </div>
                </a>
              </li>
              <li class="p-2 border-bottom">
                <a href="#!" class="d-flex justify-content-between">
                  <div class="d-flex flex-row">
                    
                    <div class="pt-1">
                      
                    </div>
                  </div>
                  <div class="pt-1">
                  <a class="nav-link" href="">Car Lists</a>
                  </div>
                </a>
              </li>
             
              <li class="p-2 border-bottom">
                <a href="#!" class="d-flex justify-content-between">
                  <div class="d-flex flex-row">
                    
                    <div class="pt-1">
                      
                    </div>
                  </div>
                  <div class="pt-1">
                  <a class="nav-link" href="">Earnings</a>
                  </div>
                </a>
              </li>
              <li class="p-2 border-bottom">
                <a href="#!" class="d-flex justify-content-between">
                  <div class="d-flex flex-row">
                    
                    <div class="pt-1">
                      
                    </div>
                  </div>
                  <div class="pt-1">
                  <a class="nav-link" href="">Orders</a>
                  </div>
                </a>
              </li>
              <li class="p-2 border-bottom">
                <a href="#!" class="d-flex justify-content-between">
                  <div class="d-flex flex-row">
                    
                    <div class="pt-1">
                      
                    </div>
                  </div>
                  <div class="pt-1">
                  <a class="nav-link" href="postCarVideo">Post a Car Video</a>
                  </div>
                </a>
              </li>
              <li class="p-2 border-bottom">
                <a href="#!" class="d-flex justify-content-between">
                  <div class="d-flex flex-row">
                    
                    <div class="pt-1">
                      
                    </div>
                  </div>
                  <div class="pt-1">
                  <a class="nav-link" href="">Car Videos</a>
                  </div>
                </a>
              </li>
              <li class="p-2 border-bottom">
                <a href="#!" class="d-flex justify-content-between">
                  <div class="d-flex flex-row">
                    
                    <div class="pt-1">
                      
                    </div>
                  </div>
                  <div class="pt-1">
                  <a class="nav-link" href="">Reviews</a>
                  </div>
                </a>
              </li>
              <li class="p-2 border-bottom">
                <a href="#!" class="d-flex justify-content-between">
                  <div class="d-flex flex-row">
                    
                    <div class="pt-1">
                     
                    </div>
                  </div>
                  <div class="pt-1">
                  <a class="nav-link" href="">History</a>
                  </div>
                </a>
              </li>
              <li class="p-2">
                <a href="#!" class="d-flex justify-content-between">
                  <div class="d-flex flex-row">
                    
                    <div class="pt-1">
                    <a class="btn btn-primary me-3" href="logout">Logout</a>
                    </div>
                  </div>
                  <div class="pt-1">
                    
                    <span class="text-muted float-end"><i class="fas fa-check" aria-hidden="true"></i></span>
                  </div>
                </a>
              </li>
            </ul>

          </div>
        </div>

      </div>

      <div class="col-md-6 col-lg-7 col-xl-8">

      <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Name</th>
      <th>Car Name</th>
     
      <th>Status</th>
      <th>Car Model</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="https://mdbootstrap.com/img/new/avatars/8.jpg"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1">John Doe</p>
            <p class="text-muted mb-0">john.doe@gmail.com</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">Toyota Supra</p>
        
      </td>
      <td>
        <span class="badge badge-success rounded-pill d-inline">Active</span>
      </td>
      <td>123456</td>
      <td>
        <button type="button" class="btn btn-link btn-sm btn-rounded">
          Edit
        </button>
      </td>
    </tr>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="https://mdbootstrap.com/img/new/avatars/6.jpg"
              class="rounded-circle"
              alt=""
              style="width: 45px; height: 45px"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1">Alex Ray</p>
            <p class="text-muted mb-0">alex.ray@gmail.com</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">Nissan R-34 Skyline</p>
        
      </td>
      <td>
        <span class="badge badge-primary rounded-pill d-inline"
              >Onboarding</span
          >
      </td>
      <td>416896526</td>
      <td>
        <button
                type="button"
                class="btn btn-link btn-rounded btn-sm fw-bold"
                data-mdb-ripple-color="dark"
                >
          Edit
        </button>
      </td>
    </tr>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="https://mdbootstrap.com/img/new/avatars/7.jpg"
              class="rounded-circle"
              alt=""
              style="width: 45px; height: 45px"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1">Kate Hunington</p>
            <p class="text-muted mb-0">kate.hunington@gmail.com</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">Mazda Rx-10</p>
        
      </td>
      <td>
        <span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
      </td>
      <td>55566667777</td>
      <td>
        <button
                type="button"
                class="btn btn-link btn-rounded btn-sm fw-bold"
                data-mdb-ripple-color="dark"
                >
          Edit
        </button>
      </td>
    </tr>
  </tbody>
</table>
      </div>

    </div>

  </div>
</section>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        
    </script>
</html>