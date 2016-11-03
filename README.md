patrimoine
==========

A Symfony 2.8 project created on October 4, 2016, 4:27 pm.

Language used:
    - PHP / Symfony
    - CSS
    - JS
    - SQL / Doctrine
    - HTML

First, in the patrimoine directory :


git clone origin dev

All files are already presents.

composer install

UPDATE manually parameters.yml (app/config/parameters.yml):
    - DB Name
    - User / pass

php app/console doctrine:database:create

php app/console doctrine:schema:update --dump-sql (to check DB before sending)
php app/console doctrine:schema:update --force (to update the changes)

php app/console asset:install --symlink (to update the CSS)


Filling the pages:

Accueil:
 URL: /accueil/new

    - 1 Video
    - 4 titles
    - 4 articles

Associations:
    URL: /association/new

    - 4 titles
    - 4 articles
    - 4 pictures

Realisations:
    URL: realisation/new

    - 10 titles
    - 10 articles
    - 10 pictures

Agenda:
    URL: agenda/new

    - Nothing, the Google API is casted in the file directly

Devenir Mecene:
    URL: mecene/new

    - 3 articles
    - 2 modals


composer install

*User management*

--> FOSUserbundle


php app/console fos:user:create [superadmin] --super-admin
- mail adress
- password

to create more users: 

php app/console fos:user:create [user1] [user@example.com] [p@ssword]

login page:
http://localhost/nomduprojet/web/app_dev.php/login

*Sending mail*

Swift mailer

in src\Site\SiteBundle\Ressources\views\Default

create a new file called : formMail.html.twig


insert:
    <form action="{{ path('patrimoine_sendMail') }}" method="POST" >
    <h1>Veuillez renseigner les champs</h1>
    <br />
    <br />
    <br />
    <h2>
        Subject:
    </h2>
    <input type="text" name="Subject">
    <br />
    <h2>
        Email:
    </h2>
    <input type="text" name="email">
    <br />
    <h2>
        Text:
    </h2>
    <textarea name="message"></textarea>
    <input type="submit" value="Send"/>
    </form>


in src\Site\SiteBundle\Ressources\config\routing.yml

patrimoine_redirection:
       path:     /
    defaults: { _controller: PatrimoineBundle:Default:redirection }
patrimoine_homepage:
    path:     /
    defaults: { _controller: PatrimoineBundle:Default:index }
patrimoine_sendMail:
    path: /sendMail
    defaults: {_controller: PatrimoineBundle:Default:sendMail }
patrimoine_mail:
    path: /mail
    defaults: {_controller: PatrimoineBundle:Default:mail }
    
in src\Site\SiteBundle\Controller\DefaultController.php 
    namespace PatrimoineBundle\Controller;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;  
    class DefaultController extends Controller
    {
        public function sendMailAction()
        {
            $Request = $this->getRequest();
            if ($Request->getMethod() == "POST") {
                $Subject = $Request->get("Subject");
                $message = $Request->get("message") . " " . $Request->get("entreprise") . " " . $Request->get("siret") . " " . $Request->get("nom") . " " . $Request->get("prenom") . " " . $Request->get("adresse") . " " . $Request->get("ville") . " " . $Request->get("code_postal") . " " . $Request->get("email") . " " . $Request->get("phone") . " " . $Request->get("don") . " " . $Request->get("comment");
                $message = \Swift_Message::newInstance('Test')
                    ->setSubject($Subject)
                    ->setFrom('fondsperche@gmail.com')
                    ->setTo('fondsperche@gmail.com')
                    ->setBody($message);
                $this->get('mailer')->send($message);
                return $this->render('PatrimoineBundle:Default:mail.html.twig');
            }
            return $this->render('PatrimoineBundle:Default:formMail.html.twig');
        }
        public function redirectionAction()
        {
            return $this->render('PatrimoineBundle:Default:formMail.html.twig');
        }
    }
    
    
in app\config\parameters.yml

parameters:    
    database_host: 127.0.0.1
    database_port: null
    database_name: DB_NAME
    database_user: root
    database_password: DB_PASSWORD
    mailer_transport: MAIL PROVIDER (ie: gmail)
    mailer_host: PROTOCOL OUTGOING MAIL (ie: SMTP)
    mailer_user: EXEMPLE@MAIL.COM
    mailer_password: MAIL_PASSWORD
    secret: ThisTokenIsNotSoSecretChangeIt
