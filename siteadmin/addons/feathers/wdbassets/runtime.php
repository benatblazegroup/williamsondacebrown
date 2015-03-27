<?php
PerchSystem::register_feather('wdbassets');

class PerchFeather_wdbassets extends PerchFeather
{
  public function get_css($opts, $index, $count)
    {

      $out = array();

       $out[] = $this->_single_tag('link', array(
         'rel'=>'stylesheet',
         'href'=>'/assets/css/wdb-styles.min.css',
         'type'=>'text/css'
        ));


       return implode("\n\t", $out)."\n";
      }

      public function get_javascript($opts, $index, $count)
    	{
    		$out = array();

    		if (!$this->component_registered('jquery')) {
    			$out[] = $this->_script_tag(array(
    				'src'=>'/assets/js/jquery-1.11.2.min.js'
    			));
    			$this->register_component('jquery');
    		};

        if (!$this->component_registered('bootstrap')) {
          $out[] = $this->_script_tag(array(
            'src'=>'/assets/js/bootstrap.min.js'
          ));
          $this->register_component('bootstrap');
        }


    		return implode("\n\t", $out)."\n";
    	}

}
?>
