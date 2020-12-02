<?php
/**
 * UpdateUserRequestAllOf.
 *
 * PHP version 7.1.3
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API.
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: v1.0.48
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class representing the UpdateUserRequestAllOf model.
 *
 * @author  OpenAPI Generator team
 */
class UpdateUserRequestAllOf
{
  /**
   * @var string|null
   * @SerializedName("country")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $country;

  /**
   * Constructor.
   *
   * @param mixed[] $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->country = isset($data['country']) ? $data['country'] : null;
  }

  /**
   * Gets country.
   */
  public function getCountry(): ?string
  {
    return $this->country;
  }

  /**
   * Sets country.
   *
   * @return $this
   */
  public function setCountry(string $country = null)
  {
    $this->country = $country;

    return $this;
  }
}
