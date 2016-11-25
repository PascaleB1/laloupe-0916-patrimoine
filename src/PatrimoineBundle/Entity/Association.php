<?php

namespace PatrimoineBundle\Entity;

/**
 * Association
 */
class Association
    //image1
{
    public $file1;

    protected function getUploadDir()
    {
        return 'uploads';
    }

    protected function getUploadRootDir()
    {
        return __DIR__ . '/../../../web/' . $this->getUploadDir();
    }

    public function getWebPath1()
    {
        return null === $this->image1 ? null : $this->getUploadDir() . '/' . $this->image1;

    }

    public function getAbsolutePath1()
    {
        return null === $this->image1 ? null : $this->getUploadRootDir() . '/' . $this->image1;
    }


    public function preUpload1()
    {
        if (null !== $this->file1) {
            // do whatever you want to generate a unique name
            $this->image1 = uniqid() . '.' . $this->file1->guessExtension();
        }
    }

    public function upload1()
    {
        if (null === $this->file1) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file1->move($this->getUploadRootDir(), $this->image1);

        unset($this->file1);
    }

    public function removeUpload1()
    {
        if ($file1 = $this->getAbsolutePath()) {
            unlink($file1);
        }
    }

    //image2

     public $file2;


     public function getWebPath2()
     {
         return null === $this->image2 ? null : $this->getUploadDir() . '/' . $this->image2;
     }

     public function getAbsolutePath2()
     {
         return null === $this->image2 ? null : $this->getUploadRootDir() . '/' . $this->image2;
     }


     public function preUpload2()
     {
         if (null !== $this->file2) {
                // do whatever you want to generate a unique name
             $this->image2 = uniqid() . '.' . $this->file2->guessExtension();
         }
     }

     public function upload2()
     {
         if (null === $this->file2) {
             return;
         }

            // if there is an error when moving the file, an exception will
            // be automatically thrown by move(). This will properly prevent
            // the entity from being persisted to the database on error
         $this->file2->move($this->getUploadRootDir(), $this->image2);

         unset($this->file2);
     }

     public function removeUpload2()
     {
         if ($file2 = $this->getAbsolutePath()) {
                unlink($file2);
         }
     }

    //image3

    public $file3;


    public function getWebPath3()
    {
        return null === $this->image3 ? null : $this->getUploadDir() . '/' . $this->image3;
    }

    public function getAbsolutePath3()
    {
        return null === $this->image3 ? null : $this->getUploadRootDir() . '/' . $this->image3;
    }


    public function preUpload3()
    {
        if (null !== $this->file3) {
            // do whatever you want to generate a unique name
            $this->image3 = uniqid() . '.' . $this->file3->guessExtension();
        }
    }

    public function upload3()
    {
        if (null === $this->file3) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file3->move($this->getUploadRootDir(), $this->image3);

        unset($this->file3);
    }

    public function removeUpload3()
    {
        if ($file3 = $this->getAbsolutePath()) {
            unlink($file3);
        }
    }

    //image4

    public $file4;


    public function getWebPath4()
    {
        return null === $this->image4 ? null : $this->getUploadDir() . '/' . $this->image4;
    }

    public function getAbsolutePath4()
    {
        return null === $this->image4 ? null : $this->getUploadRootDir() . '/' . $this->image4;
    }


    public function preUpload4()
    {
        if (null !== $this->file4) {
            // do whatever you want to generate a unique name
            $this->image4 = uniqid() . '.' . $this->file4->guessExtension();
        }
    }

    public function upload4()
    {
        if (null === $this->file4) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file4->move($this->getUploadRootDir(), $this->image4);

        unset($this->file4);
    }

    public function removeUpload4()
    {
        if ($file4 = $this->getAbsolutePath()) {
            unlink($file4);
        }
    }

    //image5

    public $file5;


    public function getWebPath5()
    {
        return null === $this->image5 ? null : $this->getUploadDir() . '/' . $this->image5;
    }

    public function getAbsolutePath5()
    {
        return null === $this->image5 ? null : $this->getUploadRootDir() . '/' . $this->image5;
    }


    public function preUpload5()
    {
        if (null !== $this->file5) {
            // do whatever you want to generate a unique name
            $this->image5 = uniqid() . '.' . $this->file5->guessExtension();
        }
    }

    public function upload5()
    {
        if (null === $this->file5) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file5->move($this->getUploadRootDir(), $this->image5);

        unset($this->file5);
    }

    public function removeUpload5()
    {
        if ($file5 = $this->getAbsolutePath()) {
            unlink($file5);
        }
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
    
    private $titre5;

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
     * Set titre
     *
     * @param string $titre
     *
     * @return Association
     */
    public function setTitre5($titre5)
    {
        $this->titre5 = $titre5;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre5()
    {
        return $this->titre5;
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
     * @var string
     */
    private $article5;


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
     * Set article5
     *
     * @param string $article5
     *
     * @return Association
     */
    public function setArticle5($article5)
    {
        $this->article5 = $article5;

        return $this;
    }

    /**
     * Get article5
     *
     * @return string
     */
    public function getArticle5()
    {
        return $this->article5;
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
     * @var string
     */
    private $image5;

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

    /**
     * Set image5
     *
     * @param string $image5
     *
     * @return Association
     */
    public function setImage5($image5)
    {
        $this->image5 = $image5;

        return $this;
    }

    /**
     * Get image5
     *
     * @return string
     */
    public function getImage5()
    {
        return $this->image5;
    }


    /**
     * @var string
     */
    private $image;


    /**
     * Set image
     *
     * @param string $image
     *
     * @return Association
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
}
