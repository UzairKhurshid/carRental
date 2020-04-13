    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div id="breadcrumbs-wrapper" data-image="<?php echo base_url(); ?>assets/app-assets/images/gallery/breadcrumb-bg.jpg">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s12 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0">New Deal</h5>
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
          <h4 class="card-title">Form Advance</h4>
          <?php echo form_open('Admin/updateDeal');  ?>
          <form class="col s12">
            <div class="row">
              <div class="input-field col m6 s12">
                <input id="dealName" type="text" name="dealName" value="<?php echo $data['dealName']; ?>">
                <input id="dealName" type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <label for="dealName">Deal Name</label>
              </div>
              <div class="input-field col m6 s12">
                <input id="discount" type="number" name="discount" value="<?php echo $data['discount']; ?>">
                <label for="discount">Discount</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="quantityCar" type="number" name="quantityCar" value="<?php echo $data['quantityCar']; ?>">
                <label for="quantityCar">Quantity Of Cars</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="days" type="number" name="days" value="<?php echo $data['days']; ?>">
                <label for="days">For Days</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input id="carID" type="number" name="carID" value="<?php echo $data['carID']; ?>" readonly>
                <label for="carID">Car ID</label>
              </div>
            </div>
           
            
            <div class="row">
              
              <div class="row">
                <div class="input-field col s12">
                  <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Update Deal
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
