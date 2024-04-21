<?php
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport\Smtp\EsmtpTransport;
use Symfony\Component\Mime\Email;

require_once("vendor/autoload.php");
class Code{
    public function execute(){
        if(!isset($_SESSION)){
            session_start();}
        $message="";
        if (isset($_POST['sendlink'])) {
            $email=$_POST["email"];
          
            $handleUsers=new handleUsers();
        $handleUsers->connection=new DatabaseConnection();
        $user=$handleUsers->getUser($email);
        $code=random_int(0,1000000000000000000);
            $_SESSION['code'] = $code;
            $_SESSION ['email']=$email;
            $html='<a href="http://localhost/projet/index.php?action='.$code.'"'.'>reset password</a>';

            $transport = (new EsmtpTransport('live.smtp.mailtrap.io','587',false))
->setUsername('api')
->setPassword('223973aa5757688eecf49a5d5bcbf8a4');
$mailer = new Mailer($transport);
$email = (new Email())
->from('mailtrap@demomailtrap.com')
->to(' projetrealstate@gmail.com')
->subject('reset password')
->text('reset password')

->html($html);
$mailer->send($email);
            
$message= 'un lien est envoyez a votre addresse email clicker sur le lien pour modifier votre mot de passe';

        
        }
        require("templates/code.php");
    
    

}}
?>
