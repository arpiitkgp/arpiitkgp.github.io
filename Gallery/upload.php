<h5>Upload Your Work</h5>
<br><br>

<script
		src="https://code.jquery.com/jquery-3.4.1.js"
		integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
		crossorigin="anonymous"></script>
	<script>
		function SubForm (){
			$.ajax({
				url:"https://api.apispreadsheets.com/data/i5rko5AvuDIU8hzi/",
				type:"post",
				data:$("#myForm").serializeArray(),
				success: function(){
					alert("Data Submitted :)")
				},
				error: function(){
					alert("There was an error :(")
				}
			});
		}
	</script>

	<form id="myForm">
		<label  style="color: black;" >Name</label>
		<input name="name" />
		<br/>
		<label  style="color: black;" >Roll No.</label>
		<input name="roll" />
		<br/>
		<label  style="color: black;" >Email id</label>
		<input name="email" />
		<br/>
		<label  style="color: black;" >Drive link</label>
		<input name="link1" />
		<br/>
		<label  style="color: black;" >Description</label>
		<input name="description" />
		<br/>
	</form>
	<button onclick='SubForm()' class="btn btn-primary" >Send</button>
