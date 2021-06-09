<?php
/**
 * Literacis Software.
 *
 * @package   Literacis_CodeGenerator
 * @author    Ajay Kumar
 */

namespace Literacis\CodeGenerator\Api;

/**
 * Interface ValidatorInterface
 */
interface ValidatorInterface
{

    /**
     * generate code
     *
     * @param [] $data
     * @return boolean
     */
    public function validate($data);

}
