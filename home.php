<?php
use Phppot\Complaint;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/Complaint.php';
    $complaint = new Complaint();
    $complaintResult = $complaint->registerComplaint();
}
?>

    <?php
    include('inc/header.php');
    ?>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Create Complaint</h2>
                <form action="/" class="w-100 d-block">
                  <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" placeholder="Enter Name" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" placeholder="Enter Email" id="email">
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" placeholder="Enter Name" id="name">
                  </div>
                  <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" placeholder="Enter Adddress" id="address">
                  </div>
                  <div class="form-group">
                    <label for="complaint">Complaint:</label>
                    <input type="text" class="form-control" placeholder="Enter Complaint" id="complaint">
                  </div>
                  <button type="submit" class="btn btn-primary" name="complaint" value="complaint">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
    <?php include('inc/footer.php'); ?>