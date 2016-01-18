  <html>
  <center>
  <p></p>
   <p></p>
    <form method="post" action="show.php">

	<table border=0>
		<tr>
			<td>First Name</td>
			<td><input type="text" name="firstname" /></td>
		</tr>

		<tr>
			<td>Last Name</td>
			<td><input type="text" name="lastname" /></td>
		</tr>

		<tr>
			<td>Gender</td>
			<td>
				<input type="radio" name="gender" value="Male" checked />Male
				<input type="radio" name="gender" value="Female" />Female
			</td>
		</tr>
		<tr>
			<td>Date of Birth</td>
			<td>
				<select name="bday">
				<? for($i=1; $i<=31; $i++){ ?>
					<option value="<?= $i ?>"><?= $i ?></option>
				<? } ?>
				</select>
				/
				<select name="bmonth">
					<option value="1">Jan</option>
					<option value="2">Feb</option>
					<option value="3">Mar</option>
					<option value="4">Apr</option>
					<option value="5">May</option>
					<option value="6">Jun</option>
					<option value="7">Jul</option>
					<option value="8">Aug</option>
					<option value="9">Sep</option>
					<option value="10">Oct</option>
					<option value="11">Nov</option>
					<option value="12">Dec</option>
				</select>
				/	
				<select name="byear">
				<? for($i=1950; $i<=2014; $i++){ ?>
					<option value="<?= $i ?>"><?= $i ?></option>
				<? } ?>
				</select>


			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" /></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><textarea rows=4 name="address"></textarea></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" /></td>
		</tr>
		<tr>
			<td>News Letter</td>
			<td><input type="checkbox" name="newsletter" /></td>
		</tr>
		<tr align="center">
			<td colspan=2>
				<input type="submit" value="Submit" />
				<input type="reset" value="Reset" />
			</td>
		</tr>		

	</table>
</form>
  </center>
  </html>