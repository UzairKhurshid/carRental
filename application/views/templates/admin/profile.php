
    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="col s12">
          <div class="container">
            <div class="row user-profile mt-1">
  <img class="responsive-img" alt="" src="<?php echo base_url()  ;?>assets/app-assets/images/gallery/profile-bg.png">
</div>
<div class="section" id="user-profile">
  <div class="row">
    <!-- User Profile Feed -->
    <div class="col s12 m4 l3 user-section-negative-margin">
      <div class="row">
        <div class="col s12 center-align">
          <img class="responsive-img circle z-depth-5" width="200" src="<?php echo base_url()  ;?>assets/app-assets/images/user/12.jpg" alt="">
          <br>
          <a class="waves-effect waves-light btn mt-5 border-radius-4"> Follow</a>
        </div>
      </div>
     
    
   
    
    </div>
    <!-- User Post Feed -->
    <div class="col s12 m8 l6">
      <div class="row">
        <div class="card user-card-negative-margin z-depth-0" id="feed">
          <div class="card-content card-border-gray">
            <div class="row">
              <div class="col s12">
                <h5><?php echo $d['name'] ?></h5>
                <p><?php echo $d['role'] ?> <span class="amber-text"><span class="material-icons star-width vertical-align-middle">star_rate</span>
                    <span class="material-icons star-width vertical-align-middle">star_rate</span> <span class="material-icons star-width vertical-align-middle">star_rate</span>
                    <span class="material-icons star-width vertical-align-middle">star_rate</span> <span class="material-icons star-width vertical-align-middle">star_rate</span></span></p>
              </div>
            </div> 
          
            <div class="col12 s6">
  <?php echo form_open('Auth/reg'); ?>
    <form class="login-form">
      <div class="row">
        <div class="input-field col s12">
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">mail_outline</i>
          <input id="name" type="text" name="name" value="<?php echo $d['name'] ?>">
          <input id="name" type="hidden" name="id" value="<?php echo $d['id'] ?>">
          <input id="role" type="hidden" name="role" value="<?php echo $d['role'] ?>">
          <label for="name">Username</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">mail_outline</i>
          <input id="email" type="email" name="email">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">person_outline</i>
          <input id="phone" type="number" name="phone">
          <label for="phone" class="center-align">Phone</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">lock_outline</i>
          <input id="password" type="password" name="password" >
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <button type="submit"  class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Update Profile</button>
          <br><br>
          <a href="<?php echo base_url() ?>Auth/logout"  class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Logout</a>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
        </div>
      </div>
    </form>
    <?php echo form_close(); ?>
  
</div>

          
          </div>
        </div>
      </div>
    </div>
    <!-- Today Highlight -->
    
  </div>
</div>
    
          </div>
        </div>
      </div>
    </div>