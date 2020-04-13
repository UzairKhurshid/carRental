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
                        <ul class="tabs">
                        <li class="tab col s6 p-0"><a class="active p-0" href="#view-borderless-table">View</a></li>
                        <li class="tab col s6 p-0"><a class="p-0" href="#html-borderless-table">Html</a></li>
                        </ul>
                    </div>
                    </div>
                </div>
                <div id="view-borderless-table">
                    <div class="row">
                    <div class="col s12">
                        <table>
                        <thead>
                            <tr>
                            <th data-field="name">Name</th>
                            <th data-field="email">Email</th>
                            <th data-field="password">Password</th>
                            <th data-field="age">Role</th>
                            <th data-field="action">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data as $d):  ?>
                            <tr>
                            <td><?php echo $d['name']; ?></td>
                            <td><?php echo $d['email']; ?></td>
                            <td><?php echo $d['password']; ?></td> 
                            <td><?php echo $d['role']; ?></td>
                            <td><a href="<?php echo base_url(); ?>Admin/delAccount/<?php echo $d['id']; ?>">Delete</a></td>
                            <td><a href="<?php echo base_url(); ?>Admin/editAccount/<?php echo $d['id']; ?>">Edit</a></td>
                            <td></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                <div id="html-borderless-table">
                    <pre><code class="language-markup">
        &lt;table>
            &lt;thead>
            &lt;tr>
            &lt;th>Name&lt;/th>
            &lt;th>Item Name&lt;/th>
            &lt;th>Item Price&lt;/th>
            &lt;/tr>
            &lt;/thead>
            &lt;tbody>
            &lt;tr>
            &lt;td>Alvin&lt;/td>
            &lt;td>Eclair&lt;/td>
            &lt;td>$0.87&lt;/td>
            &lt;/tr>
            &lt;tr>
            &lt;td>Alan&lt;/td>
            &lt;td>Jellybean&lt;/td>
            &lt;td>$3.76&lt;/td>
            &lt;/tr>
            &lt;tr>
            &lt;td>Jonathan&lt;/td>
            &lt;td>Lollipop&lt;/td>
            &lt;td>$7.00&lt;/td>
            &lt;/tr>
            &lt;/tbody>
        &lt;/table>
        </code></pre>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>