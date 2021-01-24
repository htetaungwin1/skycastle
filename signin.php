<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sky Castle</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <table class="table table-bordered">
      <tbody>
        <tr>
          <td>admin</td>
          <td>1111</td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>teacher</td>
          <td>2222</td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>student</td>
          <td>3333</td>
        </tr>
      </tbody>
    </table>
    <h2 class="text-primary text-center mt-3 mb-5">Sign In</h2>
      <div class="row mt-5">
        <div class="text-center text-primary col-md-6">Image or something</div>
        <div class="bg-warning rounded py-5 px-5 col-md-6">
                <form action="signincontrol.php"method="post">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input name="email" required type="text" class="w-50 form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input name="pass" required type="password" class="w-50 form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <a href="register.html" class="text-muted" style="text-decoration: none;">Creat Account</a>
              </form>
        </div>
      </div>
       


    <!-- <form action="signin.php"method="post">

    <h1 class="mb-3 text-primary text-center">Sign In</h1>
    <input name="input1" type="text" class="mb-3 form-control">
    <input name="input2" type="text" class="mb-3 form-control">
    <input name="input3" type="text" class="mb-3 form-control">
    <button type="submit" name="submit" class="btn btn-success mb-3 ">Continue</button>
    

  </form> -->
  </div>

   

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
