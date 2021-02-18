  
<?php

class head {
    
    private $title;

    public function __construct($title) {
        $this->title = $title;
    }

    public function __toString() {
        $head = '<head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
            
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
                rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            
                <title>'.$this->title.'</title>
            </head>';

        return $head;
    }
}