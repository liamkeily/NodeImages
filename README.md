# NodeImages

## Introduction

This plugin creates a new tab in the node editor which allows you to add images.

You can add multiple images in one go and reorder the images. 

## Requirements

This plugin requires another plugin called "ElFinder" to be installed.

This can be found at: https://github.com/phpMagpie/ElFinder/ 

## Usage

This plugin allows you to add images to a node.

This plugin populates $images variable on the node view.

## Elements

The plugin contains elements which can be used to display images.

> echo $this->element('NodeImages.featured_image');

> echo $this->element('NodeImages.gallery');
