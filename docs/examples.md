**Image+* could be used for several purposes. On this page you find some
*examples how to use it:

### Collections

You could show the *Image+* thumbnail in a Collections grid column by setting
the column renderer to *ImagePlus.MIGX_Renderer*.

### MIGX

If you want to use *Image+* in MIGX you could define all *Image+* TV properties
with a JSON string in the *Configs* textarea in the MIGX formtabs field
configuration. The following properties are possible:

```
{
"targetWidth":"",
"targetHeight":"",
"targetRatio":"",
"thumbnailWidth":"",
"allowAltTag":"",
"allowCaption":"",
"allowCredits":""
}
```

And you also have to change the *Input TV Type* to `imageplus`.

You could show the thumbnail in the grid column by setting the renderer to
*ImagePlus.MIGX_Renderer*. In prior MIGX versions you have to raw edit a MIGX
configuration for that.

To use that *Image+*-MIGX-Field in the Frontend, call the *ImagePlus Snippet*
with just the value-parameter being the name of this MIGX-Field:

```
[[ImagePlus? 
  &value=`[[+migxImagePlusField]]`
]]
```

This will get you the prepared URL for the cropped image, instead of the raw
JSON-Object.

### getResources/pdoResources

In order for the TV to be parsed with the *getResources/pdoResources Snippet*,
make sure you add the following lines to your *getResources/pdoResources
Snippet* call:

```
&includeTVs=`name_of_your_tv`
&processTVs=`name_of_your_tv`
```

In the template Chunk of the *getResources/pdoResources Snippet* call you
could use the placeholder `[[+tv.name_of_your_tv]]` if the Output Type of the TV
is set to `Image+`. Without additional changes, the placeholder contains the url
to the cropped image.

### Using the ImagePlus Snippet inside getResources/pdoResources Template Chunk

In your template Chunk for *getResources/pdoResources Snippet* call, you need
to add one parameter so that the *ImagePlus Snippet* call knows the origin ID to
pull data from:

```
 &docid=`[[+id]]`
```

Here is an example call and configuration, where *image* is your Image+ TV:

**Snippet Call**
```
<div class="blog-articles">
[[!pdoPage?
    &element=`pdoResources`
    &tpl=`tplBlogPost`
    &limit=`11`
    &includeContent=`1`
    &showHidden=`0`
    &hideContainers=`1`
]]
</div>
<div class="blog-paging">
  [[!+page.nav]]
</div>
```

**Chunk tplBlogPost**

```
<article class="post">
    <header class="post-header">
        <h3 class="post-title mt0 mb1"><a href="[[~[[+id]]]]">[[+longtitle:default=`[[+pagetitle]]`]]</a></h3>

    [[ImagePlus? 
        &tvname=`image` 
        &type=`tpl` 
        &docid=`[[+id]]`
        &tpl=`tplBlogIntroImg`
    ]] 

    </header>
    <section class="post-excerpt">
         <p>[[+content:striptags:ellipsis=`255`:typography]]
         <a class="read-more" href="[[~[[+id]]]]">read more »</a></p>
    </section>
    <footer class="post-meta">
        <span class="post-author">[[+createdby:userinfo=`fullname`]]</span>
        <time class="post-date" datetime="[[+publishedon:date=`%B %e, %Y`]]">[[+publishedon:date=`%B %e, %Y`]]</time>
    </footer>
</article>
```

**Chunk tplBlogIntroImg**

```
<div class="feature" style="margin-bottom:1rem">
    <a href="[[+caption]]"><img src="[[+source.src:pthumb=`w=320`]]" alt="[[+alt]]" /></a>
</div>
```

### Responsive images

If you want to display responsive images with and without the crop, you could
use the *ImagePlus Snippet*.

**Snippet Call**
```
[[ImagePlus? 
&tvname=`yourtvname` 
&type=`tpl` 
&options=`&w=320`
&tpl=`tplResponsiveImage`
&pagetitle=`[[*pagetitle]]`
]]
```
    
**Chunk tplResponsiveImage**
```
<picture>
    <source media="(min-width: 36em)"
            srcset="[[+source.src:pthumb=`w=1024`]] 1024w,
                [[+source.src:pthumb=`w=640`]] 640w,
                [[+source.src:pthumb=`w=320`]] 320w"
            sizes="33.3vw"/>
    <source srcset="[[+source.src:pthumb=`[[+crop.options]]&w=640`]] 2x,
                [[+source.src:pthumb=`[[+crop.options]]&w=320`]] 1x"/>
    <img src="[[+url]]" alt="[[+alt:default=`[[+pagetitle]]`]]"/>
</picture>
```
