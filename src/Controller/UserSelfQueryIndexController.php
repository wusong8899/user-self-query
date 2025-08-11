<?php

namespace Ex\userSelfQuery\Controller;

use Flarum\Frontend\Document;
use Psr\Http\Message\ServerRequestInterface;

class UserSelfQueryIndexController{
    public function __invoke(Document $document, ServerRequestInterface $request){
        return $document;
    }
}
