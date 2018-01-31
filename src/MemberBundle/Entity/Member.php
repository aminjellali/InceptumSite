<?php

namespace MemberBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Member
 *
 * @ORM\Table(name="member")
 * @ORM\Entity
 * @Vich\Uploadable
 */
class Member
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;


    /**
     * @var string
     *
     * @ORM\Column(name="pole", type="string", length=50, nullable=true)
     */
    private $pole;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=50, nullable=true)
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="LinkLinkidin", type="string", length=50, nullable=true)
     */
    private $linklinkidin;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPole()
    {
        return $this->pole;
    }

    /**
     * @param string $pole
     */
    public function setPole($pole)
    {
        $this->pole = $pole;
    }

    /**
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param string $statut
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    }

    /**
     * @return string
     */
    public function getLinklinkidin()
    {
        return $this->linklinkidin;
    }

    /**
     * @param string $linklinkidin
     */
    public function setLinklinkidin($linklinkidin)
    {
        $this->linklinkidin = $linklinkidin;
    }

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $image;

    /**
     * @Vich\UploadableField(mapping="member_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;



    // ...

    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;


    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }


}

