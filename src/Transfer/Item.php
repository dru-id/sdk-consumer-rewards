<?php namespace ConsumerRewards\SDK\Transfer;

use JMS\Serializer\Annotation\Type;

class Item
{
    /**
     * @var string
     * @Type("string")
     */
    protected $objectId;

    /**
     * @var string
     * @Type("string")
     */
    protected $key;

    /**
     * @var string
     * @Type("string")
     */
    protected $displayName;

    /**
     * @var string
     * @Type("string")
     */
    protected $caption;

    /**
     * @var string
     * @Type("string")
     */
    protected $url;

    /**
     * @var Document $document
     * @Type("ConsumerRewards\SDK\Transfer\Document")
     */
    protected $document;

    /**
     * @var string
     * @Type("string")
     */
    protected $createdOn;

    /**
     * @var string
     * @Type("string")
     */
    protected $publishedOn;

    /**
     * @var string
     * @Type("string")
     */
    protected $expiresOn;

    /**
     * Item constructor.
     * @param string $objectId
     * @param string $key
     * @param string $displayName
     * @param string $caption
     * @param string $url
     * @param Document $document
     * @param string $createdOn
     * @param string $publishedOn
     * @param string $expiresOn
     */
    public function __construct(string $objectId, string $key, string $displayName, string $caption, string $url, Document $document, string $publishedOn, string $expiresOn)
    {
        $this->objectId = $objectId;
        $this->key = $key;
        $this->displayName = $displayName;
        $this->caption = $caption;
        $this->url = $url;
        $this->document = $document;
        $this->publishedOn = $publishedOn;
        $this->expiresOn = $expiresOn;
    }

    /**
     * @return string
     */
    public function getObjectId(): string
    {
        return $this->objectId;
    }

    /**
     * @param string $objectId
     * @return Item
     */
    public function setObjectId(string $objectId): Item
    {
        $this->objectId = $objectId;
        return $this;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return Item
     */
    public function setKey(string $key): Item
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return Item
     */
    public function setDisplayName(string $displayName): Item
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCaption(): string
    {
        return $this->caption;
    }

    /**
     * @param string $caption
     * @return Item
     */
    public function setCaption(string $caption): Item
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return Item
     */
    public function setUrl(string $url): Item
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return Document
     */
    public function getDocument(): Document
    {
        return $this->document;
    }

    /**
     * @param Document $document
     * @return Item
     */
    public function setDocument(Document $document): Item
    {
        $this->document = $document;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedOn(): string
    {
        return $this->createdOn;
    }

    /**
     * @param string $createdOn
     * @return Item
     */
    public function setCreatedOn(string $createdOn): Item
    {
        $this->createdOn = $createdOn;
        return $this;
    }

    /**
     * @return string
     */
    public function getPublishedOn(): string
    {
        return $this->publishedOn;
    }

    /**
     * @param string $publishedOn
     * @return Item
     */
    public function setPublishedOn(string $publishedOn): Item
    {
        $this->publishedOn = $publishedOn;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpiresOn(): string
    {
        return $this->expiresOn;
    }

    /**
     * @param string $expiresOn
     * @return Item
     */
    public function setExpiresOn(string $expiresOn): Item
    {
        $this->expiresOn = $expiresOn;
        return $this;
    }

}