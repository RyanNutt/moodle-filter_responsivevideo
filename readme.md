## Responsive Video Filter ##

**Probably best you don't use this one yet on a production site. It's mostly working, and it's working on my Moodle site. But you probably will want to test a bit before you get too dependent.**

----------


Copying and pasting YouTube links into Moodle just wasn't working for me. Yeah, it worked. But using a fixed sized iframe was breaking the responsive layout.

A couple days ago I came across EmbedResponsively.com. Just paste in the YouTube URL and it would give you the HTML to make the embed responsive.

From there it was just a matter of inlining the CSS on a wrapper div and the iframe and that was it.

### Usage ###
When enabled, you just wrap the URL from YouTube in [rv]url[/rv] tags. 

To get the URL, go to the video you want to embed. Click in the address bar and copy the address. It should be something like www.youtube.com/watch/?v=12345. Paste that between the [rv] and [/rv] shortcodes in your post, page, question, whatever.

### Filter Order ###
One global setting you need to double check. Make sure that this filter is above the URL / Image Autolink filter if you're using it. Otherwise that filter will do its thing first and the YouTube video won't be responsive.

### Settings ###
![](https://raw.githubusercontent.com/RyanNutt/moodle-filter_responsivevideo/master/images/screenshot-1.PNG)

Here is a screen shot of the settings page. 

**Don't show related videos by default**

If enabled, ?rel=0 is added to the end of the embed URL and related videos won't be shown. You probably want to leave this checked so your students don't have a list of other videos begging for clicks when your video is done.

**Use youtube-nocookie.com domain***

When enabled, embeds will use the www.youtube-nocookie.com domain instead of www.youtube.com. I was having issues with embedded videos getting tripped up by YouTube's Safety Mode even though the actual video page was fine. This cleared up the problem.

This is the same as checking the Privacy Enhanced Mode checkbox when getting the embed code from YouTube.

**Look only in [rv] tags**

*This isn't implemented yet*

When working, clearing this checkbox will cause the filter to look for video links anywhere in the page instead of just between the [rv]url[/rv] shortcodes. Right now it does nothing.

**Maximum width of video**

*This isn't implemented yet*

When added, this will allow you to put a bit of CSS to put a max width on the video. Normally it expands to 98% of its parent width. 