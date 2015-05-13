# quiltbagtechnyc_website
wordpress website at http://quiltbagtech.nyc


## Dev Tools

### Grunt

The project is wired up with Grunt for compiling Sass, livereloading changes to Sass, and automagically adding vendor prefixes to the CSS. None of these things are mandatory, merely available -- feel free to use your own tools!

Here's how to use Grunt:

First step: have npm installed! `npm -v` to check and see if you do.
If you don't, [download node here](https://nodejs.org/); npm will cmoe with it.

Next: install Grunt!
`npm install -g grunt-cli`

For the rest of the steps, make sure that your shell is in the quiltbag _theme_ folder -- `wp-content/themes/quiltbag` -- , as that is where the Gruntfile.js and package.json files live.

You'll want to install the project dependencies (aka the node packages which are listed in the `package.json` file, by running
`npm install` 

Finally, run everything with the simple command `grunt`. 

Full instructions here: http://gruntjs.com/getting-started#working-with-an-existing-grunt-project
