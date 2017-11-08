<?php
namespace Magenticians\Mymodule\Block;
class Mymodule extends \Magento\Framework\View\Element\Template
{
public function __construct(
\Magento\Backend\Block\Template\Context $context,
array $data = []
)
{
parent::__construct($context, $data);
}
public function getMymodule()
{
return 'Module Cretaed Successfully';
}
}
?>