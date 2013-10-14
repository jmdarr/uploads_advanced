<?php

class page {
    
    public function display_template(string template) {
        # force check on file
        # do not include anything outside of template
        if(is_sane_path($template)) { }
    }
}

?>
