<?php
/**
 * MIMAS API
 *
 * Helpers
 *
 * Various Helpers. Currently just a wrapper around Selene XML
 *
 * @package      MIMAS
 * @subpackage
 * @category     API
 * @author       Petros Diveris <petros.diveris@manchester.ac.uk>
 *
 * @todo         Implement XML serialisation as an injectable dependency
 * @todo         Write unit tests for XML encoding
 */
namespace MIMAS;
use \Selene\Components\Xml\Writer;
/**
 * Class Helpers
 * @package MIMAS
 */
class Helpers {

  /**
   * XML encoder wrapper method
   * @param $object
   * @return string
   */
  public static function xmlEncode($object) {
    $writer = new Writer(new \Selene\Components\Xml\Normalizer\BobNormalizer());

    return $writer->dump($object);
  }

}