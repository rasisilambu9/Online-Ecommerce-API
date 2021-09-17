<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<div class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    
    <title>Sign Up</title>

<div class="container">
  <form class="myForm" method="post" action="signup">
      @csrf
    <div class="form-group">
      <label for="email">Email</label>
      <input class="form-control input-lg" type="email" name="email" id="email" placeholder="email" />
    </div>
    <div class="form-group">
      <label for="email">Name</label>
      <input class="form-control input-lg" type="text" name="name" id="name" placeholder="Name" />
    </div>
    <div class="form-group">
      <label for="email">Mobile</label>
      <input class="form-control input-lg" type="text" name="mobile" id="mobile" placeholder="Mobile" />
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input class="form-control input-lg" type="password" name="password" placeholder="password" />
    </div>
    <div class="form-group">
      <input type="submit" name="submit" class="btn btn-success btn-lg" value="Sign Up" />
    </div>
  </form>
</div>