<?php
use Phppot\Complaint;


    require_once __DIR__ . '/Model/Complaint.php';
    $complaint = new Complaint();
    $complaintRecords = $complaint->getAllComplaints();

?>

    <?php
    include('inc/header.php');
    ?>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
              
                <h2 class="pt-5">All Register Complaints</h2>
               <table class="table mt-4">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($complaintRecords as $row ) { ?>
                      <tr>
                      <th scope="row"><?php echo $row['id'] ?></th>
                      <td><?php echo $row['name'] ?></td>
                      <td><?php echo $row['email'] ?></td>
                      <td><?php echo $row['status'] ?></td>
                      <td>
                        <a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a>
                        <a href="?delete=<?php echo $row['id'] ?>">Delete</a>
                      </td>
                    </tr> 
                    <?php }
                    ?>
                   
                    
                  </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <?php include('inc/footer.php'); ?>