<?php
/**
 * NotificationsCountResponse.
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
 * The version of the OpenAPI document: v1.0.49
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
 * Class representing the NotificationsCountResponse model.
 *
 * @author  OpenAPI Generator team
 */
class NotificationsCountResponse
{
  /**
   * @var int|null
   * @SerializedName("total")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected $total;

  /**
   * @var int|null
   * @SerializedName("like")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected $like;

  /**
   * @var int|null
   * @SerializedName("follower")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected $follower;

  /**
   * @var int|null
   * @SerializedName("comment")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected $comment;

  /**
   * @var int|null
   * @SerializedName("remix")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected $remix;

  /**
   * Constructor.
   *
   * @param mixed[] $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->total = isset($data['total']) ? $data['total'] : null;
    $this->like = isset($data['like']) ? $data['like'] : null;
    $this->follower = isset($data['follower']) ? $data['follower'] : null;
    $this->comment = isset($data['comment']) ? $data['comment'] : null;
    $this->remix = isset($data['remix']) ? $data['remix'] : null;
  }

  /**
   * Gets total.
   */
  public function getTotal(): ?int
  {
    return $this->total;
  }

  /**
   * Sets total.
   *
   * @return $this
   */
  public function setTotal(int $total = null)
  {
    $this->total = $total;

    return $this;
  }

  /**
   * Gets like.
   */
  public function getLike(): ?int
  {
    return $this->like;
  }

  /**
   * Sets like.
   *
   * @return $this
   */
  public function setLike(int $like = null)
  {
    $this->like = $like;

    return $this;
  }

  /**
   * Gets follower.
   */
  public function getFollower(): ?int
  {
    return $this->follower;
  }

  /**
   * Sets follower.
   *
   * @return $this
   */
  public function setFollower(int $follower = null)
  {
    $this->follower = $follower;

    return $this;
  }

  /**
   * Gets comment.
   */
  public function getComment(): ?int
  {
    return $this->comment;
  }

  /**
   * Sets comment.
   *
   * @return $this
   */
  public function setComment(int $comment = null)
  {
    $this->comment = $comment;

    return $this;
  }

  /**
   * Gets remix.
   */
  public function getRemix(): ?int
  {
    return $this->remix;
  }

  /**
   * Sets remix.
   *
   * @return $this
   */
  public function setRemix(int $remix = null)
  {
    $this->remix = $remix;

    return $this;
  }
}
