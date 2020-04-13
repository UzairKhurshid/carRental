<div class="col s12 m12 l12">
    <div class="card-panel">
        <?php echo form_open_multipart('admin/updateadmin'); ?>
            <div class="row">
                <nav>
                    <div class="nav-wrapper">
                        <a href="#" class="brand-logo center">Update Admin Profile        <span id="modal-myvalue"></span> <span id="modal-myvar"></span> <span id="modal-bb"></span></a>
                    </div>
                </nav>
            </div>
            <div class="row">
                <input type="hidden" name="adminid" value="<?php echo $admin["id"]?>"?>
                <div class="input-field col s6">
                    <input id="first_name" value="<?php echo $admin["name"]?>"  name="name" type="text" >
                    <label for="first_name" class="active">First Name  <?php echo form_error('name','<span class="error">', '</span>'); ?></label>
                </div>
                <div class="input-field col s6">
                    <input id="first_name"  value="<?php echo $admin["username"]?>" name="username" type="text">
                    <label for="first_name" class="active">User Name  <?php echo form_error('username','<span class="error">', '</span>'); ?></label>
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
                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>
                </div>
            </div>
        <?php echo form_close(); ?>
    </div>
</div>