# Image+

Image+ is an advanced image custom template variable type for MODx Revolution.
The dimensions for the uploaded image can (optionally) be configured to
constrain a minimal width and/or height. The image crop could be forced to
remain at a pre-set ratio. A graphical tool could be used to crop the image to
the required dimensions/proportions.

### Requirements

* MODX Revolution 2.2.4+
* PHP v5.3+
* MODX Cropping Engine i.e. [pThumb](https://modx.com/extras/package/pthumb)

### Features

* Visual Image cropping tool integrated into the MODX manager interface.
* Option to constrain minimal width and/or height for the uploaded image. 
* User image crop can be forced to remain at pre-set ratio.
* Use a chunk as an output template and fill placeholders with url, height, width, alt-tag, phpthumb options etc of the 
  cropped uploaded image.
