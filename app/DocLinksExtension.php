<?php

namespace App;

use Illuminate\Support\Str;
use League\CommonMark\Environment\EnvironmentBuilderInterface;
use League\CommonMark\Extension\CommonMark\Node\Inline\Link;
use League\CommonMark\Extension\ExtensionInterface;
use League\CommonMark\Node\Node;
use League\CommonMark\Renderer\ChildNodeRendererInterface;
use League\CommonMark\Renderer\NodeRendererInterface;
use Torchlight\Commonmark\BaseExtension;

class DocLinksExtension extends BaseExtension implements ExtensionInterface, NodeRendererInterface
{
    public function register(EnvironmentBuilderInterface $environment): void
    {
        $this->bind($environment, 'addRenderer');
    }

    public function render(Node $node, ChildNodeRendererInterface $childRenderer)
    {
        $this->processNode($node);
    }

    protected function codeNodes()
    {
        return [
            Link::class,
        ];
    }

    protected function getLiteralContent($node)
    {
        $this->processNode($node);
    }

    private function processNode($node): Node
    {
        if (!$node instanceof Link) {
            return $node;
        }

        $url = $node->getUrl();

        if (Str::startsWith($url, '/') && Str::endsWith($url, '.md')) {
            $node->setUrl('/docs/' . rtrim(trim($node->getUrl(), '/'), '.md'));
        }

        return $node;
    }
}
