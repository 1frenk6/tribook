<?php
 class Tribook_Blog_Helper_Data extends Mage_Core_Helper_Abstract
 {
        const LOG_FILE='tribookBlog.log';

        public function tribookBlogLog($message){
            Mage::log($message, null, self::LOG_FILE);
            return $message;
        }
 }