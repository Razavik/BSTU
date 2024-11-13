<?php
class Letter
{
    private $recipientName;
    private $recipientAddress;
    private $recipientIndex;
    private $senderName;
    private $senderAddress;
    private $senderIndex;

    public function __construct($recipientName, $recipientAddress, $recipientIndex, $senderName, $senderAddress, $senderIndex)
    {
        $this->recipientName = $recipientName;
        $this->recipientAddress = $recipientAddress;
        $this->recipientIndex = $recipientIndex;
        $this->senderName = $senderName;
        $this->senderAddress = $senderAddress;
        $this->senderIndex = $senderIndex;
    }

    public function getRecipientName()
    {
        return $this->recipientName;
    }

    public function setRecipientName($recipientName)
    {
        $this->recipientName = $recipientName;
    }

    public function getRecipientAddress()
    {
        return $this->recipientAddress;
    }

    public function setRecipientAddress($recipientAddress)
    {
        $this->recipientAddress = $recipientAddress;
    }

    public function getRecipientIndex()
    {
        return $this->recipientIndex;
    }

    public function setRecipientIndex($recipientIndex)
    {
        $this->recipientIndex = $recipientIndex;
    }

    public function getSenderName()
    {
        return $this->senderName;
    }

    public function setSenderName($senderName)
    {
        $this->senderName = $senderName;
    }

    public function getSenderAddress()
    {
        return $this->senderAddress;
    }

    public function setSenderAddress($senderAddress)
    {
        $this->senderAddress = $senderAddress;
    }

    public function getSenderIndex()
    {
        return $this->senderIndex;
    }

    public function setSenderIndex($senderIndex)
    {
        $this->senderIndex = $senderIndex;
    }

    public function __destruct()
    {
        echo "Письмо от {$this->senderName} к {$this->recipientName} доставлено.<br>";
    }
}

$letter1 = new Letter('Петя', 'ул. Пушкина, д. 1', 101, 'Маша', 'ул. Лермонтова, д. 2', 102);
$letter2 = new Letter('Маша', 'ул. Лермонтова, д. 2', 102, 'Петя', 'ул. Пушкина, д. 1', 101);