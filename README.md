# HNGBlogCms

Each team is to come up with 2 different themes for the site. The teams will have to collaborate to create the following:
  - The blogging experience
  - Authentication (which should only be possible via google or via facebook, there is no native auth)
  - Commenting
  - Customisation of the sidebar
  - Uploading of the profile image
  
*This app is to be created *without a database*! The posts are to be stored as markdown files.*
_There should be a settings.json file that saves other things like auth token and so on.
To design their themes, each team will need a designer - and not all designers right now are getting positive comments from me. Please recruit the designers I am currently liking their work into your team._


# Task to save post to markdown- Team DragonStone

This repo takes care of post from users.

Users Can post in HTML format using the available text editor.

And post are saved in the folder 'posts' as a markdown(.md)

Thanks to [TinyMCE]('https://www.tiny.cloud/') for the rich text editor and [html-to-markdown converter]('https://github.com/thephpleague/html-to-markdown')

To get started

* composer install
* php -S localhost:1000 (edited)
