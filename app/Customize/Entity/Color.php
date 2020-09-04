<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Customize\Entity;

use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\Mapping as ORM;

if (!class_exists('\Customize\Entity\Color')) {
    /**
     * Color
     *
     * @ORM\Table(name="mtb_product_color")
     * @ORM\InheritanceType("SINGLE_TABLE")
     * @ORM\DiscriminatorColumn(name="discriminator_type", type="string", length=255)
     * @ORM\HasLifecycleCallbacks()
     * @ORM\Entity(repositoryClass="Customize\Repository\ColorRepository")
     */
    class Color extends \Eccube\Entity\AbstractEntity
    {
        /**
         * @return string
         */
        public function __toString()
        {
            return (string) $this->getName();
        }

        /**
         * @var int
         *
         * @ORM\Column(name="id", type="integer", options={"unsigned":true})
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="IDENTITY")
         */
        private $id;

        /**
         * @var string
         *
         * @ORM\Column(name="name", type="string", length=255)
         */
        private $name;

        /**
         * @var int
         *
         * @ORM\Column(name="sort_no", type="integer")
         */
        private $sort_no;

        /**
         * @var \DateTime
         *
         * @ORM\Column(name="created_date", type="datetimetz")
         */
        private $created_date;

        /**
         * @var \DateTime
         *
         * @ORM\Column(name="updated_date", type="datetimetz")
         */
        private $updated_date;

        /**
         * @var string|null
         *
         * @ORM\Column(name="description_detail", type="string", length=4000, nullable=true)
         */
        private $description_detail;

        /**
         * Get id.
         *
         * @return int
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * Set name.
         *
         * @param string $name
         *
         * @return Color
         */
        public function setName($name)
        {
            $this->name = $name;

            return $this;
        }

        /**
         * Get name.
         *
         * @return string
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * Set sortNo.
         *
         * @param int $sortNo
         *
         * @return Color
         */
        public function setSortNo($sortNo)
        {
            $this->sort_no = $sortNo;

            return $this;
        }

        /**
         * Get sortNo.
         *
         * @return int
         */
        public function getSortNo()
        {
            return $this->sort_no;
        }

        /**
         * Set description_detail.
         *
         * @param string $description_detail
         *
         * @return Color
         */
        public function setDescriptionDetail($description_detail)
        {
            $this->description_detail = $description_detail;

            return $this;
        }

        /**
         * Get description_detail.
         *
         * @return string
         */
        public function getDescriptionDetail()
        {
            return $this->description_detail;
        }

        /**
         * Set createDate.
         *
         * @param \DateTime $createdDate
         *
         * @return Color
         */
        public function setCreateDate($createdDate)
        {
            $this->created_date = $createdDate;

            return $this;
        }

        /**
         * Get createDate.
         *
         * @return \DateTime
         */
        public function getCreateDate()
        {
            return $this->created_date;
        }

        /**
         * Set updateDate.
         *
         * @param \DateTime $updatedDate
         *
         * @return Color
         */
        public function setUpdateDate($updatedDate)
        {
            $this->updated_date = $updatedDate;

            return $this;
        }

        /**
         * Get updateDate.
         *
         * @return \DateTime
         */
        public function getUpdateDate()
        {
            return $this->updated_date;
        }

    }
}
