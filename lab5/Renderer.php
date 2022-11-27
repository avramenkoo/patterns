<?php

interface IRenderer {
  public function renderTitle(string $title): string;
  public function renderContent(string $content): string;
  public function renderImage(string $url): string;
  public function renderLink(string $url, string $title): string;
  public function renderHeader(): string;
  public function renderFooter(): string;
  public function renderParts(array $parts): string;
}

class HtmlRenderer implements IRenderer {
  
  public function renderTitle(string $title): string {
    // render logic
  }

  public function renderContent(string $content): string {
    // render logic
  }

  public function renderImage(string $url): string {
    // render logic
  }

  public function renderLink(string $url, string $title): string {
    // render logic
  }

  public function renderHeader(): string {
    // render logic
  }

  public function renderFooter(): string {
    // render logic
  }

  public function renderParts(array $parts): string {
    // render logic
  }

}

class JsonRenderer implements IRenderer {
  
  public function renderTitle(string $title): string {
    // render logic
  }

  public function renderContent(string $content): string {
    // render logic
  }

  public function renderImage(string $url): string {
    // render logic
  }

  public function renderLink(string $url, string $title): string {
    // render logic
  }

  public function renderHeader(): string {
    // render logic
  }

  public function renderFooter(): string {
    // render logic
  }

  public function renderParts(array $parts): string {
    // render logic
  }

}

class XmlRenderer implements IRenderer {
  
  public function renderTitle(string $title): string {
    // render logic
  }

  public function renderContent(string $content): string {
    // render logic
  }

  public function renderImage(string $url): string {
    // render logic
  }

  public function renderLink(string $url, string $title): string {
    // render logic
  }

  public function renderHeader(): string {
    // render logic
  }

  public function renderFooter(): string {
    // render logic
  }

  public function renderParts(array $parts): string {
    // render logic
  }

}
