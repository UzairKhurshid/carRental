    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div id="breadcrumbs-wrapper" data-image="<?php echo base_url(); ?>assets/app-assets/images/gallery/breadcrumb-bg.jpg">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s12 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0">Deals</h5>
              </div>
             
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="container">
            <div class="section">
  <div class="card">
    <div class="card-content">
         <div class="input-field col s12">
          
        </div>
    </div>
  </div>
 
  <?php foreach($d as $data): ?>
  <div class="row">
  <div class="col s12 m6 l4">
         <div id="flight-card" class="card animate fadeUp">
            <div class="card-header deep-orange accent-2">
               <div class="card-title">
                  <h5 class="task-card-title mb-3 mt-0 white-text"><?php echo $data['dealName']; ?></h5>
                  <p class="flight-card-date">June 18, Thu 04:50</p>
               </div>
            </div>
            <div class="card-content-bg white-text">
               <div class="card-content">
                  <div class="row flight-state-wrapper">
                     <div class="col s5 m5 l5 center-align">
                        <div class="flight-state">
                           <h4 class="margin white-text">Discount</h4>
                        </div>
                     </div>
                     <div class="col s2 m2 l2 center-align"><i class="material-icons flight-icon">local_airport</i></div>
                     <div class="col s5 m5 l5 center-align">
                        <div class="flight-state">
                           <h4 class="margin white-text"><?php echo $data['discount']; ?> %</h4>
                        </div>
                     </div>
                  </div>

                  <div class="row">
                     <div class="col s6 m6 l6 center-align">
                        <div class="flight-info">
                           <p class="small"><span class="grey-text text-lighten-4">Quantity Of Car:</span> </p>
                           <p class="small"><span class="grey-text text-lighten-4">For Days</span> </p>
                           <p class="small"><span class="grey-text text-lighten-4">Car ID</span> </p>
                        </div>
                     </div>
                     <div class="col s6 m6 l6 center-align flight-state-two">
                        <div class="flight-info">
                           <p class="small"><span class="grey-text text-lighten-4"><?php echo $data['quantityCar']; ?> </span> </p>
                           <p class="small"><span class="grey-text text-lighten-4"><?php echo $data['days']; ?> </span> </p>
                           <p class="small"><span class="grey-text text-lighten-4"><?php echo $data['carID']; ?></span> </p>
                        </div>
                     </div>

                  </div>

                    
               </div>
               
            </div>
            
    <a href="<?php echo base_url(); ?>Admin/editDeal/<?php echo $data['id']; ?>" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Edit</a><br><br>
   <a href="<?php echo base_url(); ?>Admin/deleteDeal/<?php echo $data['id']; ?>" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Delete</a>
               
                     </div>
                  </div>
                  
               </div>
            </div>         
          </div>
        </div>
        
                     <?php endforeach; ?>
      </div>
    </div>
    <!-- END: Page Main-->
