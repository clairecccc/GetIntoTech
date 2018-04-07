<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
     
    <title>HTTP POST</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12>"
            </div>
            <!--Row with two equal columns-->
            
            <div class="mx-auto" style="width: 400px;"> 
                <h1>This is a form <small class="text-muted">for you to complete</small></h1>     
             
                    <form class=".form-horizontal jumbotron" action="" method="POST">
                       <div class="form-group">
                           <label for="username"> Username: </label>
                           <input  type="text" id="username" class="form-control"  name="username" autofocus /><br/>
                       </div>
                        <div class="form-group">
                            <label for="email"> Email: </label>
                            <input  type="email" id="email" class="form-control" name="email"  placeholder="janesmith@email.com"/><br/>
                        </div>
                        <div class="form-group">
                            <label for="birthdate"> Date of Birth: </label>
                            <input  type="date" id="birthdate" class="form-control" name="birthdate" required /><br/>
                        </div>
                        <div class="form-group"> 
                            <label for="Country"> Country </label>
                            <select name="country" id="country" class="form control">
                                     <option value="Senegal">Senegal </option>
                                     <option value="kenya">Kenya</option>
                                     <option value="Malawi">Malawi</option>
                                     <option value="Uganda">Uganda</option>
                                     <option value="Mali">Mali</option>
                            </select>
                        </div>    
                        <div class="form-group">
                            <input  type="submit" id="submit" class="btn-info btn-block" class="form-control" value="I'm done"/><br/> 
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox"> Remember me</label>
                        </div>
              
                    </form>
        <?php
        if (!empty($_POST)) {
          
            echo "<h4>Welcome $_POST[username]</h4>", PHP_EOL; 
            echo "<h4>You live in $_POST[country]</h4>", PHP_EOL;
            echo "<h4>Your email is $_POST[email]</h4>", PHP_EOL;
            echo "<h4>Your DOB is $_POST[birthdate]</h4>", PHP_EOL;
            
        }
       
        else{
            echo "<h4>You have not submitted any data to the server</h4>";  
        }
      ?>
         
    </body>
</html>
