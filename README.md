# Magento-plugin

1. Paste to htdocs\magento-name\app\code    
2 - Check the status of your module:
  php bin/magento module:status 
  
3 - If your module is in the disabled list then just run this command to enable it otherwise move to step 3 :
  php bin/magento module:enable Magenticians_Mymodule            

3- Now upgrade the setup:
  php bin/magento setup:upgrade            

4- At last,  clean the cache:         
  php bin/magento cache:clean      
  php bin/magento cache:flush        

Launch the browser, enter your store URL , and add /mymodule or /mymodule/index/index at the end of URL.
