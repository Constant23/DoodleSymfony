<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SondagesRepository")
 */
class Sondages
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $intitule;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $resume;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lienInscription;

    private $leResponsable;

    private List<Participants> mesParticipants = new ArrayList<Participants>();

    private Collection<Propositions> mesPropositions ;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lienPartage;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntitule(): ?string
    {
        return $this->intitule;
    }

    public function setIntitule(string $intitule): self
    {
        $this->intitule = $intitule;

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->resume;
    }

    public function setResume(string $resume): self
    {
        $this->resume = $resume;

        return $this;
    }

    public function getLienInscription(): ?string
    {
        return $this->lienInscription;
    }

    public function setLienInscription(?string $lienInscription): self
    {
        $this->lienInscription = $lienInscription;

        return $this;
    }

    public function getLienPartage(): ?string
    {
        return $this->lienPartage;
    }

    public function setLienPartage(?string $lienPartage): self
    {
        $this->lienPartage = $lienPartage;

        return $this;
    }
}
