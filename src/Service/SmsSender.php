<?php
/*
namespace App\Service;

use Symfony\Component\Notifier\TexterInterface;
use Symfony\Component\Notifier\Message\SmsMessage;
use Symfony\Component\Notifier\Message\MessageInterface;

class SmsSender
{
    private $texter;

    public function __construct(TexterInterface $texter)
    {
        $this->texter = $texter;
    }

    public function sendSms(string $phoneNumber, string $message): void
    {
        // Créer un objet SmsMessage avec le numéro de téléphone et le message
        $smsMessage = new SmsMessage($phoneNumber, $message);

        // Vérifier si l'instance de Texter supporte le message SMS
        if ($this->texter->supports($smsMessage)) {
            // Envoyer le message SMS
            $this->texter->send($smsMessage);
        } else {
            // Gérer le cas où le transport Texter ne supporte pas le message SMS
            // Par exemple, en journalisant un avertissement ou en lançant une exception
            throw new \RuntimeException('The Texter transport does not support SMS messages.');
        }
    }
}