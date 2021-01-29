<!DOCTYPE html>
<?php include("functions.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome To Job Portal</title>
    <link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/valid.js"></script>
</head>
<body class="container bg-secondary my-2">
    <nav class="bg-white text-dark">
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact Us</a>
            <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">About Us</a>
            <a class="nav-item nav-link" id="nav-login-tab" data-toggle="tab" href="#nav-login" role="tab" aria-controls="nav-lobin" aria-selected="false">Login</a>
          </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="card my-2">
                  <div class="card-header bg-dark text-white text-center">
                      <h3>Government Jobs Portal</h3>
                  </div>
                  <div class="card-body text-center">
                      <img src="images/image.jpg" class="img-thumbnail w-100">
                      <div class="bg-dark text-white p-3">
                        <h4>Latest Job Recruiments</h4>
                      </div>
                      <div class="p-2 table table-responsive">
                        <table class="table table-hover">
                          <th>S.No</th>
                          <th>Order No & Date</th>
                          <th>Job Details</th>
                          <th>Department</th>
                          <th>Start Date</th>
                          <th>Eng Date</th>
                           <th>Website</th>
							<th>View</th>
							<th></th>
							<?php display_document(); ?>
                        </table>
                      </div>
                  </div>
                  <div class="card-footer bg-dark text-center">
                      <h5><a href="http://www.dsong.online" target="_blank">DSO</a></h5>
                  </div>
              </div>
          </div>
          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="card my-2">
                  <div class="card-header bg-dark text-white text-center">
                      <h3>Contact Us</h3>
                  </div>
                  <div class="card-body">
                    <form method="post" class="w-50 mx-auto font-weight-bold" action="get_contact.php" onsubmit="return validation(this);">
                        <div class="form-group">
                            <lable>Name :</lable>
                            <input type="text" name="txtname" placeholder="Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable>Email :</lable>
                            <input type="text" name="txtemail" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable>Mobile No :</lable>
                            <input type="text" name="txtmobile" placeholder="Monile No" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable>Subject :</lable>
                            <input type="text" name="txtsubject" placeholder="Subjects" class="form-control">
                        </div><div class="form-group">
                            <lable>Subject in Details : (min 50 words)</lable>
                            <textarea name="txtdesc" rows="5" cols="20" class="form-control"></textarea>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                  </div>
                  <div class="card-footer bg-dark text-center">
                      <h5><a href="http://www.dsong.online" target="_blank">DSO</a></h5>
                  </div>
              </div>
        
          </div>
          <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
              <div class="card my-2">
                  <div class="card-header bg-dark text-white text-center">
                      <h3>About Us</h3>
                  </div>
                  <div class="card-body">
                      <p class="font-weight-bold display-4">ViSion</p>
                      <p class="mx-5 text-justify"> I, Dileep Kumar Patel, According to the modern day, we want to make our career in IT Sectors. But in this period, not everyone can see the problems over all IT Sectors. But the changing ages of time leave behind with current day. Also after understanding in IT Sectors, you are not able to get a appropriated post</p>
                      <p class="font-weight-bold display-4">Achivement of Careers</p>
<p class="mx-5 text-justify">District Transport Office Palamu- Experience As the Post of IT Assistant at(Road Safety Cell- Palamu) in the projects run by the Jharkhand.Java International Organization Palamu- Experience As the Post of Field Officer as franchisee of your organization for student collecting franchisee form of all over jharkhand. </p>
                      <div class="font-weight-bold text-right mr-5">
                        
                            Dileep Kumar Patel<br>
                            Developer<br>
                            8409900949<br>
                            Email-patel@dsong.online
                        
                      </div>
                  </div>
                  <div class="card-footer bg-dark text-center">
                      <h5><a href="http://www.dsong.online" target="_blank">DSO</a></h5>
                  </div>
              </div>
              
              
          </div>
          <div class="tab-pane fade" id="nav-login" role="tabpanel" aria-labelledby="nav-login-tab">
            <div class="card my-2">
                  <div class="card-header bg-dark text-white text-center">
                      <h3>Login Area</h3>
                  </div>
                  <div class="card-body">
                    <form method="post" class="w-50 mx-auto font-weight-bold" action="get_login.php">
                        <div class="form-group">
                            <lable>Email :</lable>
                            <input type="text" name="txtemail" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable>Password :</lable>
                            <input type="password" name="txtpass" placeholder="Password" class="form-control">
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-success">Login</button>
                        </div>
                    </form>
                  </div>
                  <div class="card-footer bg-dark text-center">
                      <h5><a href="http://www.dsong.online" target="_blank">DSO</a></h5>
                  </div>
              </div>
            
         </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
















































