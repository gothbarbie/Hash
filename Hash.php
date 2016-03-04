<?php namespace Gothbarbie\Hash;
/**
 * Hash class
 *
 * Author: Hanna Söderström
 * Email:  info@hannasoderstrom.com
 *
 */
class Hash
{
    /**
   * Generates a hash from a string.
   * @param string $string
   * @return string
   */
   public function generate($string)
   {
       $options = [
           'cost' => 12,
       ];
       return password_hash($string, PASSWORD_BCRYPT, $options);
   }

  /**
   * Verifies a password with a database hash.
   * @param string $password
   * @param string $hash
   * @return boolean
   */
   public function verify($password, $hash)
   {
       return password_verify($password, $hash);
   }
}
