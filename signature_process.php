<?php 
   error_reporting(0);
    require_once 'connection.php';

    $user_signature = $_POST['user_signature'];
    $imgfilename = "sign_".date("YmdHiS").".jpeg";
    $imag_arrays = explode(",", $user_signature);
    $img_strings =  $imag_arrays[1];
    fwrite($imgfilehandles, base64_decode($img_strings));
    fclose($imgfilehandles);

     $user_name = $_POST['user_name'];

     $sql = "INSERT INTO `user` (`user_signature`, `user_name`) VALUES(?,?)";
     $stmt =  $pdo->prepare($sql);
     $stmt->execute([$user_signature, $user_name]);

     if($sql == TRUE){
         echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
			  <strong>Insert Successfully!</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>';
	     }else{
		echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
		  <strong>Insert Failed!</strong> 
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>';
     }
?>