---
title: "Unicorn Valley"
date: 2022-10-19T17:37:44+01:00
draft: false
omit_title: true
type: "page"
summary: "A casual game, with simple controls and game play."
---

About
-----

{{< figure src="/portfolio/unicorn-valley/feature-graphic.jpg" >}}

Unicorn Valley was a project I started to see the process of developing a simple game from start to finish.  I wanted to work through all the stages, from design, development, deployment, and maintenance.  Unicorn Valley is a casual game, with simple controls and game play.  It's graphical style is designed to mimic old children's cartoons with simple heavy out-lined graphics and bright flat colours.

### Links
[Unicorn Valley on Google Play](https://play.google.com/store/apps/details?id=org.bimblewizard.unicornvalley)

Technologies Used
-----------------

<div style="text-align: center">
  <img src="/images/icons/godot.svg" alt="Godot Icon" style="height: 4em" />
  <img src="/images/icons/inkscape.svg" alt="Inkscape Icon" style="height: 4em" />
  <img src="/images/icons/play.png" alt="Google Play Icon" style="height: 4em" />
</div>

 *  **[Godot](https://godotengine.org/)** &dash; for game code.
 *  **[Inkscape](https://inkscape.org/)** &dash; for graphics.
 *  **[Google Play](https://play.google.com/store/games)** &dash; to publish the game.

Features
--------

### Procedurally Generated Levels

{{< figure src="/portfolio/unicorn-valley/screenshots/5.jpg" >}}

The levels in Unicorn Valley are generated on-the-fly.  Level geometry, enemy placement, power-up distribution, and collectables are all placed according to an algorithm that creates a level that get's progressively harder the longer you play.  No two levels are exactly the same.

### Simple Controls

{{< figure src="/portfolio/unicorn-valley/screenshots/6.jpg" >}}

The player can only move up and down.  The player automatically follows a finger placed on the screen.  It's vertical acceleration/deceleration is calculated based on the difference between the players current position, and target positions.  This makes for a very intuitive control system.

### Multiple Characters and Themes

{{< figure src="/portfolio/unicorn-valley/screenshots/3.jpg" >}}

There are multiple characters, and level themes to unlock.  These are implemented as simple skins that are applied to the enemies, level geometry, backgrounds, and player.

### Monetisation Features

{{< figure src="/portfolio/unicorn-valley/screenshots/1.jpg" >}}

The game uses Google Play's APIs to add in-app purchases, and advertisements to the game.

### Basic 3D Effects

{{< figure src="/portfolio/unicorn-valley/screenshots/2.jpg" >}}

The character selection carousel, and Unicoin sprites are actually 3D models mixed into the 2D scenes that make up the rest of the graphics.  This allowed me to create smooth and more appealing graphics.