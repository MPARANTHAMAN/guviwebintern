<?php 
	include('functions.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>

<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="scss/style.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
			<img src="images/user_profile.svg"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>
		<!-- update-->
         <div class="container update">
                        <form method="POST" class="modify" >
                                        <div class="form-group">
                                          <label for="email">Email</label>
                                          <input type="email" class="form-control" id="emailc" name="emailc" aria-describedby="emailHelp" placeholder="Email" required="">
                                        </div>
                                        <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control" id="namec" name="namec" placeholder="Name" required="">
                                        </div>
                                        <div class="form-group">
                                                <label for="dob">DOB</label>
                                                <input type="date" class="form-control" id="dobc" name="dobc" placeholder="DOB" required="">
                                        </div>
                                        <div class="form-group">
                                                <label for="qualification">Qualification</label>
                                                <input type="text" class="form-control" id="qualificationc" name="qualificationc" placeholder="Qualification" required="">
                                        </div>
                                        <div class="form-group">
                                                <label for="number">Mobile Number</label>
                                                <input type="number" class="form-control" id="numberc"  name="numberc" placeholder="Mobile Number" required="">
                                        </div>
            
                                        <button type="submit" id="update" class="btn btn-primary">update</button><br>
                                        
                                      </form>
        </div>
        <div class="table2 table-responsive">
                <table id="table" class="table table-striped">
                      <tbody id="mydata">
                          <tr>
                            <th scope="row">Name</th>
                            <td id="rname">[[name]]</td>
                            
                          </tr>
                          <tr>
                            <th scope="row">Email</th>
                            <td id="remail">[[email]]</td>
                           
                          </tr>
                          <tr>
                            <th scope="row">Date-Of-Birth</th>
                            <td id="rdob">[[dob]]</td>
                          
                          </tr>
                          <tr>
                                <th scope="row">Qualification</th>
                                <td id="rqualification">[[qualification]]</td>
                               
                              </tr>
                              <tr>
                                <th scope="row">mobile</th>
                                <td id="rmobile">[[number]]</td>
                               
                              </tr>
                        </tbody>
                      </table>
                      <br>
                      <button type="button" id="edit" class="btn btn-dark">Edit</button><br>
        </div>
        
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="script.js"></script>
        <script src="js/jquery.miranda.js"></script>		

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>