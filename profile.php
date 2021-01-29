<?php 
session_start();
include('functions.php');
if(isset($_SESSION['email']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome To Job Portail</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="container bg-secondary my-2">
    <nav class="bg-white text-dark">
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Documents Uploading</a>
            <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">About Us</a>
            <a class="nav-item nav-link" id="nav-login-tab" data-toggle="tab" href="#nav-login" role="tab" aria-controls="nav-lobin" aria-selected="false">Logout</a>
          </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="card my-2">
                  <div class="card-header bg-dark text-white text-center">
                      <h3>Government Jobs Portal-Palamu</h3>
                  </div>
                  <div class="card-body text-center">
                      <h5 class="text-right mr-2">User:&nbsp;&nbsp;<?php echo @$_SESSION['email']; ?></h5>
                      <div class="bg-dark text-white p-3">
                        <h4>Latest Job Recruiments</h4>
                      </div>
                      <div class="p-2 table table-responsive">
                        <table class="table table-hover">
						<tr>
							  <th>S.No</th>
							  <th>Order No & Date</th>
							  <th>Job Details</th>
							  <th>Department</th>
							  <th>Start Date</th>
							  <th>Eng Date</th>
							  <th>Website</th>
							  <th>View</th>
							  <th>Delete</th>
						</tr>
							<?php display_document();?>
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
                      <h3>Document's Uploading Area</h3>
                  </div>
                  <div class="card-body">
                    <form method="post" class="w-50 mx-auto font-weight-bold" action="check_upload.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <lable>Email :</lable>
                            <input type="text" name="txtemail" readonly class="form-control"value="<?php echo @$_SESSION['email']; ?>">
                        </div>
                        <div class="form-group">
                            <lable>Job Details :</lable>
                            <textarea name="txtjobdetail" rows="5"cols="20" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <lable>Order No & Dated :</lable>
                            <input type="text" name="txtorder_date" placeholder="Order & Dated" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable>Department :</lable>
                            <input type="text" name="txtdepartment" placeholder="Department" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable>Start Date :</lable>
                            <input type="text" name="start_date" placeholder="Start Date" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable>End Date :</lable>
                            <input type="text" name="End_date" placeholder="End Date" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable>Websites :</lable>
                            <input type="text" name="txt_website" placeholder="Website" class="form-control">
                        </div>
                        <div class="custom-file">
                            <lable>Select Files from Computer :</lable>
                            <input type="file" name="doc_name" class="custom-file-input">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-primary">Upload</button>
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
                      
                  </div>
                  <div class="card-footer bg-dark text-center">
                      <h5><a href="http://www.dsong.online" target="_blank">DSO</a></h5>
                  </div>
              </div>
              
              
          </div>
          <div class="tab-pane fade" id="nav-login" role="tabpanel" aria-labelledby="nav-login-tab">
            <div class="card my-2">
                  <div class="card-header bg-dark text-white text-center">
                      <h3>LogOut</h3>
                  </div>
                  <div class="card-body">
                    <a href="logout.php?email=<?php echo $_SESSION['email'];?>" class="btn btn-primary" name="loout">Click To Logout</a>
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
<?php 
}
else{
    header("location:index.php");
}

?>
















































