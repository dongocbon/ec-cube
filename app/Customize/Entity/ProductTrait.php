<?php
namespace Customize\Entity;
use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation\EntityExtension;

/**
 * @EntityExtension("Eccube\Entity\Product")
 * */
trait ProductTrait {
    /**
     * @ORM\Column(name="maker_name",type="string",length=255,nullable=true)
     * */
    public $makeName;
    public function getMakeName () {
        return $this->makeName;
    }
    public function setMakeName ($makeName) {
        return $this->makeName = $makeName;
    }
}
