<?php
//json format
//header('Content-type:Application/json');
//including db

error_reporting(0);

include 'db_connect.php';

// personal
if(isset($_POST['carId']))
    { 
        $carId= $_POST['carId'];
    }
if(isset($_POST['make']))
    { 
        $make= $_POST['make'];
    }
if(isset($_POST['model']))
    { 
        $model= $_POST['model'];
    }
if(isset($_POST['reg']))
    { 
        $reg= $_POST['reg'];
    }
if(isset($_POST['chasis']))
    { 
        $chasis= $_POST['chasis'];
    }
if(isset($_POST['color']))
    { 
        $color= $_POST['color'];
    }
if(isset($_POST['picture']))
    { 
        $picture= $_POST['picture'];

    }
if(isset($_POST['image_name']))
    { 
        $image_name= $_POST['image_name'];
    }
  

if (strlen($picture)>0) {

    $before = mysqli_query($con,"select picture from cars where carId='$carId'");
        while($rowb=mysqli_fetch_assoc($before))
        {
            if (file_exists($rowb["picture"])) {
                unlink($rowb["picture"]);
            }
        }


    $decoded_string = base64_decode($picture);
    $path = 'cars/'.$image_name;
    $file = fopen($path,'w');
    $is_written = fwrite($file,$decoded_string);
    fclose($file);

    $query= mysqli_query($con,"update cars set make='$make',model='$model',registeration_number='$reg',chasis_number='$chasis',color='$color',picture='$path' where carId='$carId'");
}else{
    $query= mysqli_query($con,"update cars set make='$make',model='$model',registeration_number='$reg',chasis_number='$chasis',color='$color' where carId='$carId'");
}




if ($query) {
    echo "success";
}else{
    echo "error";
}

    
//         // check if row inserted or not
//         if ($query) {
//                         $response["success"] = "yes";
//                         // echoing JSON response
//                         echo json_encode($response);
            
//             // successfully inserted into database

//             // $query2=mysqli_query($con,
//             //     "select * from users where userToken='$userToken' and firstName='$firstName'");

//             //     while($row=mysqli_fetch_assoc($query2))
//             //     {
//             //         $to = $row['email'];
//             //         $userId=$row['userId'];
//             //         $subject = "Account Activation - Bahria Composite Project";
//             //         $message = "<html><body><h2>Click the link below to activate your account.</h2><a href='http://localhost/bcp/activate_account.php?userId=$userId'>Activate Account</a></body></html>";
//             //         $header = "From:NO-REPLY@bcp.pk \r\n";
//             //         $header .= "MIME-Version: 1.0\r\n";
//             //         $header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
//             //         $retval = mail ($to,$subject,$message,$header);

//             //         if ($retval) {
//             //             $response["success"] = "yes";
//             //             // echoing JSON response
//             //             echo json_encode($response);
//             //         }else{
//             //             $response["success"] = "no";
//             //             // echoing JSON response
//             //             echo json_encode($response);
//             //         }
//             //     }

//         } else {
//             // failed to insert row
//             $response["success"] = "no";
     
//             // echoing JSON response
//             echo json_encode($response);
//         }




?>