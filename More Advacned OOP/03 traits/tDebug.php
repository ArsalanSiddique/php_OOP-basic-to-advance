<?php

trait tDebug1
{

    public function dumpObject()
    {
        $class = get_class($this);
        $attributes = get_object_vars($this);
        $methods = get_class_methods($this);

        echo '<h2> Information about Atrributes:</h2>';
        foreach ($attributes as $k => $v) {
            echo 'Attributes Name => ' . $k . ' and Value =>' . $v . ' <br />';
        }
        echo '<h2> Information about Methods:</h2>';
        foreach ($methods as $v) {
            echo 'Method Name => ' . $v . ' <br />';
        }
    }
}
?>












