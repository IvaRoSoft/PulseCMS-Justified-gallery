======================================================================
Script Update: IvaRo
======================================================================
====The original plugin for Pulse 4 ==================================
Possible variant: 1
Plugin structure:

-inc
--tags
---gallery.php
............
-inc
--tags
---css
----magnific-popup.css
.............
-inc
--plugins
---lightbox
----jquery.magnific-popup.min.js

======================================================================

====Modified plugin for Pulse 4 and Pulse 5 ==========================
Possible variant: 2

Updated script for gallery.php

Update line:33
new code:
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />

Update line:34
new code:
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

..........
Link to scripts:
https://cdnjs.com/libraries/magnific-popup.js/

======== The use: ====================================================
After unzipping zip file
from the Pulse4 + 5 / inc / tags directory
Script gallery.php
Copy the inc / tags to the pulse installation
======================================================================
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
======================================================================
Plugin Name: Justified Photo Grid Gallery
Description: Justified Photo Grid Gallery
Author: Armend Hajdari
Author URI: http://www.armend-hajdari.com

======================================================================

Create a gallery in your Pulse CMS, with this addon and just embedding a tag as follows. GalleryName is the name of the folder containing the photos.

{{gallery:GalleryName}}

- Installation
│gallery.php --> inc/tags