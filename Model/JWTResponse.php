<?php
/**
 * JWTResponse.
 *
 * PHP version 8.1.1
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
 * The version of the OpenAPI document: v1.1.11
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
 * Class representing the JWTResponse model.
 *
 * @author  OpenAPI Generator team
 */
class JWTResponse
{
  /**
   * @SerializedName("token")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $token = null;

  /**
   * @SerializedName("refresh_token")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $refresh_token = null;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->token = $data['token'] ?? null;
    $this->refresh_token = $data['refresh_token'] ?? null;
  }

  /**
   * Gets token.
   */
  public function getToken(): ?string
  {
    return $this->token;
  }

  /**
   * Sets token.
   *
   * @return $this
   */
  public function setToken(?string $token = null): self
  {
    $this->token = $token;

    return $this;
  }

  /**
   * Gets refresh_token.
   */
  public function getRefreshToken(): ?string
  {
    return $this->refresh_token;
  }

  /**
   * Sets refresh_token.
   *
   * @return $this
   */
  public function setRefreshToken(?string $refresh_token = null): self
  {
    $this->refresh_token = $refresh_token;

    return $this;
  }
}
