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

public function getImages() {
    $images = array(
        'https://www.w3schools.com/howto/img_nature_wide.jpg',
        'https://www.w3schools.com/howto/img_fjords_wide.jpg',
        'https://www.w3schools.com/howto/img_mountains_wide.jpg',
        'https://www.w3schools.com/howto/img_lights_wide.jpg'
    );

    return $images;
}
}
?>