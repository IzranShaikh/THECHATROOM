<!-- LoginModal -->
<div class="modal fade" id="LoginModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <form class="form-group" action="Process/login.php" method="post">
                <label for="">Email ID</label>
                <input type="text" class="form-control" name="email_l" required>
                
                <label for="">Password</label>
                <div class="input-group">
                <input type="password" class="form-control" name="password_l" id="password_l" required>
                <a class="material-icons btn btn-danger" onclick="showpassword()" style="color:ghostwhite;">visibility</a>
                </div>
                
                <br>
                <center><input type="submit" class="btn btn-success" name="login" value="Login"></center>
                <center><a href="" data-toggle="modal" data-dismiss="modal" data-target="#SignUpModal">Create a new Account.</a></center>
            </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
</div>

<!--SignUp Modal-->
<div class="modal fade" id="SignUpModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Sign Up</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <form class="form-group" action="Process/signup.php" method="post">
                <label for="">Username</label>
                <input type="text" class="form-control" name="username_s">
                <label for="">Email ID</label>
                <input type="text" class="form-control" name="email_s">
                <label for="">Password</label>
                
                <div class="input-group">
                <input type="password" class="form-control" name="password_s" id="password_s" required>
                <a class="material-icons btn btn-danger" onclick="showpassword_s()" style="color:ghostwhite;">visibility</a>
                </div>
                <br>
                <center><input type="submit" name="signup" class="btn btn-primary" value="Sign Up"><center>
                
                
                <center><a href="" data-toggle="modal" data-dismiss="modal" data-target="#LoginModal">Already a Member?</a></center>
            </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
</div>