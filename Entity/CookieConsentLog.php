<?php

declare(strict_types=1);

/*
 * This file is part of the ConnectHolland CookieConsentBundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\CookieConsentBundle\Entity;

use DateTime;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'ch_cookieconsent_log')]
class CookieConsentLog
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    #[ORM\Column]
    protected int $id;

    #[ORM\Column(length: 255)]
    protected string $ipAddress;

    #[ORM\Column(length: 255)]
    protected string $cookieConsentKey;

    #[ORM\Column(length: 255)]
    protected string $cookieName;

    #[ORM\Column(length: 255)]
    protected string $cookieValue;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    protected DateTime $timestamp;

    public function getId(): int
    {
        return $this->id;
    }

    public function setIpAddress(string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }

    public function setCookieConsentKey(string $cookieConsentKey): self
    {
        $this->cookieConsentKey = $cookieConsentKey;

        return $this;
    }

    public function getCookieConsentKey(): string
    {
        return $this->cookieConsentKey;
    }

    public function setCookieName(string $cookieName): self
    {
        $this->cookieName = $cookieName;

        return $this;
    }

    public function getCookieName(): string
    {
        return $this->cookieName;
    }

    public function setCookieValue(string $cookieValue): self
    {
        $this->cookieValue = $cookieValue;

        return $this;
    }

    public function getCookieValue(): string
    {
        return $this->cookieValue;
    }

    public function setTimestamp(DateTime $timestamp): self
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    public function getTimestamp(): DateTime
    {
        return $this->timestamp;
    }
}
