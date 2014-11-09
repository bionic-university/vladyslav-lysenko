<?php
/**
 * Created by PhpStorm.
 * User: vladyslav
 * Date: 08.11.14
 * Time: 17:53
 */

namespace BionicUniversity\Bundle\ProjectManagementBundle\EventListener;

use BionicUniversity\Bundle\ProjectManagementBundle\EmailServices\SendMail;
use BionicUniversity\Bundle\ProjectManagementBundle\Event\UserEvent;

class UserListener {

    private $mailService;

    public function setMailService(SendMail $mailService)
    {
        $this->mailService = $mailService;
    }

    public function onUserCreate(UserEvent $event){
        // creating parameters of email
        $subject = "New user in Project Management service";
        $to = $event->getUser()->getEmail();
        $body = "Hello, ".$event->getUser()->getFirstName()." ".$event->getUser()->getLastName().
            "! Welcome to Project Management service!";
        //sending email using SendMail service
        $this->mailService->sendMail($subject, $to, $body);
    }
} 