<?php
function listdir($start_dir='.') {
    $files = array();
    $directories = array();
    if ($handle = opendir($start_dir)) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                $filepath = $start_dir . '/' . $entry;
                if(is_dir($filepath)) {
                    $directories[] = $filepath;
                } else {
                    $files[] = $filepath;
                }
            }
        }
        foreach($directories as $dir) {
            $files[$dir] = listdir($dir);
        }
        closedir($handle);
    }
    return $files;
    
}

function require_file($file) {
    if(is_string($file))
        require_once($file);    
}

array_walk_recursive(listdir('./classes'), 'require_file');
