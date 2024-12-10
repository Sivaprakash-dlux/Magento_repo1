<?php
namespace Dlux\Samplepage\Block;

use Magento\Framework\View\Element\Template;

class Display extends Template
{
    public function getMessage()
    {
        return __('Sample Page!');
    }

    public function getdiscripction(){
        return __('This wooden plant stand is a versatile and trendy piece of décor for your home. It enables you to display your plants and greens in a sturdy and fashionable manner. It is ideal for indoor usage, and it radiates a modern vibe.');
    }

    public function getTitle(){
        return __('Hot Sellers');
    }

    public function getSubTitle(){
        return __('Here is what’s trending on Luma right now');
    }
}

