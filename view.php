<?php
use Phppot\Complaint;

if (! empty($_GET['id'])) {
    $id = $_GET['id'];
    require_once __DIR__ . '/Model/Complaint.php';
    $complaint = new Complaint();
    $row = $complaint->getComplaint($id);
    $statusArr = ['pending', 'completed'];

    if(! empty($_POST['status'])) {
      $status = $_POST['status'];
      $updateComplaint = $complaint->updateComplaint($id, $status);
    }
}
// print_r($row);
?>

    <?php
    include('inc/header.php');
    ?>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mt-5">
              <?php
                 if (! empty($updateComplaint["status"])) {
                    if ($updateComplaint["status"] == "error") {
                      echo '<div class="alert alert-danger "><strong>Danger!</strong> '. $updateComplaint["message"] .'</div>';
                    }
                    if ($updateComplaint["status"] == "success") {
                      echo '<div class="alert alert-success"><strong>Success!</strong> '. $updateComplaint["message"] .'</div>';
                    }  
                 }
               ?>
                <h2 class="pt-3">Complaint</h2>
                <table class="table mt-4" style="border:1px solid #ccc;">
                  <tr>
                    <td><strong>Name</strong></td>
                    <td><?php echo $row[0]['name'] ?></td>
                  </tr>
                  <tr>
                    <td><strong>email</strong></td>
                    <td><?php echo $row[0]['email'] ?></td>
                  </tr>
                  <tr>
                    <td><strong>Address</strong></td>
                    <td><?php echo $row[0]['address'] ?></td>
                  </tr>
                  <tr>
                    <td><strong>Complaint</strong></td>
                    <td><?php echo $row[0]['complaint'] ?></td>
                  </tr>
                  <tr> 
                    <td><strong>Complaint Status</strong></td>
                    <td>
                          <form method="post" class="d-flex align-items-center">
                            <select name="status" class="custom-select mr-2">
                              <?php
                                foreach ($statusArr as $value) {
                                  if($row[0]['status'] == $value) {
                                    echo '<option value="'.$value.'" selected>' . $value . '</option>';
                                  }
                                  else {
                                     echo '<option value="'.$value.'">' . $value . '</option>';
                                  }
                                 
                                }
                              ?>
                            </select>
                            <div class="text-right">
                              <button type="submit" class="btn btn-default">Change Status</button>
                            </div>
                          </form>
                          
                          <?php //echo $row[0]['status'] ?>
                        
                      </td>
                  </tr>
                  <tr>
                    <td><strong>Date</strong></td>
                    <td><?php echo $row[0]['datetime'] ?></td>
                  </tr>
                </table>
            </div>
        </div>
    </div>
    
    <?php include('inc/footer.php'); ?>