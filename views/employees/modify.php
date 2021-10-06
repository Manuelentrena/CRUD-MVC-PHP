<div class="card">
  <div class="card-header">
    ADD EMPLOYEE
  </div>
  <div class="card-body">
    <!-- FORM -->
    <form action="" method="post">
      <!-- INPUT ID -->
      <div class="mb-3">
        <label for="id" class="form-label">Id:</label>
        <input type="text"
          class="form-control" name="id" id="id" aria-describedby="helpId" value="<?php echo $employee->id ?>" disabled>
      </div>
      <!-- INPUT NAME -->
      <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text"
          class="form-control" name="name" id="name" aria-describedby="helpId" value="<?php echo $employee->name ?>">
      </div>
      <!-- INPUT EMAIL -->
      <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" value="<?php echo $employee->email ?>">
      </div>
      <!-- SUBMIT -->
      <button type="submit" class="btn btn-success" value="Add Employee">MODIFY EMPLOYEE</button>
    </form>
  </div>
</div>