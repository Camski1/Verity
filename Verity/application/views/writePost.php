


			
			<div id="writeStory">
				<form action='http://localhost:8888/Verity/index.php/VerityMainController/uploadPost' method="post" accept-charset="utf-8" enctype="multipart/form-data">
					<label for="title">Title</label><br>
					<input type="text" name="title" placeholder="Title" required><br>

					<label for="source">Source</label><br>
					<input type="text" name="source" placeholder="Source" required><br>

					<label for="post">Post</label><br>

					<textarea name="editor1" id="editor1" rows="10" cols="80">
                	If you write an amazing post we will link to it on our social media!
            		</textarea><br>

            		<script>
		                // Replace the <textarea id="editor1"> with a CKEditor
		                // instance, using default configuration.
		                CKEDITOR.replace( 'editor1' );
            		</script>


					<label for="userfile">Image (JPG/PNG)</label>
					<input name="userfile" type="file"/><br/>

					<input type="submit" value="Post">

				</form>
			</div>