<?php
// require_once 'class.user.php';
require_once 'mail/PHPMailer/PHPMailerAutoload.php';
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/demo-style.css">
<!------ Include the above in your HEAD tag ---------->

<div class="container contact-form">
            <div class="contact-image">
                <img src="img/logo.png" alt="Needyin-logo"/>
            </div>
            <form action = "" name = "interestform" method="POST" onSubmit= "return validcntrec()">
                <h3>Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input id ="Cu_Fullname" type="text" name="Cu_Fullname" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input id = "Cu_Email" type="text" name="Cu_Email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input id = "Cu_Contact_No" type="text" name="Cu_Contact_No" class="form-control" pattern="^[6789]\d{9}$"  maxlength="10" placeholder="Your Phone Number *" value="" />
						</div>
                        <div class="form-group">
                        <textarea id = "Cu_msg" name="Cu_msg" class="form-control" placeholder="Your message and give date and time*" value="" required></textarea>
						</div>
						<div class="input-field">
                            <input  type="hidden" name="fromname" >
                             <label for="fromname"></label>
                        </div>
						<div class="form-group">
                            <input type="submit" name="interestform" class="btnContact" value="Send Message" />
                        </div>
					</div>
					<!-- <div class="col-md-6">
							<div class="form-group">
								<textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
							</div>
						</div> -->
					</div>
            </form>
</div>


<script type="text/javascript">
			function isNumber(evt) 
{
		evt = (evt) ? evt : window.event;
		var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) 
	{
        return false;
    }
   else
   {
		return true;
   }
}
	
	
$(document).on('keypress', '#Cu_Fullname', function (event) {
                            var regex = new RegExp("^[a-zA-Z ]+$");
                            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
                            if (!regex.test(key)) {
                                event.preventDefault();
                                return false;
                            }
                        });
	
	
			function validcntrec()
			{				
			var Cu_Fullname=document.getElementById('Cu_Fullname').value;
				if(Cu_Fullname=="")
				{					
					alert("Please Give Your Full Name");
				
					
						return false;
																				
				}								
		        
				var Cu_Contact_No=document.getElementById('Cu_Contact_No').value;
				if(Cu_Contact_No=="")
				{
					alert("Please Give Your Contact Number");
				
					return false;															
				}
            	var Cu_Email=document.getElementById('Cu_Email').value;
				if(Cu_Email=="")
				{
					alert("Please Give Your Email");
				
					return false;															
				}
				if(!emailverify(Cu_Email))
				{
					
				
					return false;															
				}
				var  = document.getElementById('Cu_msg').value;
				if(Cu_msg == "")
				{
					alert("Please Tell us more about what you are looking for and give the date for demo");
					return false;
				}
																			
			}
			
			</script>

<?php
$servername = "localhost";
$username = "root";
$password ="SmartHireIn@6664";
$dbname = "smarthirein_db";

$Cu_Fullname = $_POST["Cu_Fullname"];
$Cu_Email = $_POST["Cu_Email"];
$Cu_Contact_No = $_POST["Cu_Contact_No"];
$Cu_msg = $_POST["Cu_msg"];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

					
if(isset($_POST['interestform']))
$sql = "INSERT INTO tbl_demos (Cu_Fullname, Cu_Contact_No, Cu_Email,Cu_msg) VALUES ('$Cu_Fullname',$Cu_Contact_No,'$Cu_Email','$Cu_msg')";

$sqlcontactres=mysqli_query($conn,$sql);
	
	if($sqlcontactres)
	{
$mail->From ='sivaram.a@needyin.com';
$email_to = 'sivaram.a@needyin.com'; 
$email_subject = "".$_POST['Cu_Fullname']." Booked a Demo from Needyin";
$message="This mail has been received from ".$_POST['Cu_Fullname']."<br>".$_POST['Cu_Email']."<br>".$_POST['Cu_Contact_No']."<br>".$_POST['Cu_msg'];
$mail = new PHPMailer;
$email_to="sivaram.a@needyin.com";
$mail->IsSMTP();

$mail->Host = 'mail.webmailcommunications.com';
$mail->SMTPAuth = true;
$mail->Username = 'sivaram.a@needyin.com';
$mail->Password = 'prabha@123';
// $mail->Password = 'Master@2772';
$mail->SMTPSecure = 'tls';

$mail->From ='sivaram.a@needyin.com';
$mail->FromName = $_POST['Cu_Fullname'];
$mail->addAddress($email_to);

$mail->isHTML(true);

$mail->Subject = $email_subject;
$mail->Body    = $message;
			 if($mail->send())
				 { ?> <script lang="text/javascript">
		            alert("Dear Customer you booked our product demo successfully,our product team will contact you soon Thank you Team.");
					window.location.href = "index.php";
					</script>
			<?php	
				 }
				else
				{ ?> <script lang="text/javascript">
			alert("Your Request hasn't been sent");
				</script>
          
			<?php
	
				}			
  }		
// $conn->close();  
?>

<?php
	$apiKey = urlencode('TreESbtR4n0-BRdjbXUVKuc841Y9bmIzRoDQWaEBzZ');	
	$numbers = array($_POST['Cu_Contact_No']);
	$sender = urlencode('NEEDYN');
	$message = "Dear ".$_POST['Cu_Fullname'].",you booked our product demo successfully,our product team will contact you soon Thank you Team Needyin.
	https://bit.ly/2KMr16J callUs@9885623414";

/*Dear ".ucfirst($name).", ".ucfirst($jrow['JFullName'])." has invited you to join Needyin.Accept the invitation to join Needyin.
          Team
          Needyin*/  


	$numbers = implode(',', $numbers);
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	// echo $response;

?>					

