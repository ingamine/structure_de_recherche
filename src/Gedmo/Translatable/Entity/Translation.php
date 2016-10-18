<?php

namespace Gedmo\Translatable\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Translation
 *
 * @ORM\Table(name="ext_translations", uniqueConstraints={@ORM\UniqueConstraint(name="lookup_unique_idx", columns={"locale", "object_class", "field", "foreign_key"})}, indexes={@ORM\Index(name="translations_lookup_idx", columns={"locale", "object_class", "foreign_key"})})
 * @ORM\Entity(repositoryClass="Gedmo\Translatable\Entity\Repository\TranslationRepository")
 */
class Translation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="locale", type="string", length=8, precision=0, scale=0, nullable=false, unique=false)
     */
    private $locale;

    /**
     * @var string
     *
     * @ORM\Column(name="object_class", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $objectClass;

    /**
     * @var string
     *
     * @ORM\Column(name="field", type="string", length=32, precision=0, scale=0, nullable=false, unique=false)
     */
    private $field;

    /**
     * @var string
     *
     * @ORM\Column(name="foreign_key", type="string", length=64, precision=0, scale=0, nullable=false, unique=false)
     */
    private $foreignKey;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $content;


}
