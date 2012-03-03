<table class="table table-striped">
	<thead>
		<tr><th>ID</th><th>Title</th><th>Status</th><th>Private</th></tr>
	</thead>
	<tbody>
<?php foreach($list as $c):?>
<tr>
<td><?php echo $c['contest_id'];?></td>
<td><em>[EDIT]</em><?php echo html::anchor("/contest/show/{$c['contest_id']}", $c['title']);?></td>
<td><?php echo OJ::mtime($c['end_time']);?></td>
<td><?php echo OJ::is_private($c['private']);?></td>
<td><?php echo OJ::mtime($c['end_time']);?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>