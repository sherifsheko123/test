

<form method="post" action="/contactus">

<!--
	lazem hena a3mel field esmo _token w el value bta3to btb2a 7aga saved f el session
	w 3shan a3melo b3lm :
	w byb2a hidden
	csrf_token() : el function dy btrg3lak 2emet el token elly mtsyaef f el session 3shan el request lama ytb3t yb2a secure

	w dy el tare2a elly byt3mel beha aw enk tsta5dm el function dy csrf_field() w hya ht3mellak el input kolo
-->

	<input type="hidden" name="_token" value="{{ csrf_token() }}">



	<div>
		<input type="text" name="name" placeholder="Please type your name..">
	</div>
	<div>
		<input type="email" name="email" placeholder="Please type your email..">
	</div>
	<div>
		<textarea name="message" placeholder="Please type your message.."></textarea>
	</div>


	<button type="submit">Send</button>
</form>

