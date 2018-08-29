<h1>This is <?php echo Clients::query('firstname') . " " . Clients::query('name') ?></h1>
<small>ID #<?php echo Clients::query('id') ?></small>
<address>Email : <?php echo Clients::query('email') ?></address>
<strong>Phone number : <?php echo Clients::query('phonenumber') ?></strong>

