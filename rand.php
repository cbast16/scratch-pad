<?php
  /**
   * rand - Generate a random number
   * 
   * https://secure.php.net/manual/en/function.rand.php
   */

  // By default, rand generates a random number between 0 and getrandmax()
  echo rand() . "\n";

  // You may optionally pass in a min and max value
  echo rand(1, 10);

  /**
   * NOTES:
   * rand can be used to generate placeholder data for testing, 
   * randomize quiz answers, computer generated art and many other
   * places.
   *
   * rand SHOULD NOT be used to generate passwords, unique ids or
   * for cryptography.
   */

?>