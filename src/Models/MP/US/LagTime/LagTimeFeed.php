<?php

/**
 * LagTimeFeed
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */

/**
 * Lag Time
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\LagTime;
use Walmart\Models\BaseModel;

/**
 * LagTimeFeed Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class LagTimeFeed extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'LagTimeFeed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'lagTimeHeader' => '\Walmart\Models\MP\US\LagTime\UpdateLagTimeBulkRequestLagTimeHeader',
        'lagTime' => '\Walmart\Models\MP\US\LagTime\UpdateLagTimeBulkRequestLagTimeInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'lagTimeHeader' => null,
        'lagTime' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'lagTimeHeader' => false,
        'lagTime' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'lagTimeHeader' => 'lagTimeHeader',
        'lagTime' => 'lagTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'lagTimeHeader' => 'setLagTimeHeader',
        'lagTime' => 'setLagTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'lagTimeHeader' => 'getLagTimeHeader',
        'lagTime' => 'getLagTime'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('lagTimeHeader', $data ?? [], null);
        $this->setIfExists('lagTime', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['lagTimeHeader'] === null) {
            $invalidProperties[] = "'lagTimeHeader' can't be null";
        }

        return $invalidProperties;
    }
    /**
     * Gets lagTimeHeader
     *
     * @return \Walmart\Models\MP\US\LagTime\UpdateLagTimeBulkRequestLagTimeHeader
    
     */
    public function getLagTimeHeader()
    {
        return $this->container['lagTimeHeader'];
    }

    /**
     * Sets lagTimeHeader
     *
     * @param \Walmart\Models\MP\US\LagTime\UpdateLagTimeBulkRequestLagTimeHeader $lagTimeHeader lagTimeHeader
     *
     * @return self
    
     */
    public function setLagTimeHeader($lagTimeHeader)
    {
        if (is_null($lagTimeHeader)) {
            throw new \InvalidArgumentException('non-nullable lagTimeHeader cannot be null');
        }

        $this->container['lagTimeHeader'] = $lagTimeHeader;
        return $this;
    }

    /**
     * Gets lagTime
     *
     * @return \Walmart\Models\MP\US\LagTime\UpdateLagTimeBulkRequestLagTimeInner[]|null
    
     */
    public function getLagTime()
    {
        return $this->container['lagTime'];
    }

    /**
     * Sets lagTime
     *
     * @param \Walmart\Models\MP\US\LagTime\UpdateLagTimeBulkRequestLagTimeInner[]|null $lagTime lagTime
     *
     * @return self
    
     */
    public function setLagTime($lagTime)
    {
        if (is_null($lagTime)) {
            throw new \InvalidArgumentException('non-nullable lagTime cannot be null');
        }

        $this->container['lagTime'] = $lagTime;
        return $this;
    }
}

