<?php
/**
 * ProjectReportRequest.
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
 * The version of the OpenAPI document: v1.0.47
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
 * Class representing the ProjectReportRequest model.
 *
 * @author  OpenAPI Generator team
 */
class ProjectReportRequest
{
  /**
   * @var string|null
   * @SerializedName("category")
   * @Assert\Choice({ "Sexual content", "Graphic violence", "Hateful or abusive content", "Improper content rating", "Illegal prescription or other drug", "Copycat or impersonation", "Other objection" })
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $category;

  /**
   * Constructor.
   *
   * @param mixed[] $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->category = isset($data['category']) ? $data['category'] : null;
  }

  /**
   * Gets category.
   */
  public function getCategory(): ?string
  {
    return $this->category;
  }

  /**
   * Sets category.
   *
   * @return $this
   */
  public function setCategory(string $category = null)
  {
    $this->category = $category;

    return $this;
  }
}
