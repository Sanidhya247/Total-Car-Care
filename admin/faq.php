<?php
    include("hhh.php");
?>
<form method="post" action="">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">FREQUENTLY ASKED QUESTION </h4>
                <!-- <p class="card-description"> Basic form elements </p> -->
                <form class="forms-sample" method="">
                    <div class="form-group">
                        <label for="exampleInputName1">Question</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Question"
                            name="question" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Answer</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" placeholder="Answer"
                            name="answer"></textarea>
                    </div>
                    <input type="submit" name="submit" id="submit" class="btn btn-primary mr-2">
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>

        </div>

    </div>
</form>

<?php
        $con=mysqli_connect("localhost","root","","tcc");
 
        if(isset($_POST['submit']))
    {
        
        $question=$_POST['question'];
        $answer=$_POST['answer'];
        

        $q=mysqli_query($con,"insert into faqs values('','$question','$answer')");
        if($q)
        { 
              echo "<script>alert('Inserted......');</script>";
        }
       else
       {
            echo "<script>alert('Not Inserted.....plz try again....');</script>";
       }   
    }
    ?>



<?php


$q = mysqli_query($con, "select * from faqs");
echo "<table class='table table-hover'>";
echo "<th>Question";
echo "<th>Answer";
echo "<th colspan=2>Action";
while ($row = mysqli_fetch_array($q)) {
    echo "<tr>";
    echo "<td>" . $row['question'];
    echo "<td>" . $row['answer'];
    echo "<td colspan=2><a href=faqedit.php?id=$row[0]><image src=img/edit.png height=30 width=30></a>";
    echo "<a href=faqdelete.php?id=$row[0]><image src=img/delete.png height=30 width=30></a>";
    echo "</tr>";
}
echo "</table>";

?>

<?php
include('fff.php');
?>