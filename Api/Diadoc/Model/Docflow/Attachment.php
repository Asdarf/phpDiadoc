<?php
/**
 * Auto generated from Attachment.proto at 2015-03-12 11:46:43
 *
 * CRM.Lib.Docflow.Api.Diadoc.Model.Docflow package
 */

namespace CRM\Lib\Docflow\Api\Diadoc\Model\Docflow {
/**
 * Attachment message
 */
class Attachment extends \ProtobufMessage
{
    /* Field index constants */
    const ENTITY = 1;
    const ATTACHMENTFILENAME = 2;
    const DISPLAYFILENAME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ENTITY => array(
            'name' => 'Entity',
            'required' => false,
            'type' => '\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\Entity'
        ),
        self::ATTACHMENTFILENAME => array(
            'name' => 'AttachmentFilename',
            'required' => false,
            'type' => 7,
        ),
        self::DISPLAYFILENAME => array(
            'name' => 'DisplayFilename',
            'required' => false,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::ENTITY] = null;
        $this->values[self::ATTACHMENTFILENAME] = null;
        $this->values[self::DISPLAYFILENAME] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'Entity' property
     *
     * @param \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\Entity $value Property value
     *
     * @return null
     */
    public function setEntity(\CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\Entity $value)
    {
        return $this->set(self::ENTITY, $value);
    }

    /**
     * Returns value of 'Entity' property
     *
     * @return \CRM\Lib\Docflow\Api\Diadoc\Model\Docflow\Entity
     */
    public function getEntity()
    {
        return $this->get(self::ENTITY);
    }

    /**
     * Sets value of 'AttachmentFilename' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAttachmentFilename($value)
    {
        return $this->set(self::ATTACHMENTFILENAME, $value);
    }

    /**
     * Returns value of 'AttachmentFilename' property
     *
     * @return string
     */
    public function getAttachmentFilename()
    {
        return $this->get(self::ATTACHMENTFILENAME);
    }

    /**
     * Sets value of 'DisplayFilename' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDisplayFilename($value)
    {
        return $this->set(self::DISPLAYFILENAME, $value);
    }

    /**
     * Returns value of 'DisplayFilename' property
     *
     * @return string
     */
    public function getDisplayFilename()
    {
        return $this->get(self::DISPLAYFILENAME);
    }
}
}