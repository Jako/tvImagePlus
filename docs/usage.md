## Input Options

In *Image+* you could control the final size and aspect ratio of selected
images. There are several extended input options available for an *Image+* TV:

#### Target Height/Width

Images can be constrained to a minimal height and/or width with **Target
height** and **Target width**. If both values are set, the target aspect ratio
of the output image is calculated with this values. Both fields have to be
filled with an integer value.

#### Target Aspect Ratio

The aspect ratio for the output image could be restricted with **Target Aspect
Ratio**. If target height and target width are set, this value is ignored and
the calculated aspect ratio of target height and target width is used. The field
has to be filled with a float value.

If you set only one value of **Target Height** or **Target Width** and leave
empty **Target Aspect Ratio**, the size of the crop is not restricted to any
aspect ratio.

!!! note "How to calculate the aspect ratio"
    The aspect ratio contains a float value: this value is easily acquired by
    dividing any width of a desired aspect ratio by its corresponding height. So
    say you want to all your crops to have the same aspect ratio as a `1600x1000`
    image, simply divide `1600` by `1000`, resulting in `1.6`. This is your aspect
    ratio value.

#### Show Alt Tag Field

*Image+* TVs can also contain an **Alt Tag Field**, which is an additional text
input, that is stored with each image. It could be output alongside the image
i.e. as an alt-tag or title-tag.

In order to output the alt text in a *Image+* TV placeholder, you will need to
select an chunk in the **Output Options**. You could also use the ImagePlus
snippet and specify a template chunk in the snippet call options. The alt text
is filled in the placeholder `[[+alt]]` in that chunk.

#### Show Caption Field

*Image+* TVs can also contain an **Caption Field**, which is an additional text
input, that is stored with each image. It could be output beneath the image
i.e. in an additional caption div.

In order to output the caption in a *Image+* TV placeholder, you will need to
select an chunk in the **Output Options**. You could also use the ImagePlus
snippet and specify a template chunk in the snippet call options. The caption is
filled in the placeholder `[[+caption]]` in that chunk.

#### Show Credits Field

*Image+* TVs can also contain an **Credits Field**, which is an additional text
input, that is stored with each image. It could be output beneath the image
i.e. in an additional credits div.

In order to output the credits in a *Image+* TV placeholder, you will need to
select an chunk in the **Output Options**. You could also use the ImagePlus
snippet and specify a template chunk in the snippet call options. The credits
are filled in the placeholder `[[+credits]]` in that chunk.

### Context/System Settings

Each *Image+* TV **Input Option** could be superceded by a context setting or a
system setting. And context/system settings for a single TV could be defined,
too. 

There are predefined system settings in the `imageplus` namespace, that are
empty or equal zero. If you enable one or fill it with a value, this setting
will supercede the Input Options of all Image+ TVs. Context settings have to be
created before usage.

The global context/system settings have the prefix `imageplus.` and the single
TV context/system settings have the prefix `imageplus.{tvname}.`. `{tvname}` has
to be replaced by the name of the template variable.

The order for those settings is [^1]

- TV name based context setting
- TV name based system setting
- context setting
- system setting

In the `imageplus.select_config` system setting, you could create predefined
crop sizes/aspect ratios with a helper grid. To force use the predefined
sizes/ratios, you could enable the `imageplus.force_config` system setting.

## Output Options

There are several extended output options available for of an *Image+* TV:

#### Additional phpThumb Parameters

As default an *Image+* TV returns an relative URL to an cropped (and maybe
constrained) image that is scaled by phpThumb. With this output option, you
could assign several additional phpThumb parameters, that are used to generate
the thumbnail image.

#### Output Chunk

If you select an **Output Chunk** the TV output is rendered with that chunk.
Select the chunk name from the dropdown. Several placeholders are possible in
that chunk to customize the output:

Placeholder | Description
------------|------------
url | URL of the thumbnail image
alt | Alt text
width | Minimal width of the thumbnail image
height | Minimal height of the thumbnail image
source.src | Full path of the source image on the server (not a URL)
source.width | Width of the source image
source.height | Height of the source image
crop.width | Crop width of the thumbnail image
crop.height | Crop height of the thumbnail image
crop.x | Crop x position of the thumbnail image
crop.y | Crop y position of the thumbnail image
options | Crop engine full option string to generate the thumbnail image
crop.options | Crop engine crop option string to generate the thumbnail image

All these placeholders could be used in the Snippet too.

#### Generate Thumb URL

If you create the thumbnail in output chunk i.e. by a pthumb output filter, you
could disable the generation of the internal thumb URL.

!!! caution "Caution"
    You have to activate this option, when you don't specify an output chunk in
    the output options or when you use the `[[+url]]` placeholder in the specified
    output chunk. Otherwise the image is not cropped/resized and the original
    image path is returned.

## Snippet

The Snippet gives you a second option to render the TV value. With the template
variable output, you are restricted to one output chunk per template variable,
with the snippet you could be more flexiple use different output chunks. The
following properties could be set in the snippet call:

Property | Description | Default
---------|-------------|--------
tvname | Name of the Image+ TV. | -
docid | Resource where the Image+ TV value is received from. | Current resource
type | Type of the snippet output. Could be set to `check` [^2], `tpl` [^3] and `thumb` [^4]. | thumb
options | Extended phpThumb options for the image [^5]. | -
tpl | Template chunk for the snippet output [^6]. | ImagePlus.image
value | Use your own JSON encoded value for the snippet output. The properties `tvname` and `docid` are ignored. | -
debug | Log debug informations in MODX error log. | 0 (No)

#### Example

```
[[ImagePlus?
&tvname=`imageplus`
&docid=`1`
&options=`w=100`
&type=`tpl`
&tpl=`ImagePlus.demo`
]]
```

This snippet call outputs the content of the template variable with the name
`imageplus` of resource `1` and the extended phpThumb option `&w=100` (width:
100px) in the parsed `ImagePlus.demo` chunk.

[^1]: The first entry supercedes the second entry in the list etc.
[^2]: Outputs *image* if the Image+ TV contains an image, otherwise *noimage*.
[^3]: Outputs the parsed template set by **tpl** property for retreived Image+ TV value (with additional options set by the **options** property)
[^4]: Outputs the thumbnail URL for retreived Image+ TV value (with additional options set by the **options** property)
[^5]: See [phpThumb readme](http://phpthumb.sourceforge.net/demo/docs/phpthumb.readme.txt) for possible options. Maybe not all options are valid in your installation (because of crop engine limitations or server restricions).
[^6]: The template chunk placeholder are the same as in the output chunk of the template variable.
