<?php

namespace baseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Disponibilite
 *
 * @ORM\Table(name="disponibilite", indexes={@ORM\Index(name="id_livreur", columns={"id_livreur"})})
 * @ORM\Entity
 */
class Disponibilite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_dispo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDispo;

    /**
     * @return int
     */
    public function getIdDispo()
    {
        return $this->idDispo;
    }

    /**
     * @param int $idDispo
     */
    public function setIdDispo($idDispo)
    {
        $this->idDispo = $idDispo;
    }

    /**
     * @return string
     */
    public function getDateDispo()
    {
        return $this->dateDispo;
    }

    /**
     * @param string $dateDispo
     */
    public function setDateDispo($dateDispo)
    {
        $this->dateDispo = $dateDispo;
    }

    /**
     * @return \Livreur
     */
    public function getIdLivreur()
    {
        return $this->idLivreur;
    }

    /**
     * @param \Livreur $idLivreur
     */
    public function setIdLivreur($idLivreur)
    {
        $this->idLivreur = $idLivreur;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="date_dispo", type="string", length=255, nullable=false)
     */
    private $dateDispo;

    /**
     * @var \Livreur
     *
     * @ORM\ManyToOne(targetEntity="Livreur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_livreur", referencedColumnName="id_livreur",onDelete="CASCADE")
     * })
     */
    private $idLivreur;


}

