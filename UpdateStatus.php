<?php 

    $con=mysqli_connect("localhost","_materialsvc@localhost","KEline123%","material"); 
    if(!$con) { die(" Connection Error "); } 

    

    if(isset($_POST['update']))
    {
        $ID = $_GET['ID'];
        $Status = mysqli_real_escape_string($con, $_REQUEST['Status']);


        $query = " SELECT Status FROM information where ID='".$ID."'";
        $result1 = mysqli_query($con,$query);
        $Status1=mysqli_fetch_assoc($result1);
        $OldStatus=implode("", $Status1);

        $query = " SELECT StatusID FROM information where ID='".$ID."'";
        $result2 = mysqli_query($con,$query);
        $StatusID=mysqli_fetch_assoc($result2);
        $StatusIDold=implode("", $StatusID);


        $true = $Status===$OldStatus;


        if($true!=1){
        $sql = " UPDATE information set 

        Status='".$Status."',
        LastUpdated= CURRENT_TIMESTAMP

        where ID='".$ID."'";

        $result = mysqli_query($con,$sql);   }





        $true = $Status===$OldStatus;

        if($true!=1){

        switch($StatusIDold){
        case "0":
        $StatusIDold++;
        $sql0 = " UPDATE information set 

        Status1='".$OldStatus."',
        StatusID='".$StatusIDold."',
        Status1Done= CURRENT_TIMESTAMP

        where ID='".$ID."' ";

        $result0 = mysqli_query($con,$sql0);  
        break;

        case "1":
        $StatusIDold++;
        $sql1 = " UPDATE information set 

        Status2='".$OldStatus."',
        StatusID='".$StatusIDold."',
        Status2Done= CURRENT_TIMESTAMP

        where ID='".$ID."'";

        $result1 = mysqli_query($con,$sql1);  
        break;

        case "2":
        $StatusIDold++;
        $sql2 = " UPDATE information set 

        Status3='".$OldStatus."',
        StatusID='".$StatusIDold."',
        Status3Done= CURRENT_TIMESTAMP

        where ID='".$ID."' ";

        $result2 = mysqli_query($con,$sql2);  
        break;

        case "3":
        $StatusIDold++;
        $sql3 = " UPDATE information set 

        Status4='".$OldStatus."',
        StatusID='".$StatusIDold."',
        Status4Done= CURRENT_TIMESTAMP

        where ID='".$ID."'";

        $result3 = mysqli_query($con,$sql3);  
        break;

        case "4":
        $StatusIDold++;
        $sql4 = " UPDATE information set 

        Status5='".$OldStatus."',
        StatusID='".$StatusIDold."',
        Status5Done= CURRENT_TIMESTAMP

        where ID='".$ID."' ";

        $result4 = mysqli_query($con,$sql4);  
        break;

        case "5":
        $StatusIDold++;
        $sql5 = " UPDATE information set 

        Status6='".$OldStatus."',
        StatusID='".$StatusIDold."',
        Status6Done= CURRENT_TIMESTAMP

        where ID='".$ID."'";

        $result5 = mysqli_query($con,$sql5);  
        break;

        case "6":
        $StatusIDold++;
        $sql6 = " UPDATE information set 

        Status7='".$OldStatus."',
        StatusID='".$StatusIDold."',
        Status7Done= CURRENT_TIMESTAMP

        where ID='".$ID."' ";

        $result6 = mysqli_query($con,$sql6);  
        break;

        case "7":
        $StatusIDold++;
        $sql7 = " UPDATE information set 

        Status8='".$OldStatus."',
        StatusID='".$StatusIDold."',
        Status8Done= CURRENT_TIMESTAMP

        where ID='".$ID."'";

        $result7 = mysqli_query($con,$sql7);  
        break;

        case "8":
        $StatusIDold++;
        $sql8 = " UPDATE information set 

        Status9='".$OldStatus."',
        StatusID='".$StatusIDold."',
        Status9Done= CURRENT_TIMESTAMP

        where ID='".$ID."'";

        $result8 = mysqli_query($con,$sql8);  
        break;

        case "9":
        $StatusIDold++;
        $sql9 = " UPDATE information set 

        Status10='".$OldStatus."',
        StatusID='".$StatusIDold."',
        Status10Done= CURRENT_TIMESTAMP

        where ID='".$ID."' ";

        $result9 = mysqli_query($con,$sql9);  
        break; }
}



        if(1)
        {
           
        header("location:ViewData.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:ViewData.php");
    }

mysqli_close($con);
?>