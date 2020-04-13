
    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div id="breadcrumbs-wrapper" data-image="<?php echo base_url(); ?>assets/app-assets/images/gallery/breadcrumb-bg.jpg">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s12 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0">Cars</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="container">
           
          <div class="card">
    <div class="card-content">
         <div class="input-field col s12">
          <a href="<?php echo base_url(); ?>Admin/addNewCar" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Add New Car</a>
        </div>
    </div>
  </div>
 

<!--Card Reveal-->
<div id="card-reveal" class="section">

      <div class="row">
          <?php foreach($data as $d): ?>
            <div class="col s12 m6 l4">
                  <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                              <img style="width:500px;height:300px;" class="activator" src="<?php echo base_url(); ?>assets/uploads/<?php  echo $d['img'];?>" alt="" alt="office" />
                        </div>
                        <div class="card-content">
                              <span class="card-title activator grey-text text-darken-4"><?php  echo $d['carName'] ?><i class="material-icons right">more_vert</i>
                              </span><br>
                              <a href="<?php echo base_url(); ?>Admin/editCar/<?php echo $d['id']; ?>" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Edit</a><br>
                              <br>
                              <a href="<?php echo base_url(); ?>Admin/deleteCar/<?php echo $d['id']; ?>" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Delete</a>
                        </div>
                        <div class="card-reveal">
                              <span class="card-title grey-text text-darken-4"><?php  echo $d['carName'] ?><i class="material-icons right">close</i>
                              </span>
                              <p><b>Company Name :</b><?php  echo $d['companyName'] ?></p><br>
                              <p><b>Model :</b><?php  echo $d['model'] ?></p><br>
                              <p><b>No Of Seats :</b><?php  echo $d['noOfSeats'] ?></p><br>
                              <p><b>Price per Day :</b><?php  echo $d['price'] ?> PKR</p><br>
                              <a href="<?php echo base_url(); ?>Admin/passCarToDeal/<?php echo $d['id']; ?>" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Create Deal</a>
                        </div>
                  </div>
                  <p>
                      <p><b>Description  ::</b><?php  echo $d['description'] ?></p><br>
                  </p>
            </div>
            <?php endforeach; ?>
   
      </div>
</div>

<div class="divider mt-2"></div>

<!--End Card Reveal-->

        
          </div>
        </div>
      </div>
    </div>