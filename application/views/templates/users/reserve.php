    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div id="breadcrumbs-wrapper" data-image="<?php echo base_url(); ?>assets/app-assets/images/gallery/breadcrumb-bg.jpg">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s12 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0">New Reservation</h5>
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
        
          <?php echo form_open('Users/reserve');  ?>
          <form class="col s12">
            <div class="row">
              <div class="input-field col s12">
                <input id="quantityCar" type="number" name="quantityCar">
                <label for="quantityCar">Quantity Of Cars</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="days" type="number" name="days">
                <label for="days">For Days</label>
              </div>
            </div>
             
           

            <div class="row">
              <div class="input-field col s12">
                <input id="carID" type="number" name="userID" value="<?php echo $d['userID']; ?>" readonly>
                 
                <label for="carID">User ID</label>
              </div>
            </div>
            
            <div class="row">
              <div class="input-field col s12">
                <input id="carID" type="number" name="carID" value="<?php echo $d['carID']; ?>" readonly>
                <label for="carID">Car ID</label>
              </div>
            </div>
           
            
            <div class="row">
              
              <div class="row">
                <div class="input-field col s12">
                  <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Reserve 
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>





            </div>         
          </div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->
