<div id="main">
    <div class="row">
        <div class="col s12 m6 l6">
        <div id="placeholder" class="card card card-default scrollspy">
            <div class="card-content">
            <h4 class="card-title">Form with placeholder</h4>
            <?php echo form_open('Admin/updateAccount'); ?>
            <form class="col s12">
            <div class="row">
                <div class="input-field col s12">
                    <input value="<?php echo $data['name']; ?>" id="name" type="text" name="name" require>
                    <input value="<?php echo $data['id']; ?>" id="id"  type="hidden" name="id" require readonly>
                    <label for="name2">Name</label>
                </div>
                </div>
                <div class="row">
                <div class="input-field col s12">
                    <input value="<?php echo $data['email']; ?>" id="email" type="email" name="email" require>
                    <label for="email">Email</label>
                </div>
                </div>
                <div class="row">
                <div class="input-field col s12">
                    <input value="<?php echo $data['role']; ?>" id="role" type="text" name="role" require>
                    <label for="Role">Age</label>
                </div>
                </div>
                <div class="row">
                <div class="input-field col s12">
                    <input value="<?php echo $data['password']; ?>" id="password" type="text" name="password" require>
                    <label for="password">Password</label>
                </div>
                </div>
                    <div class="row">
                    <div class="input-field col s12">
                    <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Update
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