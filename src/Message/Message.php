<?php

namespace App\Message;

use App\Validator\FrenchPhoneNumber;
use Symfony\Component\Validator\Constraints as Assert;

class Message
{
    /**
     * @Assert\Length(min=5)
     */
    private ?string $title;


    /**
     * @Assert\NotBlank
     * @Assert\Length(max=2000)
     */
    private ?string $content;

    /**
     * @Assert\NotBlank
     */
    private ?string $username;

    /**
     * Assert\NotBlank
     */
    private ?string $email;

    /**
     * @FrenchPhoneNumber()
     */
    private ?string $phoneNumber;

    /**
     * @Assert\Choice(callback="getTypes")
     */
    private ?string $type;

    public static function getTypes()
    {
        return ['petites annonces', 'blog', 'information'];
    }


    /**
     * Get the value of title
     *
     * @return ?string
     */

    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @param ?string $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of content
     *
     * @return ?string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @param ?string $content
     *
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of username
     *
     * @return ?string
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @param ?string $username
     *
     * @return self
     */
    public function setUsername(?string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of type
     *
     * @return ?string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @param ?string $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of email
     *
     * @return ?string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param ?string $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }
}

