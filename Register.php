<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>HOMEPAGE</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TIC TAC TOE</a>
    </div>
  </div>
</nav>
<div class="container text-dark">
<div class="row">
<div class="col-lg-6 my-6 bg-success">
  <h3 align="center">Register Here</h3>
    <form action="dbinsert.php" method="post" >
      <label for="name" class="form-label">Name</label>
      <div class="row mb-3">
        <div class="col my-3">
          <input type="text" name="fname" class="form-control" placeholder="First name" aria-label="First name" required>
        </div>
        <div class="col my-3">
          <input type="text" name="lname" class="form-control" placeholder="Last name" aria-label="Last name" required>
        </div>
      </div>
      <div class="col-6 my-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter a valid email ID" required>
    
        <div class="row g-3 align-items-center mt-3">
        <div class="col-auto">
          <label for="password" class="col-form-label">Enter your Password</label>
        </div>
      <div class="col-auto">
        <input type="password" name="password" id="password" class="form-control" aria-describedby="passwordHelpInline" placeholder="Must be 8-20 characters" required>
      </div>
      <div class="col-auto">
        <span id="passwordHelpInline" class="form-text">
        </span>
      </div>
      <div class="row g-3 align-items-center">
        <div class="col-auto">
          <label for="password" class="col-form-label">Re-enter Password</label>
      </div>
        <div class="col-auto">
          <input type="password" name="Password" id="Password" class="form-control" aria-describedby="passwordHelpInline" placeholder="Same as above" required>
        </div>
      </div>
      <div class="mt-3">Gender</div>
      <div class="form-check-inline">
        <input class="form-check-input" type="radio" name="gender" value="male">
        <label class="form-check-label" for="male">Male</label>
      </div>
      <div class="form-check-inline">
        <input class="form-check-input" type="radio" name="gender" value="female">
        <label class="form-check-label" for="female">Female</label>
      </div>
      <div class="form-check-inline">
        <input class="form-check-input" type="radio" name="gender" value="other">
        <label class="form-check-label" for="other">Other</label>
      </div>
      <div>
        <button type="submit" class="btn btn-primary bg-white text-dark my-3">Sign In</button>
      </div>
    </form>
</div>
</div>
</div>

<div class="col-lg-6 my-3 ">
  <h3 align="center"> Login </h3>

  <form action="validation.php" method="post">

  <div class="col-6 my-6">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" name="Email" aria-describedby="emailHelp" placeholder="Enter a valid email ID" required>
    
        <div class="row g-3 align-items-center my-6">
        <div class="col-auto">
          <label for="password" class="col-form-label">Enter your Password</label>
        </div>
        <div class="col-auto">
          <input type="password" name="Pass" id="Pass" class="form-control" aria-describedby="passwordHelpInline"  required>
        </div>
        <div class="col-auto">
          <span id="passwordHelpInline" class="form-text">
          </span>
        </div>
        <button type="submit" class="btn btn-primary bg-success text-dark my-3">Login</button>
    
  </form>
</div>
</body>
</html>

