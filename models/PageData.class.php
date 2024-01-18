<?php

// some basic properties to get started
class PageData {
	public string $title = "";
	public string $content = "";
	public string $css = "";

	public function addCSS($href) {
		$this->css .= "<link href='$href' rel='stylesheet'>";
	}
}
