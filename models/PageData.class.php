<?php

// some basic properties to get started
class PageData {
	public string $title = "";
	public string $content = "";
	public string $css = "";
	public string $scriptElements = "";

	public function addScript($src) {
		$this->scriptElements = "<script src='$src' defer></script>";
	}

	public function addCSS($href) {
		$this->css .= "<link href='$href' rel='stylesheet'>";
	}
}
