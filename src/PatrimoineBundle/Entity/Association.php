<?php

namespace PatrimoineBundle\Entity;

/**
 * Association
 */
class Association
{
   public $file;

    protected function getUploadDir()
    {
        return 'uploads';
    }

    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../web/'.$this->getUploadDir();
    }
/*
    public function getWebPath()
    {
        return null === $this->image ? null : $this->getUploadDir().'/'.$this->image;
    }

    public function getAbsolutePath()
    {
        return null === $this->image ? null : $this->getUploadRootDir().'/'.$this->image;
    }*/


    public function preUpload()
    {
        if (null !== $this->file) {
            // do whatever you want to generate a unique name
            $this->logo = uniqid().'.'.$this->file->guessExtension();
        }
    }

    public function upload()
    {
        if (null === $this->file) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file->move($this->getUploadRootDir(), $this->logo);

        unset($this->file);
    }

    public function removeUpload()
    {
        /*if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }*/
    }
    /**code généré
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
    private $article;


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
     * Set titre
     *
     * @param string $titre
     *
     * @return Association
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

    private $titre1;

    private $titre2;

    private $titre3;

    private $titre4;

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Association
     */
    public function setTitre1($titre1)
    {
        $this->titre1 = $titre1;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre1()
    {
        return $this->titre1;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Association
     */
    public function setTitre2($titre2)
    {
        $this->titre2 = $titre2;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre2()
    {
        return $this->titre2;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Association
     */
    public function setTitre3($titre3)
    {
        $this->titre3 = $titre3;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre3()
    {
        return $this->titre3;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Association
     */
    public function setTitre4($titre4)
    {
        $this->titre4 = $titre4;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre4()
    {
        return $this->titre4;
    }

    /**
     * Set article
     *
     * @param string $article
     *
     * @return Association
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
     * @var string
     */
    private $article1;

    /**
     * @var string
     */
    private $article2;

    /**
     * @var string
     */
    private $article3;

    /**
     * @var string
     */
    private $article4;


    /**
     * Set article1
     *
     * @param string $article1
     *
     * @return Association
     */
    public function setArticle1($article1)
    {
        $this->article1 = $article1;

        return $this;
    }

    /**
     * Get article1
     *
     * @return string
     */
    public function getArticle1()
    {
        return $this->article1;
    }

    /**
     * Set article2
     *
     * @param string $article2
     *
     * @return Association
     */
    public function setArticle2($article2)
    {
        $this->article2 = $article2;

        return $this;
    }

    /**
     * Get article2
     *
     * @return string
     */
    public function getArticle2()
    {
        return $this->article2;
    }

    /**
     * Set article3
     *
     * @param string $article3
     *
     * @return Association
     */
    public function setArticle3($article3)
    {
        $this->article3 = $article3;

        return $this;
    }

    /**
     * Get article3
     *
     * @return string
     */
    public function getArticle3()
    {
        return $this->article3;
    }

    /**
     * Set article4
     *
     * @param string $article4
     *
     * @return Association
     */
    public function setArticle4($article4)
    {
        $this->article4 = $article4;

        return $this;
    }

    /**
     * Get article4
     *
     * @return string
     */
    public function getArticle4()
    {
        return $this->article4;
    }
    /**
     * @var string
     */
    private $image1;

    /**
     * @var string
     */
    private $image2;

    /**
     * @var string
     */
    private $image3;

    /**
     * @var string
     */
    private $image4;


    /**
     * Set image1
     *
     * @param string $image1
     *
     * @return Association
     */
    public function setImage1($image1)
    {
        $this->image1 = $image1;

        return $this;
    }

    /**
     * Get image1
     *
     * @return string
     */
    public function getImage1()
    {
        return $this->image1;
    }

    /**
     * Set image2
     *
     * @param string $image2
     *
     * @return Association
     */
    public function setImage2($image2)
    {
        $this->image2 = $image2;

        return $this;
    }

    /**
     * Get image2
     *
     * @return string
     */
    public function getImage2()
    {
        return $this->image2;
    }

    /**
     * Set image3
     *
     * @param string $image3
     *
     * @return Association
     */
    public function setImage3($image3)
    {
        $this->image3 = $image3;

        return $this;
    }

    /**
     * Get image3
     *
     * @return string
     */
    public function getImage3()
    {
        return $this->image3;
    }

    /**
     * Set image4
     *
     * @param string $image4
     *
     * @return Association
     */
    public function setImage4($image4)
    {
        $this->image4 = $image4;

        return $this;
    }

    /**
     * Get image4
     *
     * @return string
     */
    public function getImage4()
    {
        return $this->image4;
    }

}
