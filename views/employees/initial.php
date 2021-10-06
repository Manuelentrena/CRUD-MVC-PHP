<div class="card">
  <div class="card-header">
    EMPLOYEES
    
  </div>
  <div class="card-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>NAME</th>
          <th>EMAIL</th>
          <th>ACTIONS</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($Employees as $employee){ ?>
          <tr>
            <td><?php echo $employee->id ?></td>
            <td><?php echo $employee->name ?></td>
            <td><?php echo $employee->email ?></td>
            <td>
              <div class="btn-group" role="group" aria-label="">
                <a href="?controler=employees&action=modify&id=<?php echo $employee->id ?>" type="button" class="btn btn-info">Edit</a>
                <!-- Button delete modal -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modelId">
                  Delete
                </button>
                <!-- MODAL DELETE -->
                <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Do you want to delete the employee?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="?controler=employees&action=delete&id=<?php echo $employee->id ?>" type="button" class="btn btn-danger">Delete</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END MODAL -->
              </div>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <a class="btn btn-success" href="?controler=employees&action=create" role="button">ADD NEW</a>
  </div>
  
</div>




