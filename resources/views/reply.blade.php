
<?php

$data = \App\Contactus::find($id);

?>


<p><b>Name : </b> {{ $data->name }}</p>
<p><b>Email : </b> {{ $data->email }}</p>
<p><b>Message : </b> {{ $data->message }}</p>

<form action="/admin/messages/reply" method="post">
	<textarea name="message" placeholder="Please type your response..."></textarea>
	<button type="submit">Reply</button>
</form>