<?php declare (strict_types=1);

namespace Elate\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

/**
 * @ApiResource(
 *  itemOperations={"get"},
 *  collectionOperations={"post", "get"}
 * )
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
     * @ORM\Column(type="string", nullable=true)
     * @var string|null
     */
    public $email;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string|null
     */
    public $phone;


    public function __construct()
    {
        $this->id = Uuid::uuid4();
    }


    public function getId(): UuidInterface
    {
        return $this->id;
    }


    public function getEmail(): ?string
    {
        return $this->email;
    }


    public function getPhone(): ?string
    {
        return $this->phone;
    }
}
