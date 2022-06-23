<?php
/**
 * SearchResponse.
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
 * The version of the OpenAPI document: v1.1.15
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
 * Class representing the SearchResponse model.
 *
 * @author  OpenAPI Generator team
 */
class SearchResponse
{
  /**
   * Array of projects.
   *
   * @SerializedName("projects")
   * @Assert\All({
   *   @Assert\Type("OpenAPI\Server\Model\ProjectResponse")
   * })
   * @Type("array<OpenAPI\Server\Model\ProjectResponse>")
   */
  protected ?array $projects = null;

  /**
   * @SerializedName("projects_total")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected ?int $projects_total = null;

  /**
   * Array of users.
   *
   * @SerializedName("users")
   * @Assert\All({
   *   @Assert\Type("OpenAPI\Server\Model\BasicUserDataResponse")
   * })
   * @Type("array<OpenAPI\Server\Model\BasicUserDataResponse>")
   */
  protected ?array $users = null;

  /**
   * @SerializedName("users_total")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected ?int $users_total = null;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->projects = $data['projects'] ?? null;
    $this->projects_total = $data['projects_total'] ?? null;
    $this->users = $data['users'] ?? null;
    $this->users_total = $data['users_total'] ?? null;
  }

  /**
   * Gets projects.
   */
  public function getProjects(): ?array
  {
    return $this->projects;
  }

  /**
   * Sets projects.
   *
   * @param array|null $projects Array of projects
   *
   * @return $this
   */
  public function setProjects(?array $projects = null): self
  {
    $this->projects = $projects;

    return $this;
  }

  /**
   * Gets projects_total.
   */
  public function getProjectsTotal(): ?int
  {
    return $this->projects_total;
  }

  /**
   * Sets projects_total.
   *
   * @return $this
   */
  public function setProjectsTotal(?int $projects_total = null): self
  {
    $this->projects_total = $projects_total;

    return $this;
  }

  /**
   * Gets users.
   */
  public function getUsers(): ?array
  {
    return $this->users;
  }

  /**
   * Sets users.
   *
   * @param array|null $users Array of users
   *
   * @return $this
   */
  public function setUsers(?array $users = null): self
  {
    $this->users = $users;

    return $this;
  }

  /**
   * Gets users_total.
   */
  public function getUsersTotal(): ?int
  {
    return $this->users_total;
  }

  /**
   * Sets users_total.
   *
   * @return $this
   */
  public function setUsersTotal(?int $users_total = null): self
  {
    $this->users_total = $users_total;

    return $this;
  }
}
