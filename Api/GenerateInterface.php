<?php
/**
 * Literacis Software.
 *
 * @package   Literacis_CodeGenerator
 * @author    Ajay Kumar
 */

namespace Literacis\CodeGenerator\Api;

/**
 * Interface GenerateInterface
 */
interface GenerateInterface
{

    /**
     * generate code
     *
     * @param [] $data
     * @return boolean
     */
    public function execute($data);

}
