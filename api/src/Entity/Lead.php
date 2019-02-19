<?php declare (strict_types=1);

namespace Elate\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\UuidInterface;

/**
 * @ORM\Entity
 */
class Lead
{
    /**
     * @var UuidInterface
     * @ORM\Id
     * @ORM\Column(type="uuid")
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=TRUE)
     * @var string|null
     */
    private $email;

    /**
     * @ORM\Column(type="string", nullable=TRUE)
     * @var string|null
     */
    private $phone;


    public function __construct(UuidInterface $id)
    {
        $this->id = $id;
    }


    public function id(): UuidInterface
    {
        return $this->id;
    }


    public function email(): ?string
    {
        return $this->email;
    }


    public function phone(): ?string
    {
        return $this->phone;
    }
}
