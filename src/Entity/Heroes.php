<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(itemOperations={
 *         "get",
 *         "post_heroes"={
 *             "controller"=CreateHeroes::class,
 *             "method"="POST",
 *             "path"="/heroes/post"
 *         }
 *     })
 * @ORM\Entity(repositoryClass="App\Repository\HeroesRepository")
 */
class Heroes
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $height;

    /**
     * @ORM\Column(type="integer")
     */
    private $mass;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $hair_color;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $skin_color;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $eye_color;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $birth_year;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $gender;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getMass(): ?int
    {
        return $this->mass;
    }

    public function setMass(int $mass): self
    {
        $this->mass = $mass;

        return $this;
    }

    public function getHairColor(): ?string
    {
        return $this->hair_color;
    }

    public function setHairColor(string $hair_color): self
    {
        $this->hair_color = $hair_color;

        return $this;
    }

    public function getSkinColor(): ?string
    {
        return $this->skin_color;
    }

    public function setSkinColor(string $skin_color): self
    {
        $this->skin_color = $skin_color;

        return $this;
    }

    public function getEyeColor(): ?string
    {
        return $this->eye_color;
    }

    public function setEyeColor(string $eye_color): self
    {
        $this->eye_color = $eye_color;

        return $this;
    }

    public function getBirthYear(): ?string
    {
        return $this->birth_year;
    }

    public function setBirthYear(string $birth_year): self
    {
        $this->birth_year = $birth_year;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }
}
