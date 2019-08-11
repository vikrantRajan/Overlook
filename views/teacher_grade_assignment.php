<div class="container">
  <?php
  if(isset($_GET['editsuccess'])){
    if($_GET['editsuccess'] == true) {
      echo "<h1 class='mt-5 p-5 bg-success'>The assignment has been graded</h1>";
   } 
  }
  foreach($this->getStudentAssignment as $student_assignment){
   
    ?>
      <h2 class="pt-5"><?= $student_assignment['assignment_name']; ?></h2>
      <form action="index.php?controller=Assignments&action=createGrade&student_assignment_id=<?= $student_assignment['student_assignment_id']; ?>" method="post">
        <div class="col pt-5">
          <label>Assignment Name</label>  
          <input name="assignment_name" value="<?= $student_assignment['assignment_name']; ?>" type="text" class="form-control" placeholder="Assignment name" required READONLY>
        </div>
        <div class="col pt-5">
          <label>Student First Name</label>  
          <input name="user_first_name" value="<?= $student_assignment['user_first_name']; ?>" type="text" class="form-control" placeholder="Assignment name" required READONLY>
        </div>
        <div class="col pt-5">
          <label>Student Last Name</label>  
          <input name="user_last_name" value="<?= $student_assignment['user_last_name']; ?>" type="text" class="form-control" placeholder="Assignment name" required READONLY>
        </div>
        <div class="col pt-5">
          <label>Grade</label>  
          <input name="student_assignment_marks" value="<?= $student_assignment['student_assignment_marks']; ?>" type="text" class="form-control" placeholder="0-100" required >
        </div>
       
        <div class="col pt-5">
          <label>Comments</label>  
          <textarea name="student_assignment_comments" type="text" class="form-control" placeholder="What are your thoughts?" required><?= $student_assignment['student_assignment_comments']; ?></textarea>
        </div>
        <div class="col pt-5">
          <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
        </div>
      </form>
      <?php
  }
  ?>
</div>