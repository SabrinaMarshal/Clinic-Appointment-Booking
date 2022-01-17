<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "clinic") or die("Unable to connect");
$account_id=1;
$sql1="select * from users where account_id='$account_id'";
$res=mysqli_query($db, $sql1);
while ( $result = $res->fetch_assoc() ) {
	$username=$result['username'];
	$name=$result['name'];
	$email=$result['email'];
	$mobile=$result['mobile'];
}

?>
<html>
<head>
<title>Profile</title>
<style>

*,
*::before,
*::after {
  box-sizing: border-box;
}

figcaption,
footer,
header,
main,
section {
  display: block;
}

body {
  font-family: Open Sans, sans-serif;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  margin: 0;
  text-align: left;
  color: #525f7f;
  background-color: #f8f9fe;
}


input,
button,
textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
  margin: 0;
}

button,
input {
  overflow: visible;
}


hr {
  margin-top: 2rem;
  margin-bottom: 2rem;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, .1);
}


.col-4,
.col-8,
.col,
.col-md-10,
.col-md-12,
.col-lg-3,
.col-lg-4,
.col-lg-6,
.col-lg-7,
.col-xl-4,
.col-xl-6,
.col-xl-8 {
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}



@media (min-width: 768px) {

  .col-md-10 {
    max-width: 83.33333%;
    flex: 0 0 83.33333%;
  }

  .col-md-12 {
    max-width: 100%;
    flex: 0 0 100%;
  }
}



@media (min-width: 1200px) {
	
  .col-xl-6 {
    max-width: 50%;
    flex: 0 0 50%;
  }

  .col-xl-8 {
    max-width: 66.66667%;
    flex: 0 0 66.66667%;
  }

  .order-xl-1 {
    order: 1;
  }
}

.form-control {
  font-size: 1rem;
  line-height: 1.5;
  display: block;
  width: 100%;
  height: calc(2.75rem + 2px);
  padding: .625rem .75rem;
  color: #8898aa;
  border: 1px solid #cad1d7;
  border-radius: .375rem;
  background-color: #fff;
  background-clip: padding-box;
  box-shadow: none;
}

.form-group {
  margin-bottom: 1.5rem;
}

.btn {
  font-size: 1rem;
  font-weight: 600;
  line-height: 1.5;
  display: inline-block;
  padding: .625rem 1.25rem;
  text-align: center;
  vertical-align: middle;
  border: 1px solid transparent;
  border-radius: .375rem;
  color: #fff;
  border-color: #11cdef;
  background-color: #11cdef;
  box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
  text-decoration:none;
}


.card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  border: 1px solid rgba(0, 0, 0, .05);
  border-radius: .375rem;
  background-color: #fff;
  background-clip: border-box;
}

.card-body {
  padding: 1.5rem;
  flex: 1 1 auto;
}

.d-none {
  display: none !important;
}

.d-flex {
  display: flex !important;
}

@media (min-width: 768px) {

  .d-md-flex {
    display: flex !important;
  }
}

@media (min-width: 992px) {

  .d-lg-inline-block {
    display: inline-block !important;
  }

  .d-lg-block {
    display: block !important;
  }
}

.align-items-center {
  align-items: center !important;
}

}

.mr-4 {
  margin-right: 1.5rem !important;
}


.mb-5 {
  margin-bottom: 3rem !important;
}

.mt--7 {
  margin-top: -6rem !important;
}


.text-white {
  color: #fff !important;
}


.bg-gradient-default {
  background: linear-gradient(87deg, #172b4d 0, #1a174d 100%) !important;
}

.btn {
  font-size: .875rem;
  position: relative;
  transition: all .15s ease;
  letter-spacing: .025em;
  text-transform: none;
  will-change: transform;
}



@media (min-width: 768px) {
  .main-content .container-fluid {
    padding-right: 39px !important;
    padding-left: 39px !important;
  }
}

.form-control-alternative {
  transition: box-shadow .15s ease;
  border: 0;
  box-shadow: 0 1px 3px rgba(50, 50, 93, .15), 0 1px 0 rgba(0, 0, 0, .02);
}

.header {
  position: relative;
}

.mask {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transition: all .15s ease;
}

.heading {
  font-size: .95rem;
  font-weight: 600;
  letter-spacing: .025em;
  text-transform: uppercase;
}

.heading-small {
  font-size: .75rem;
  padding-top: .25rem;
  padding-bottom: .25rem;
  letter-spacing: .04em;
  text-transform: uppercase;
}

table {
  border-collapse: collapse;
  width: 100%;
  text-align:center;
}

table, th, td {
  border: 1px solid gray;
  padding: 5px;
}



</style>
</head>
<body>
  <div class="main-content">
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-size: cover; background-position: center top;">
      <span class="mask bg-gradient-default opacity-8"></span>
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white"><?php echo "Hello ".$name;?></h1>
            <p class="text-white mt-0 mb-5">This is your profile page.<br>You can see and edit your profile information and view appointment details</p>
            <a href="editprofile.php" class="btn">Edit profile</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Username</label><br>
						<?php echo $username;?>
                      </div>
                    </div>
					<div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">Name</label><br>
						<?php echo $name;?>
						</div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label><br>
						<?php echo $email;?>
                      </div>
                    </div>
					<div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Mobile</label><br>
						<?php echo $mobile;?>
                      </div>
                    </div>
                </div
                <h6 class="heading-small text-muted mb-4">Appointments</h6>
                <div class="pl-lg-4">
                  <div class="form-group focused">
                    <table>
					<tr>
					<th>Patient name</th>
					<th>Patient age</th>
					<th>Patient gender</th>
					<th>Doctor</th>
					<th>Timings</th>
					<th>Symptoms</th>
					<th>Status</th>
					</tr>
					<?php
					$sql2="select * from appointment where account_id='$account_id'";
					$res=mysqli_query($db, $sql2);
					while ( $result = $res->fetch_assoc() ) {
						$pname=$result['patient_name'];
						$age=$result['age'];
						$gender=$result['gender'];
						$doctor=$result['doctor_name'];
						$timings=$result['timings'];
						$symptoms=$result['symptoms'];
						$status=$result['status'];?>
					<tr>
					<td><?php echo $pname;?></td>
					<td><?php echo $age;?></td>
					<td><?php echo $gender;?></td>
					<td><?php echo $doctor;?></td>
					<td><?php echo $timings;?></td>
					<td><?php echo $symptoms;?></td>
					<td><?php echo $status;?></td>
<?php }?>
					</table>
                  </div>
                </div>
              </form>
            </div>
			<button style="width:200px;margin:30px;" name="submit">Cancel appointment</button><br>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>