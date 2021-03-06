<?php

namespace PatrimoineBundle\Entity;

/**
 * Mecene
 */
class Mecene
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $presentation;

    /**
     * @var string
     */
    private $formulaire1;

    /**
     * @var string
     */
    private $formulaire2;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set presentation
     *
     * @param string $presentation
     *
     * @return Mecene
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
     * Set formulaire1
     *
     * @param string $formulaire1
     *
     * @return Mecene
     */
    public function setFormulaire1($formulaire1)
    {
        $this->formulaire1 = $formulaire1;

        return $this;
    }

    /**
     * Get formulaire1
     *
     * @return string
     */
    public function getFormulaire1()
    {
        return $this->formulaire1;
    }

    /**
     * Set formulaire2
     *
     * @param string $formulaire2
     *
     * @return Mecene
     */
    public function setFormulaire2($formulaire2)
    {
        $this->formulaire2 = $formulaire2;

        return $this;
    }

    /**
     * Get formulaire2
     *
     * @return string
     */
    public function getFormulaire2()
    {
        return $this->formulaire2;
    }
}
