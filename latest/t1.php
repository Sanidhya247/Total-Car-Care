<?php
    include('h1.php');
?>
<html>

<body>
    <?php
        include('connect.php');
        if(isset($_POST['submit']))
        {
        //     $name=$_POST['name'];
        //     $email=$_POST['email'];
        //     $subject=$_POST['subject'];
        //     $message=$_POST['message'];
           
        //    $q=mysqli_query($con,"insert into user_contactus values('','$name','$email','$subject','$message')");

        //     if($q)
        //     {
        //         echo "<script>alert('Your valuable data is get us ..Thank You so much......');</script>";

        //     }
        //     else
        //     {
        //         echo "<script>alert('Not Inserted.....plz try again....');</script>";
        //     }  
                      echo "<script>alert('Your valuable data is get us ..Thank You so much......');</script>";

        }
    ?>
    <form method="POST" action="" class="contactForm">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="label" for="name">Full Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="label" for="email">Email Address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="label" for="subject">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="label" for="#">Message</label>
                    <textarea name="message" class="form-control" id="message" cols="30" rows="4"
                        placeholder="Message"></textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" id="
                                                        submit" value="Send Message">
                    <div class="submitting"></div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
<?php
    // include('f1.php');
?>