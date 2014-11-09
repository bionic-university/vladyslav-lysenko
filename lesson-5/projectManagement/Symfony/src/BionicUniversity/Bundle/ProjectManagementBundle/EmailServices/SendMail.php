<?php
/**
 * Created by PhpStorm.
 * User: vladyslav
 * Date: 08.11.14
 * Time: 17:35
 */

namespace BionicUniversity\Bundle\ProjectManagementBundle\EmailServices;

use BionicUniversity\Bundle\ProjectManagementBundle\Entity\User;

class SendMail {

    private $mailer;

    private function createMessage($subject, $to, $body)
    {
        $message = \Swift_Message::newInstance()
            ->setSubject($subject)
            ->setFrom(array('smartBookmark2014@gmail.com' => 'Project Management service'))
            ->setTo($to)
            ->setBody($body
                , 'text/html'
            );
        return $message;
    }

    public function __construct($mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendMail($subject, $to, $body){
        $this->mailer->send($this->createMessage($subject, $to, $body));
    }

} 