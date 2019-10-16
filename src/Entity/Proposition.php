<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PropositionRepository")
 */
class Proposition
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $estValider;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $aUnDejener;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEstValider(): ?bool
    {
        return $this->estValider;
    }

    public function setEstValider(?bool $estValider): self
    {
        $this->estValider = $estValider;

        return $this;
    }

    public function getAUnDejener(): ?bool
    {
        return $this->aUnDejener;
    }

    public function setAUnDejener(?bool $aUnDejener): self
    {
        $this->aUnDejener = $aUnDejener;

        return $this;
    }
}
