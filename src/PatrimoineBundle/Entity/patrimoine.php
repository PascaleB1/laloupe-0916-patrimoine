<?php

namespace PatrimoineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * patrimoine
 */
class patrimoine
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $intro;

    /**
     * @var string
     */
    private $article;

    /**
     * @var string
     */
    private $presentation;

    /**
     * @var string
     */
    private $formulaire;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return patrimoine
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set intro
     *
     * @param string $intro
     * @return patrimoine
     */
    public function setIntro($intro)
    {
        $this->intro = $intro;

        return $this;
    }

    /**
     * Get intro
     *
     * @return string 
     */
    public function getIntro()
    {
        return $this->intro;
    }

    /**
     * Set article
     *
     * @param string $article
     * @return patrimoine
     */
    public function setArticle($article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return string 
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set presentation
     *
     * @param string $presentation
     * @return patrimoine
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;

        return $this;
    }

    /**
     * Get presentation
     *
     * @return string 
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Set formulaire
     *
     * @param string $formulaire
     * @return patrimoine
     */
    public function setFormulaire($formulaire)
    {
        $this->formulaire = $formulaire;

        return $this;
    }

    /**
     * Get formulaire
     *
     * @return string 
     */
    public function getFormulaire()
    {
        return $this->formulaire;
    }
}
