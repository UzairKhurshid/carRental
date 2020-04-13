    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div id="breadcrumbs-wrapper" data-image="<?php echo base_url(); ?>assets/app-assets/images/gallery/breadcrumb-bg.jpg">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s12 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0">New Car</h5>
              </div>
             
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="container">
            <div class="section">
 
      
            
    <!-- Form Advance -->
    <div class="col s12 m12 l12">
      <div id="Form-advance" class="card card card-default scrollspy">
        <div class="card-content">
          <?php echo form_open_multipart('Admin/addNewCar'); ?>
          <form  class="col s12">
            <div class="row">
              <div class="input-field col m6 s12">
                <input id="companyName" type="text" name="companyName" require>
                <label for="companyName">Company Name</label>
              </div>
              <div class="input-field col m6 s12">
                <input id="carName" type="text" name="carName" require>
                <label for="carName">Car Name</label>
              </div>
            </div>
            <div class="row">
                <div class="input-field col m6 s12">
                    <input id="model" type="number" name="model" require>
                    <label for="model">Car Model</label>
                </div>
                <div class="input-field col m6 s12">
                    <input id="noOfSeats" type="number" name="noOfSeats" require>
                    <label for="noOfSeats">Seat Capacity</label>
                </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="price" type="number" name="price" require>
                <label for="price">price per day</label>
              </div>
            </div>
            

            <div class="row">
              <div class="input-field col s12">
                    <div class="row section">
                <div class="col s12 m4 l3">
                    <p>Remove button</p>
                </div>
                    <div class="col s12 m8 l9">
                        <input type="file" name="img"  require/>
                    </div>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="input-field col s12">
                <textarea id="description" class="materialize-textarea" name="description" require></textarea>
                <label for="description">Description About Car</label>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Add New Car 
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
            </div>
          </form>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>


            </div>         
          </div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->
