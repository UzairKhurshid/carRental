<div id="main">
    <div class="row">
        <div class="col s12 m6 l6">
        <div id="placeholder" class="card card card-default scrollspy">
            <div class="card-content">
            <h4 class="card-title">Replying To Queries Of User</h4>
            <br><br><br>
            <?php echo form_open('Admin/sendReply'); ?>
            <form class="col s12">
            <div class="row">
                <div class="input-field col s12">
                    <input value="<?php echo $data['name']; ?>" id="name" type="text" name="name" require readonly>
                    <input value="<?php echo $data['id']; ?>" id="id"  type="hidden" name="id" require  readonly>
                    <label for="name2">Name Of User</label>
                </div>
                </div>
                <div class="row">
                <div class="input-field col s12">
                    <input value="<?php echo $data['email']; ?>" id="email" type="email" name="email" require readonly>
                    <label for="email">Email Of User</label>
                </div>
                </div>
                
                <div class="row">
                <div class="input-field col s12">
                    <input  id="reply" type="text" name="reply" require>
                    <label for="reply">Reply To User</label>
                </div>
                </div>
                <br><br>
                    <div class="row">
                    <div class="input-field col s12">
                    <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Send
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