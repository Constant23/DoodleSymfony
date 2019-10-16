<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ParticiperRepository")
 */
class Participer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lienUnique;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $allergique;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $preference;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $codeClear;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $present;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLienUnique(): ?string
    {
        return $this->lienUnique;
    }

    public function setLienUnique(?string $lienUnique): self
    {
        $this->lienUnique = $lienUnique;

        return $this;
    }

    public function getAllergique(): ?string
    {
        return $this->allergique;
    }

    public function setAllergique(?string $allergique): self
    {
        $this->allergique = $allergique;

        return $this;
    }

    public function getPreference(): ?string
    {
        return $this->preference;
    }

    public function setPreference(?string $preference): self
    {
        $this->preference = $preference;

        return $this;
    }

    public function getCodeClear(): ?string
    {
        return $this->codeClear;
    }

    public function setCodeClear(?string $codeClear): self
    {
        $this->codeClear = $codeClear;

        return $this;
    }

    public function getPresent(): ?bool
    {
        return $this->present;
    }

    public function setPresent(?bool $present): self
    {
        $this->present = $present;

        return $this;
    }
}
