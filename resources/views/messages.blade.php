
<?php

$data = \App\Contactus::all();

?>
<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Email</th>
			<th>Message</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($data as $k => $v) {
		?>

		<tr>
			<td>{{ $k+1 }}</td>
			<td>{{ $v->name }}</td>
			<td>{{ $v->email }}</td>
			<td>{{ $v->message }}</td>
			<td><a href="/admin/messages/reply/{{$v->id}}">reply</a></td>
		</tr>

		<?php
		}
		?>
	</tbody>
</table>
