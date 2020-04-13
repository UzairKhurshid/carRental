<div class="col s12 m12 l12">
    <div class="card-panel">
        <?php echo form_open_multipart('admin/updateuser'); ?>
            <div class="row">
                <nav>
                    <div class="nav-wrapper">
                        <a href="#" class="brand-logo center">Update User Profile         <span id="modal-myvalue"></span> <span id="modal-myvar"></span> <span id="modal-bb"></span></a>
                    </div>
                </nav>
            </div>
            <div class="row">
                <input type="hidden" name="userid" value="<?php echo $user["id"]?>"?>
                <div class="input-field col s6">
                    <input id="first_name" value="<?php echo $user["name"]?>"  name="name" type="text" >
                    <label for="first_name" class="active">First Name  <?php echo form_error('name','<span class="error">', '</span>'); ?></label>
                </div>
                <div class="input-field col s6">
                    <input id="last_name"  value="<?php echo $user["fathername"]?>" name="fname" type="text">
                    <label for="last_name" class="active">Father Name  <?php echo form_error('fname','<span class="error">', '</span>'); ?></label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input id="first_name"  value="<?php echo $user["phone"]?>" name="phone" type="text">
                    <label for="first_name" class="active">Phone Number  <?php echo form_error('phone','<span class="error">', '</span>'); ?></label>
                </div>
                <div class="input-field col s6">
                    <input id="first_name"  value="<?php echo $user["username"]?>" name="username" type="text">
                    <label for="first_name" class="active">User Name  <?php echo form_error('username','<span class="error">', '</span>'); ?></label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Profile Picture</span>
                        <input type="file" name="userfile">
                        </div>
                        <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="input-field col s12">
                <input id="email5"  value="<?php echo $user["email"]?>" name="email" type="email">
                <label for="email" class="active">Email  <?php echo form_error('email','<span class="error">', '</span>'); ?></label>
            </div>
            </div>
            <div class="row">
            <div class="input-field col s12">
                <input id="password6"  value="" name="password" type="password">
                <label for="password">Password  <?php echo form_error('password','<span class="error">', '</span>'); ?></label>
            </div>
            </div>
            <div class="row">
            <div class="input-field col s12">
                <input id="password6"  value="<?php echo $user["address"]?>" name="address" type="text">
                <label for="password" class="active">Address  <?php echo form_error('address','<span class="error">', '</span>'); ?></label>
            </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>
                </div>
            </div>
        <?php echo form_close(); ?>
    </div>
</div>