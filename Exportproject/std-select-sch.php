<?php 

require './header.php';
include '../connection.php';

$sql_school = "SELECT DISTINCT school_name FROM tbl_student";
$result_school = mysqli_query($mysqli, $sql_school);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the selected school from the dropdown
    $selectedSchool = $_POST['school'];
    
    // Save the selected school in a session to pass it to the next page
    session_start();
    
    $_SESSION['selected_school'] = $selectedSchool;

    // Redirect to the student information page (or wherever needed)
    header("Location: student-list.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select School</title>
</head>
<body>
<div class="container">
    <div class="container col-12 col-md-7 col-lg-6  mt-5">
        <div class="card shadow">
            <div class="card-header text-center bg-info text-light">
               <h6>STUDENT SCHOOL</h6>
            </div>
            <div class="card-body bg-light">
                <form action="student-list.php" method="post"> <!-- Use the correct action and POST method -->
                    <div class="form-group">
                        <label class="control-label" for="sectionschools">Select School:</label>
                        <br>
                        <div class="form-group">
                            <select class="form-control" name="school" id="school" required>
                                <!-- <option value="">Select School</option> -->
                                <?php
                            // Loop through school names and populate the dropdown
                            while ($row = mysqli_fetch_assoc($result_school)) {
                                echo '<option value="' . htmlspecialchars($row["school_name"]) . '">' . htmlspecialchars($row["school_name"]) . '</option>';
                            }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-block bg-info text-light">Fetch</button> <!-- Submit button -->
                    </div>
                </form>
                
                <div class="mt-3">
                <!-- Back buttan -->
                 <a href="index.php" class="btn btn-black btn-secondary">Back</a>
            </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
