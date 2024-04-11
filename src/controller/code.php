<?php
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport\Smtp\EsmtpTransport;
use Symfony\Component\Mime\Email;

require_once("vendor/autoload.php");
class Code{
    public function execute(){
        $message="";
        if (isset($_POST['sendlink'])) {
            $email=$_POST["email"];
          
            $handleUsers=new handleUsers();
        $handleUsers->connection=new DatabaseConnection();
        $user=$handleUsers->getUser($email);
        $code=random_int(0,1000000000000000000);
            $_SESSION['code'] = $code;
            $html='<a href="http://localhost/projet/index.php?action=resetPassword">reset password</a>';

            $transport = (new EsmtpTransport('live.smtp.mailtrap.io','587',false))
->setUsername('api')
->setPassword('c09cb176f34dbfe8b23a712592aff786');
$mailer = new Mailer($transport);
$email = (new Email())
->from('mailtrap@demomailtrap.com')
->to(' mohamedaminesaddoud111@gmail.com')
->subject('reset password')
->text('reset password')

->html($html);
$mailer->send($email);
            
$message= 'un lien est envoyez a votre addresse email clicker sur le lien pour modifier votre mot de passe';

        
        }
        require("templates/code.php");
    
    

}}
?>
