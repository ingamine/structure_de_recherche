<?php

namespace Gedmo\Loggable\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogEntry
 *
 * @ORM\Table(name="ext_log_entries", indexes={@ORM\Index(name="log_class_lookup_idx", columns={"object_class"}), @ORM\Index(name="log_date_lookup_idx", columns={"logged_at"}), @ORM\Index(name="log_user_lookup_idx", columns={"username"}), @ORM\Index(name="log_version_lookup_idx", columns={"object_id", "object_class", "version"})})
 * @ORM\Entity(repositoryClass="Gedmo\Loggable\Entity\Repository\LogEntryRepository")
 */
class LogEntry
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
     * @ORM\Column(name="action", type="string", length=8, precision=0, scale=0, nullable=false, unique=false)
     */
    private $action;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="logged_at", type="datetime", precision=0, scale=0, nullable=false, unique=false)
     */
    private $loggedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="object_id", type="string", length=64, precision=0, scale=0, nullable=true, unique=false)
     */
    private $objectId;

    /**
     * @var string
     *
     * @ORM\Column(name="object_class", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $objectClass;

    /**
     * @var integer
     *
     * @ORM\Column(name="version", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $version;

    /**
     * @var array
     *
     * @ORM\Column(name="data", type="array", precision=0, scale=0, nullable=true, unique=false)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $username;


}
