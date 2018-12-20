  <form>
    <?php 
    if(strlen($_GET['password'])>=64){
    die("Please check your input. Values are outside limits.");
  }
  ?>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-4 col-form-label">Email</label>
    <div class="col-sm-8">
      <input type="text"  required readonly class="form-control staticEmail" name="email" id="staticEmail" value="<?php echo $_GET["email"]; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
    <div class="col-sm-8">
      <input type="password" required readonly class="form-control staticPassword" name="password" id="inputPassword" placeholder="Password" value="<?php echo $_GET['password']; ?>">
    </div>
  </div>
    <div class="form-group row">
    <label for="firstname" class="col-sm-4 col-form-label">First Name</label>
    <div class="col-sm-8">
      <input type="text" maxlength="64" class="form-control staticFname" id="firstname" name="fname" required >
    </div>
  </div>
      <div class="form-group row">
    <label for="lastname" class="col-sm-4 col-form-label">Last Name</label>
    <div class="col-sm-8">
      <input type="text"  maxlength="64" class="form-control staticLname" id="lastname" name="lname" required>
    </div>
  </div>
      <div class="form-group row">
    <label for="lastname" class="col-sm-4 col-form-label"></label>
    <div class="col-sm-8">
      <button class="btn btn-primary final-signup" tpye="submit">Create your account</button>
    </div>
  </div>
</form>
  <script>
      $(".final-signup").click(function(event){
    //alert("LOL");
    event.preventDefault();
    var email = $(".staticEmail").val();
    var password = $(".staticPassword").val();
    var fname = $(".staticFname").val();
    var lname = $(".staticLname").val();

    var uri = "process-signup.php?email="+email+"&password="+password+"&fname="+fname+"&lname="+lname;
    modalify("Account Created",uri,"");
  });
</script>