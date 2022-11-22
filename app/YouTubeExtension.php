<?php

namespace App;

use Illuminate\Support\Str;
use League\CommonMark\Environment\EnvironmentBuilderInterface;
use League\CommonMark\Extension\CommonMark\Node\Block\HtmlBlock;
use League\CommonMark\Extension\ExtensionInterface;
use League\CommonMark\Node\Node;
use League\CommonMark\Renderer\ChildNodeRendererInterface;
use League\CommonMark\Renderer\NodeRendererInterface;
use Torchlight\Commonmark\BaseExtension;

class YouTubeExtension extends BaseExtension implements ExtensionInterface, NodeRendererInterface
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
            HtmlBlock::class,
        ];
    }

    protected function getLiteralContent($node)
    {
        $this->processNode($node);
    }

    private function processNode($node): Node
    {
        if (!$node instanceof HtmlBlock) {
            return $node;
        }

        $html = $node->getLiteral();

        if (Str::startsWith($html, '<iframe')) {
            $html = preg_replace('/width="\d+"/', '', $html);
            $html = preg_replace('/height="\d+"/', '', $html);
            $html = preg_replace('/\s{2,}/', ' ', $html);
            $html = '<div class="aspect-w-16 aspect-h-9">' . $html . '</div>';
        }

        $node->setLiteral($html);

        return $node;
    }
}
