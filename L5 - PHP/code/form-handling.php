<?php if(empty($_POST))
{
    ?>
<form method="post">
<input placeholder="Enter your full name please" name="name" type=text><br><br>
<input placeholder="Enter your email address here" name="email" type="email"><br><br>
<input placeholder="Enter your 10 digit phone number" name="phone" type="text">
<br><br>
    <select name="reason">
    <option></option>
    <option>Query</option>
    <option>Feedback</option></select><br><br>
    <textarea placeholder="Message that you want to send" name="message"></textarea>
<br><br>
    <input type=submit value="Send Message">
</form>
<?php }
if(!empty($_POST))
{#print_r($_POST);
function clearit($a)
{
    $b='';
    for($i=0;$i<strlen($a);$i++)
    {
        if(ctype_alpha($a[$i]) || $a[$i]===' ')
        {
            $b.=$a[$i];
        }
    }
    return $b;
}
$name=$_POST['name'] ?? '';
if($name==''){echo 'name not sent'; }
$flag=0;
$name=filter_var($name,FILTER_CALLBACK,array("options"=>"clearit"));
if(strlen($name)<3) $flag=1;
$email=$_POST['email'] ?? '';
$email=filter_var($email,FILTER_VALIDATE_EMAIL);
if(strlen($email)<2) $flag=2;
$phone=$_POST['phone'] ?? '';
#$phone=9999888877;
if(!ctype_digit($phone) || strlen($phone)!=10) $flag=3;
if($phone[0]<6) $flag=3;
$reason=$_POST['reason'] ?? '';
if($reason!="Query" && $reason!="Feedback") $flag=4;
$message=$_POST['message'] ?? '';
$message=filter_var($message,FILTER_SANITIZE_STRING);
if(strlen($message)<10) $flag=5;
switch($flag){
    case 1: echo 'Name is wrong or empty';break;
    case 2: echo 'Email is wrong or empty';break;
    case 3: echo 'Phone is wrong or empty';break;
    case 4: echo 'Subject is wrong or empty';break;
    case 5: echo 'Message is wrong or empty';
}
if($flag==0)
{
    $finalstring="Name: $name
Email: $email
Phone: $phone
Subject: $reason
Message: $message
=================
";
$r=file_put_contents("contact_data.txt",$finalstring,FILE_APPEND);
    if($r)echo "Your message is saved. Thank you";
    else echo "There was some error in saving your form. Try again later";
}
}
?>