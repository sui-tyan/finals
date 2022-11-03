

    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css" />
        <title>Student ID</title>
      </head>

    <body>
    <div class="container">
    <main class="bttm">
      <div class="py-5 text-center">
        <h2>Student ID System</h2>
        <p class="lead">Please enter your information.</p>
      </div>

      <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
          <div class="container">
            <img src="logo-placeholder-image.png" class="img-thumbnail" alt="">
          </div>
        </div>
        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3">Information Form</h4>
          <form action="form-handle.php" method="POST" class="needs-validation" novalidate>
            <div class="row g-3">
              <div class="col-sm-4">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="" required>
              </div>

              <div class="col-sm-4">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="" required>
              </div>

              <div class="col-sm-4">
                <label for="middleName" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="middleName" name="middleName" value="" required>
              </div>

              <div class="col-sm-6">
                <label for="idnumber" class="form-label">ID-Number</label>
                <div class="input-group has-validation">
                  <input type="text" class="form-control" id="username" name="idNum" placeholder="00-0000-000" required>
                </div>
              </div>

              <div class="col-sm-6">
                <label for="birthdate" class="form-label">Birthdate</label>
                <input type="date" class="form-control" name="birthdate" name="birthdate" id="birthdate" required>
              </div>

              <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
              </div>

              <div class="col-12">
                <label for="course" class="form-label">Course</label>
                <select class="form-select" id="course" name="course" required>
                  <option value="">Choose...</option>
                  <option>BACHELOR  OF INFORMATION TECHNOLOGY</option>
                  <option>BACHELOR  OF COMPUTER SCIENCE</option>
                  <option>BACHELOR  OF DATA ANALYTICS</option>
                </select>
              </div>

              <div class="col-12">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
              </div>

              <div class="col-sm-4">
                <label for="guardian" class="form-label">Guardian Name</label>
                <input type="text" class="form-control">
              </div>

              <div class="col-sm-4">
                <label for="guardianContact" class="form-label">Contact Number</label>
                <input type="text" class="form-control" name="" id="">
              </div>

              <div class="col-sm-4">
                <label for="guardianRelationship" class="form-label">Relationship to Guardian</label>
                <select class="form-select" id="guardianRelationship" required>
                  <option value="">Choose...</option>
                  <option>Mother</option>
                  <option>Father</option>
                  <option>Brother</option>
                  <option>Sister</option>
                  <option>Friend</option>
                </select>
              </div>

            </div>


            <hr class="my-4">

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="same-address">
              <label class="form-check-label" for="same-address">Agree to the <a href="">Terms and Condition</a></label>
            </div>

            <hr class="my-4">

            <button class="btn btn-success btn-md" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </main>
  </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
  </html>