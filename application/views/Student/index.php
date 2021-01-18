<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>   <!-- Main content -->
<div class="content">
    <div class="container-fluid">
      <!-- Table -->
      <h2 class="mb-5">Student Register</h2>
      <div class="row">
        <div class="col-md-12 col-xs-12 m-auto order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Create Student</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Add New</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">Student information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Student_Name</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Fathers_Name</label>
                        <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="">
                      </div>
                    </div>
                       <div class="col-md-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Mother_Name</label>
                        <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Student_Blood_Group</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">Student_Mobile_No</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Student_emailid</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="">
                      </div>
                    </div>
                      <div class="col-md-3">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Parent_Contact_No</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="">
                      </div>
                    </div>
                      <div class="col-md-3">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Date_of_Birth</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="">
                      </div>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-md-3">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">Sex</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Community</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="">
                      </div>
                    </div>
                      <div class="col-md-3">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Caste</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="">
                      </div>
                    </div>
                      <div class="col-md-3">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Nationality</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-city">City</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="New York">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-country">Area_Name</label>
                        <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="United States">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">PinCode</label>
                        <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Postal code">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
               
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


   
<?php// endif; ?>



