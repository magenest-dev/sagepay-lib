<?php
/**
 * Created by Magenest JSC.
 * Author: Jacob
 * Date: 18/01/2019
 * Time: 9:41
 */

namespace Magenest\SagepayLib\Classes;


class SagepayDiscount
{
    private $_description = '';

    private $_fixed = 0;

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->_description;
    }

    public function setDescription($description)
    {
        $this->_description = $description;
    }

    public function setFixed($fixed){
        $this->_fixed = $fixed;
    }

    public function getFixed(){
        return $this->_fixed;
    }

    /**
     * Create a DOMNode from property
     *
     * @param \DOMDocument $basket
     *
     * @return \DOMNode
     */
    public function asDomElement(\DOMDocument $basket)
    {
        $element = $basket->createElement('discount');
        $fixed = $basket->createElement('fixed', number_format($this->getFixed(), 2, ".", ""));
        $description = $basket->createElement('description', substr($this->getDescription(), 0, 100));
        $element->appendChild($fixed);
        $element->appendChild($description);
        return $element;
    }

}
