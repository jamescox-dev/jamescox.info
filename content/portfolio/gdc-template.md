---
# TODO:  Upload source to github
# TODO:  Upload certificate generator.
# TODO:  Upload all game dev club games.
title: "Game Development Club Template"
date: 2022-10-19T17:37:32+01:00
draft: true
featured_image: "/images/gdc-hero-image.jpg"
summary: "A educational template for making games. I use this template in the Game Development Club."
type: "page"
omit_title: true
---

About
-----

{{< figure src="/portfolio/gdc-template/screenshot.png" >}}

This template was developed for use at the Game Development Club at [Ordsall Primary School](https://www.ordsallprimary.com/).  The school wanted to give students the opportunely to see how games were made, the goal was to create a framework that students with no prior experience could use.  As the template is for educational use, the code and graphics are deliberately kept simple, so it could be easily explained to beginners.

Each student in the club creates their own level, and character, at the end of the course, I combine these together to form a complete game.  The game is published on the web, so they can show it to there parents, and each student gets a certificate of completion with their character include.

### Links
 *  [Source code on GitHub](#)
 *  [Python script for generating certificates](#)
 *  [Games Made at the Game Development Club](/gdc)

Technologies Used
-----------------

<div style="text-align: center">
  <img src="/images/icons/godot.svg" alt="Godot Icon" style="height: 4em" />
  <img src="/images/icons/libresprite.png" alt="LibreSprite Icon" style="height: 4em" />
  <img src="/images/icons/inkscape.svg" alt="Inkscape Icon" style="height: 4em" />
  <img src="/images/icons/python.svg" alt="Python Icon" style="height: 4em" />
</div>

 *  **[Godot](https://godotengine.org/)** &dash; for game code.
 *  **[LibreSprite](https://libresprite.github.io/#!//)** &dash; for graphics.
 *  **[Inkscape](https://inkscape.org/)** &dash; to create the student certificate template.
 *  **[Python](https://www.python.org/)** &dash; for generating student certificates.

Features
--------
### Code is Simple

{{< figure src="/portfolio/gdc-template/code.png" >}}

The code that makes the objects in the game work is kept to the minimum, so for students that are interested they can make changes easily.

### Lo-res Pixel Art Graphics

{{< figure src="/portfolio/gdc-template/libresprite.png" >}}

This helped keep the barrier to entry low, and freed the students from worrying about creating masterpieces, and just have fun.

### Web & Mobile Enabled

{{< figure src="/portfolio/gdc-template/phone-screenshot.webp" >}}

The completed game is published to the web, where the students can play the completed game on any device with **[WASM](https://webassembly.org/)** support.

### Fun Extras

{{< figure src="/portfolio/gdc-template/snes.jpg" >}}

We play our completed game on a mini SNES console powered by a Raspberry Pi 4 with a 8bitdo SF30 controller.  This makes the project feel real for the students.  Finally each student is issued a fun certificate to acknowledge the work.