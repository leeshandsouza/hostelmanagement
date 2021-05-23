

<?php
//header("Location: signUp.html");
session_start();


include '_dbconnect.php';
if(isset($_POST['submitlogin']))
{
    if($_SERVER['REQUEST_METHOD']!='POST'){
        echo "<script> 
        alert('Unauthorised Access!');
        window.location.href='home.php';</script>";
        session_write_close();
    }
    
    $regno=$_POST['regno'];
    $pw=$_POST['password'];

    $sql = "SELECT password,regno FROM resident WHERE regno = '".$regno."';";

    $result = mysqli_query($conn,$sql);
    if($result)
    {
        $row = mysqli_fetch_row($result);
        if($row!=null && strcasecmp($row[0], $pw) == 0)
	    {
		$_SESSION['regno'] = $row[1];
		
        session_write_close();
        
		echo "Authenticated";
		header("Location: home.php");
        }
        else if($row == null)
        {
            $_SESSION['error_msg'] = "Account does not exist.";
            session_write_close();
            header("Location: partials/errorPage.php");
        }   
        else{

            echo "<script> alert('Wrong Password. Try Again!');
            window.location.href='index.php';
            </script>";
            session_write_close();

        }
    }
    else {
        $_SESSION['error_msg'] = $row[0];
		session_write_close();
		header("Location: partials/errorPage.php");
    }
}
?>

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login to your account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">USN/Register number</label>
                        <input type="text" class="form-control" name="regno" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label" required>Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                    </div>
                    <button type="submit" name="submitlogin" class="btn btn-primary">Login</button> 
                    
                </div>
            </form>
            
        </div>

    </div> 
 
</div>
</div>