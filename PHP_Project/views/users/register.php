<div class="panel panel-default">
     <div class="panel-heading">
          <h3 class="panel-title">Register user</h3>
     </div>
     <div class="panel-body">
          <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
               <div class="form-group">
                    <label>User name</label>
                    <input type="text" name="name" class="form-control">
               </div>
               <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control">
               </div>
               <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="link" class="form-control">
               </div>

               <input type="submit" name="submit" value="Submit" class="btn btn-primary" />
          </form>
     </div>
</div>
