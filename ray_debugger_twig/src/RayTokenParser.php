<?php

namespace Drupal\ray_debugger_twig;

use Twig\Token;
use Twig\TokenParser\AbstractTokenParser;
use Drupal\ray_debugger_twig\RayNode;

class RayTokenParser extends AbstractTokenParser {

  public function parse(Token $token) {
    $lineno = $token->getLine();

    $parser = $this->parser;
    $stream = $parser->getStream();

    $nodes = [
      'var' => $parser->getExpressionParser()->parseExpression(),
    ];

    $stream->expect(Token::BLOCK_END_TYPE);
    return new RayNode($nodes, [], $lineno, $this->getTag());
  }

  public function getTag() {
    return 'ray';
  }

}
