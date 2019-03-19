<?php include_once("header.php");?>
<br>
<br>
	<div class="container">
		<div class="card">
			<div class="card-body">
				<form action="POST">
					<div class="form-group">
						<label for="">Name</label>
						<input type="text" name="name" class="form-control">
					</div>
					<label for="">Gender</label>
				<select id="gender" name="gender" class="form-control">
					<option value="MALE">Male</option>
					<option value="FEMALE">Female</option>
    			</select>
					<div class="form-group">
						<label for="">Province</label>
							<input type="text" name="province" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="text" name="email" class="form-control">
					</div>
					<div class="form-group">
                             <button  type="submit" class="btn-primary btn-sm flaot-right" name="btn">Send</button>
                    </div>
					
				</form>
			</div>
		</div>
	</div>

<?php include_once("footer.php");?>