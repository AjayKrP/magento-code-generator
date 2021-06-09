<?php
/**
 * Literacis Software.
 *
 * @package   Literacis_CodeGenerator
 * @author    Ajay Kumar
 */

namespace Literacis\CodeGenerator\Model;

/**
 * Class GeneratorPool
 */
class GeneratorPool
{

    protected $generators = [];

    public function __construct(
        $generators = []
    ) {
        $this->generators = $generators;
    }

    /**
     * get generator class
     *
     * @param string $key
     * @return Literacis\CodeGenerator\Api\GenerateInterface
     */
    public function get($key)
    {
        if (isset($this->generators[$key])) {
            return $this->generators[$key];
        }

        throw new \Magento\Framework\Exception\LocalizedException(__("invalid generator"));
    }
}
