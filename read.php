<?php 
    include 'dbConnection.php';
    include 'template.php';

    $pdo = pdo_connect_mysql();

    $page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

    $records_per_page = 5;

    // Prepare the SQL statement and get records from our contacts table, LIMIT will determine the page
    $stmt = $pdo->prepare('SELECT * FROM students ORDER BY id LIMIT :current_page, :record_per_page');
    $stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
    $stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
    $stmt->execute();
    // Fetch the records so we can display them in our template.
    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Get the total number of contacts, this is so we can determine whether there should be a next and previous button
    $num_students = $pdo->query('SELECT COUNT(*) FROM students')->fetchColumn();
?>

<?=template_header()?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Middle Name</th>
      <th scope="col">ID-Number</th>
      <th scope="col">Birthdate</th>
      <th scope="col">Email</th>
      <th scope="col">Course</th>
      <th scope="col">Address</th>
      <th scope="col">Guardian</th>
      <th scope="col">Guardian Contact Number</th>
      <th scope="col">Relationship to Guardian</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($students as $student): ?>
    <tr>
      <th scope="row"><?=$student['id']?></th>
      <td><?=$student['firstName']?></td>
      <td><?=$student['lastName']?></td>
      <td><?=$student['middleName']?></td>
      <td><?=$student['idNum']?></td>
      <td><?=$student['birthdate']?></td>
      <td><?=$student['email']?></td>
      <td><?=$student['course']?></td>
      <td><?=$student['address']?></td>
      <td><?=$student['guardianName']?></td>
      <td><?=$student['contactNumber']?></td>
      <td><?=$student['relationshipToGuardian']?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?=template_footer()?>