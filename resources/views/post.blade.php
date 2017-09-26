
<form enctype="multipart/form-data" action="/post" method="post">
	<div>
		<input type="file" name="image">
	</div>
	<!-- lama bt3mel el type file bygebllak el bta3a bta3et browse file dy 3shan t5tar mnha el file aw el image bta3tak-->
	<!-- el forms by default hya btb3at text bs zy el firstname, email, password enma law 3ayez ab3at file lazem a3mel 7aga keda .. el enctype da 3shan y5ally el form t2bal enha tb3at files, law ma 3amltsh da el file mch hytbe3et-->
	<div>
		<textarea name="content" placeholder="what's on your mind ..."></textarea>
	</div>

	{{ csrf_field() }}

	<button type="submit">Post</button>
</form>
