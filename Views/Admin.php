<h1>Page Admin !</h1>

<table>
	<thead>
		<th>ID</th>
		<th>Company Name</th>
		<th>Date of issue</th>
	</thead>
	<tbody>
		<?php echo Admin::showFiveLatestInvoices(); ?>
	</tbody>
</table>