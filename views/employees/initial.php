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
            <a href="?controler=employees&action=delete&id=<?php echo $employee->id ?>" type="button" class="btn btn-danger">Delete</a>
          </div>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>

<a class="btn btn-success" href="?controler=employees&action=create" role="button">ADD NEW</a>
