<?php
$title = 'My Web Page!';
$heading = 'My Heading';
$content = 'Some TEXT';

$head = '<head><title>' . $title . '</title></head>';
$body = '<body><h1>' . $heading . '</h1><p>' . $content; '</p></body>';


echo '<html>' . $head .  $body . '</html>';

 