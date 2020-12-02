<?php
/**
 * AuthenticationApiInterfaceTest
 * PHP version 7.1.3.
 *
 * @category Class
 *
 * @author   openapi-generator contributors
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
 * Please update the test case below to test the endpoint.
 */

namespace OpenAPI\Server\Tests\Api;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * AuthenticationApiInterfaceTest Class Doc Comment.
 *
 * @category Class
 *
 * @author   openapi-generator contributors
 *
 * @see     https://github.com/openapitools/openapi-generator
 *
 * @internal
 * @coversNothing
 */
class AuthenticationApiInterfaceTest extends WebTestCase
{
  /**
   * Setup before running any test cases.
   */
  public static function setUpBeforeClass()
  {
  }

  /**
   * Clean up after running all test cases.
   */
  public static function tearDownAfterClass()
  {
  }

  /**
   * Setup before running each test case.
   */
  public function setUp()
  {
  }

  /**
   * Clean up after running each test case.
   */
  public function tearDown()
  {
  }

  /**
   * Test case for authenticationGet.
   *
   * Check token.
   */
  public function testAuthenticationGet()
  {
    $client = static::createClient();

    $path = '/authentication';

    $crawler = $client->request('GET', $path);
  }

  /**
   * Test case for authenticationLogoutPost.
   *
   * Expires refresh token.
   */
  public function testAuthenticationLogoutPost()
  {
    $client = static::createClient();

    $path = '/authentication/logout';

    $crawler = $client->request('POST', $path, [], [], ['CONTENT_TYPE' => 'application/json']);
  }

  /**
   * Test case for authenticationOauthPost.
   *
   * OAuth Login.
   */
  public function testAuthenticationOauthPost()
  {
    $client = static::createClient();

    $path = '/authentication/oauth';

    $crawler = $client->request('POST', $path, [], [], ['CONTENT_TYPE' => 'application/json']);
  }

  /**
   * Test case for authenticationPost.
   *
   * Login.
   */
  public function testAuthenticationPost()
  {
    $client = static::createClient();

    $path = '/authentication';

    $crawler = $client->request('POST', $path, [], [], ['CONTENT_TYPE' => 'application/json']);
  }

  /**
   * Test case for authenticationRefreshPost.
   *
   * Refresh token.
   */
  public function testAuthenticationRefreshPost()
  {
    $client = static::createClient();

    $path = '/authentication/refresh';

    $crawler = $client->request('POST', $path, [], [], ['CONTENT_TYPE' => 'application/json']);
  }

  protected function genTestData($regexp)
  {
    $grammar = new \Hoa\File\Read('hoa://Library/Regex/Grammar.pp');
    $compiler = \Hoa\Compiler\Llk\Llk::load($grammar);
    $ast = $compiler->parse($regexp);
    $generator = new \Hoa\Regex\Visitor\Isotropic(new \Hoa\Math\Sampler\Random());

    return $generator->visit($ast);
  }
}
