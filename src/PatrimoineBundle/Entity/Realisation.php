<?php

namespace PatrimoineBundle\Entity;

/**
 * Realisation
 */
class Realisation
{



    /*
    * A NE PASSER QU'UNE FOIS
    */
    protected function getUploadDir()
    {
        return 'uploads';
    }

    protected function getUploadRootDir()
    {
        return __DIR__ . '/../../../web/' . $this->getUploadDir();
    }

    /*
     * FIN BLOC UNIQUE
     */


    /*
     * IMAGE 1
     */

    public $file1;


    public function preUpload()
    {
        if (null !== $this->file1) {
            // do whatever you want to generate a unique name
            $this->image1 = uniqid() . '.' . $this->file1->guessExtension();
        }
    }

    public function upload()
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

    public function removeUpload()
    {
        if ($file1 = $this->getAbsolutePath()) {
            unlink($file1);
        }
    }

    public function getWebPath()
    {
        return null === $this->image1 ? null : $this->getUploadDir() . '/' . $this->image1;
    }

    public function getAbsolutePath()
    {
        return null === $this->image1 ? null : $this->getUploadRootDir() . '/' . $this->image1;
    }
    /*
     * FIN IMAGE 1
     */

    /*
     * IMAGE 2
     */

    public $file2;


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

    public function getWebPath2()
    {
        return null === $this->image2 ? null : $this->getUploadDir() . '/' . $this->image2;
    }

    public function getAbsolutePath2()
    {
        return null === $this->image2 ? null : $this->getUploadRootDir() . '/' . $this->image2;
    }
    /*
     * FIN IMAGE 2
     */


    /*
     * IMAGE 3
     */

    public $file3;


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

    public function getWebPath3()
    {
        return null === $this->image3 ? null : $this->getUploadDir() . '/' . $this->image3;
    }

    public function getAbsolutePath3()
    {
        return null === $this->image3 ? null : $this->getUploadRootDir() . '/' . $this->image3;
    }
    /*
     * FIN IMAGE 3
     */


    /*
     * IMAGE 4
     */

    public $file4;


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

    public function getWebPath4()
    {
        return null === $this->image4 ? null : $this->getUploadDir() . '/' . $this->image4;
    }

    public function getAbsolutePath4()
    {
        return null === $this->image4 ? null : $this->getUploadRootDir() . '/' . $this->image4;
    }
    /*
     * FIN IMAGE 4
     */

    /*
     * IMAGE 5
     */

    public $file5;


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

    public function getWebPath5()
    {
        return null === $this->image5 ? null : $this->getUploadDir() . '/' . $this->image5;
    }

    public function getAbsolutePath5()
    {
        return null === $this->image5 ? null : $this->getUploadRootDir() . '/' . $this->image5;
    }
    /*
     * FIN IMAGE 5
     */

    /*
     * IMAGE 6
     */

    public $file6;


    public function preUpload6()
    {
        if (null !== $this->file6) {
            // do whatever you want to generate a unique name
            $this->image6 = uniqid() . '.' . $this->file6->guessExtension();
        }
    }

    public function upload6()
    {
        if (null === $this->file6) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file6->move($this->getUploadRootDir(), $this->image6);

        unset($this->file6);
    }

    public function removeUpload6()
    {
        if ($file6= $this->getAbsolutePath()) {
            unlink($file6);
        }
    }

    public function getWebPath6()
    {
        return null === $this->image6 ? null : $this->getUploadDir() . '/' . $this->image6;
    }

    public function getAbsolutePath6()
    {
        return null === $this->image6 ? null : $this->getUploadRootDir() . '/' . $this->image6;
    }
    /*
     * FIN IMAGE 6
     */


    /*
     * IMAGE 7
     */

    public $file7;


    public function preUpload7()
    {
        if (null !== $this->file7) {
            // do whatever you want to generate a unique name
            $this->image7 = uniqid() . '.' . $this->file7->guessExtension();
        }
    }

    public function upload7()
    {
        if (null === $this->file7) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file7->move($this->getUploadRootDir(), $this->image7);

        unset($this->file7);
    }

    public function removeUpload7()
    {
        if ($file7= $this->getAbsolutePath()) {
            unlink($file7);
        }
    }

    public function getWebPath7()
    {
        return null === $this->image7 ? null : $this->getUploadDir() . '/' . $this->image7;
    }

    public function getAbsolutePath7()
    {
        return null === $this->image7 ? null : $this->getUploadRootDir() . '/' . $this->image7;
    }
    /*
     * FIN IMAGE 7
     */

    /*
     * IMAGE 8
     */

    public $file8;


    public function preUpload8()
    {
        if (null !== $this->file8) {
            // do whatever you want to generate a unique name
            $this->image8 = uniqid() . '.' . $this->file8->guessExtension();
        }
    }

    public function upload8()
    {
        if (null === $this->file8) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file8->move($this->getUploadRootDir(), $this->image8);

        unset($this->file8);
    }

    public function removeUpload8()
    {
        if ($file8 = $this->getAbsolutePath()) {
            unlink($file8);
        }
    }

    public function getWebPath8()
    {
        return null === $this->image8 ? null : $this->getUploadDir() . '/' . $this->image8;
    }

    public function getAbsolutePath8()
    {
        return null === $this->image8 ? null : $this->getUploadRootDir() . '/' . $this->image8;
    }
    /*
     * FIN IMAGE 8
     */

    /*
     * IMAGE 9
     */

    public $file9;


    public function preUpload9()
    {
        if (null !== $this->file9) {
            // do whatever you want to generate a unique name
            $this->image9 = uniqid() . '.' . $this->file9->guessExtension();
        }
    }

    public function upload9()
    {
        if (null === $this->file9) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file9->move($this->getUploadRootDir(), $this->image9);

        unset($this->file9);
    }

    public function removeUpload9()
    {
        if ($file9 = $this->getAbsolutePath()) {
            unlink($file9);
        }
    }

    public function getWebPath9()
    {
        return null === $this->image9 ? null : $this->getUploadDir() . '/' . $this->image9;
    }

    public function getAbsolutePath9()
    {
        return null === $this->image9 ? null : $this->getUploadRootDir() . '/' . $this->image9;
    }
    /*
     * FIN IMAGE 9
     */

    /*
     * IMAGE 10
     */

    public $file10;


    public function preUpload10()
    {
        if (null !== $this->file10) {
            // do whatever you want to generate a unique name
            $this->image10 = uniqid() . '.' . $this->file10->guessExtension();
        }
    }

    public function upload10()
    {
        if (null === $this->file10) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file10->move($this->getUploadRootDir(), $this->image10);

        unset($this->file10);
    }

    public function removeUpload10()
    {
        if ($file10 = $this->getAbsolutePath()) {
            unlink($file10);
        }
    }

    public function getWebPath10()
    {
        return null === $this->image10 ? null : $this->getUploadDir() . '/' . $this->image10;
    }

    public function getAbsolutePath10()
    {
        return null === $this->image10 ? null : $this->getUploadRootDir() . '/' . $this->image10;
    }
    /*
     * FIN IMAGE 10
     */

    /* ENTITES GENEREES */
    /**
     * @var int
     */
    private $id;


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
     * @var string
     */
    private $titre1;

    /**
     * @var string
     */
    private $article1;

    /**
     * @var string
     */
    private $titre2;

    /**
     * @var string
     */
    private $article2;

    /**
     * @var string
     */
    private $titre3;

    /**
     * @var string
     */
    private $article3;

    /**
     * @var string
     */
    private $titre4;

    /**
     * @var string
     */
    private $article4;

    /**
     * @var string
     */
    private $titre5;

    /**
     * @var string
     */
    private $article5;

    /**
     * @var string
     */
    private $titre6;

    /**
     * @var string
     */
    private $article6;

    /**
     * @var string
     */
    private $titre7;

    /**
     * @var string
     */
    private $article7;

    /**
     * @var string
     */
    private $titre8;

    /**
     * @var string
     */
    private $article8;

    /**
     * @var string
     */
    private $titre9;

    /**
     * @var string
     */
    private $article9;

    /**
     * @var string
     */
    private $titre10;

    /**
     * @var string
     */
    private $article10;


    /**
     * Set titre1
     *
     * @param string $titre1
     *
     * @return Realisation
     */
    public function setTitre1($titre1)
    {
        $this->titre1 = $titre1;

        return $this;
    }

    /**
     * Get titre1
     *
     * @return string
     */
    public function getTitre1()
    {
        return $this->titre1;
    }

    /**
     * Set article1
     *
     * @param string $article1
     *
     * @return Realisation
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
     * Set titre2
     *
     * @param string $titre2
     *
     * @return Realisation
     */
    public function setTitre2($titre2)
    {
        $this->titre2 = $titre2;

        return $this;
    }

    /**
     * Get titre2
     *
     * @return string
     */
    public function getTitre2()
    {
        return $this->titre2;
    }

    /**
     * Set article2
     *
     * @param string $article2
     *
     * @return Realisation
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
     * Set titre3
     *
     * @param string $titre3
     *
     * @return Realisation
     */
    public function setTitre3($titre3)
    {
        $this->titre3 = $titre3;

        return $this;
    }

    /**
     * Get titre3
     *
     * @return string
     */
    public function getTitre3()
    {
        return $this->titre3;
    }

    /**
     * Set article3
     *
     * @param string $article3
     *
     * @return Realisation
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
     * Set titre4
     *
     * @param string $titre4
     *
     * @return Realisation
     */
    public function setTitre4($titre4)
    {
        $this->titre4 = $titre4;

        return $this;
    }

    /**
     * Get titre4
     *
     * @return string
     */
    public function getTitre4()
    {
        return $this->titre4;
    }

    /**
     * Set article4
     *
     * @param string $article4
     *
     * @return Realisation
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
     * Set titre5
     *
     * @param string $titre5
     *
     * @return Realisation
     */
    public function setTitre5($titre5)
    {
        $this->titre5 = $titre5;

        return $this;
    }

    /**
     * Get titre5
     *
     * @return string
     */
    public function getTitre5()
    {
        return $this->titre5;
    }

    /**
     * Set article5
     *
     * @param string $article5
     *
     * @return Realisation
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
     * Set titre6
     *
     * @param string $titre6
     *
     * @return Realisation
     */
    public function setTitre6($titre6)
    {
        $this->titre6 = $titre6;

        return $this;
    }

    /**
     * Get titre6
     *
     * @return string
     */
    public function getTitre6()
    {
        return $this->titre6;
    }

    /**
     * Set article6
     *
     * @param string $article6
     *
     * @return Realisation
     */
    public function setArticle6($article6)
    {
        $this->article6 = $article6;

        return $this;
    }

    /**
     * Get article6
     *
     * @return string
     */
    public function getArticle6()
    {
        return $this->article6;
    }

    /**
     * Set titre7
     *
     * @param string $titre7
     *
     * @return Realisation
     */
    public function setTitre7($titre7)
    {
        $this->titre7 = $titre7;

        return $this;
    }

    /**
     * Get titre7
     *
     * @return string
     */
    public function getTitre7()
    {
        return $this->titre7;
    }

    /**
     * Set article7
     *
     * @param string $article7
     *
     * @return Realisation
     */
    public function setArticle7($article7)
    {
        $this->article7 = $article7;

        return $this;
    }

    /**
     * Get article7
     *
     * @return string
     */
    public function getArticle7()
    {
        return $this->article7;
    }

    /**
     * Set titre8
     *
     * @param string $titre8
     *
     * @return Realisation
     */
    public function setTitre8($titre8)
    {
        $this->titre8 = $titre8;

        return $this;
    }

    /**
     * Get titre8
     *
     * @return string
     */
    public function getTitre8()
    {
        return $this->titre8;
    }

    /**
     * Set article8
     *
     * @param string $article8
     *
     * @return Realisation
     */
    public function setArticle8($article8)
    {
        $this->article8 = $article8;

        return $this;
    }

    /**
     * Get article8
     *
     * @return string
     */
    public function getArticle8()
    {
        return $this->article8;
    }

    /**
     * Set titre9
     *
     * @param string $titre9
     *
     * @return Realisation
     */
    public function setTitre9($titre9)
    {
        $this->titre9 = $titre9;

        return $this;
    }

    /**
     * Get titre9
     *
     * @return string
     */
    public function getTitre9()
    {
        return $this->titre9;
    }

    /**
     * Set article9
     *
     * @param string $article9
     *
     * @return Realisation
     */
    public function setArticle9($article9)
    {
        $this->article9 = $article9;

        return $this;
    }

    /**
     * Get article9
     *
     * @return string
     */
    public function getArticle9()
    {
        return $this->article9;
    }

    /**
     * Set titre10
     *
     * @param string $titre10
     *
     * @return Realisation
     */
    public function setTitre10($titre10)
    {
        $this->titre10 = $titre10;

        return $this;
    }

    /**
     * Get titre10
     *
     * @return string
     */
    public function getTitre10()
    {
        return $this->titre10;
    }

    /**
     * Set article10
     *
     * @param string $article10
     *
     * @return Realisation
     */
    public function setArticle10($article10)
    {
        $this->article10 = $article10;

        return $this;
    }

    /**
     * Get article10
     *
     * @return string
     */
    public function getArticle10()
    {
        return $this->article10;
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
     * @var string
     */
    private $image6;

    /**
     * @var string
     */
    private $image7;

    /**
     * @var string
     */
    private $image8;

    /**
     * @var string
     */
    private $image9;

    /**
     * @var string
     */
    private $image10;


    /**
     * Set image1
     *
     * @param string $image1
     *
     * @return Realisation
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
     * @return Realisation
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
     * @return Realisation
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
     * @return Realisation
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
     * @return Realisation
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
     * Set image6
     *
     * @param string $image6
     *
     * @return Realisation
     */
    public function setImage6($image6)
    {
        $this->image6 = $image6;

        return $this;
    }

    /**
     * Get image6
     *
     * @return string
     */
    public function getImage6()
    {
        return $this->image6;
    }

    /**
     * Set image7
     *
     * @param string $image7
     *
     * @return Realisation
     */
    public function setImage7($image7)
    {
        $this->image7 = $image7;

        return $this;
    }

    /**
     * Get image7
     *
     * @return string
     */
    public function getImage7()
    {
        return $this->image7;
    }

    /**
     * Set image8
     *
     * @param string $image8
     *
     * @return Realisation
     */
    public function setImage8($image8)
    {
        $this->image8 = $image8;

        return $this;
    }

    /**
     * Get image8
     *
     * @return string
     */
    public function getImage8()
    {
        return $this->image8;
    }

    /**
     * Set image9
     *
     * @param string $image9
     *
     * @return Realisation
     */
    public function setImage9($image9)
    {
        $this->image9 = $image9;

        return $this;
    }

    /**
     * Get image9
     *
     * @return string
     */
    public function getImage9()
    {
        return $this->image9;
    }

    /**
     * Set image10
     *
     * @param string $image10
     *
     * @return Realisation
     */
    public function setImage10($image10)
    {
        $this->image10 = $image10;

        return $this;
    }

    /**
     * Get image10
     *
     * @return string
     */
    public function getImage10()
    {
        return $this->image10;
    }
}
