<div id="main">
<div class="row">
        <div class="col s12">
            <div id="borderless-table" class="card card-tabs">
                <div class="card-content">
                <div class="card-title">
                    <div class="row">
                    <div class="col s12 m6 l10">
                        <h4 class="card-title">All Accounts</h4>
                    </div>
                    <div class="col s12 m6 l2">
                    <a href="<?php echo base_url(); ?>Admin/reservations" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Reservations</a><br><br>
                    <a href="<?php echo base_url(); ?>Admin/reservedDeals" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Deals</a>
                    </div>
                    </div>
                </div>
                <div id="view-borderless-table">
                    <div class="row">
                    <div class="col s12">
                        <table>
                        <thead>
                            <tr>
                            <th data-field="dealName">Deal Name</th>
                            <th data-field="dealName">Quantity Of Car</th>
                            <th data-field="dealName">Days</th>
                            <th data-field="dealName">Discount</th>
                            <th data-field="action">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data as $d): ?>
                            <tr>
                            <td><?php echo $d['dealName']; ?></td> 
                            <td><?php echo $d['quantityCar']; ?></td>
                            <td><?php echo $d['days']; ?></td>
                            <td><?php echo $d['discount']; ?></td>
                            <td><a href="<?php echo base_url() ?>Admin/delReserveDeal/<?php echo $d['id']; ?>"  class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Delete</a></td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                <div id="html-borderless-table">
                  
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>