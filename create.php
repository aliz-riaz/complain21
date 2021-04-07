<?php
use Phppot\Complaint;

if (! empty($_POST)) {
    require_once __DIR__ . '/Model/Complaint.php';
    $complaint = new Complaint();
    $complaintRegister = $complaint->registerComplaint();
}
?>

    <?php
    include('inc/header.php');
    ?>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
              <?php
                 if (! empty($complaintRegister["status"])) {
                    if ($complaintRegister["status"] == "error") {
                      echo '<div class="alert alert-danger "><strong>Danger!</strong> '. $complaintRegister["message"] .'</div>';
                    }
                    if ($complaintRegister["status"] == "success") {
                      echo '<div class="alert alert-success"><strong>Success!</strong> '. $complaintRegister["message"] .'</div>';
                    }  
                 }
               ?>
                <h2>Create Complaint</h2>
                <form action="" class="w-100 d-block" method="POST">
                  <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email" id="email">
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" name="phone" placeholder="Enter Name" id="name">
                  </div>
                  <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" name="address"  placeholder="Enter Adddress" id="address">
                  </div>
                  <div class="form-group">
                    <label for="complaint">Complaint:</label>
                    <textarea  class="form-control" name="complaint" placeholder="Enter Complaint" id="complaint"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
    <?php include('inc/footer.php'); ?>