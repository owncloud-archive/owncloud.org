'use strict';

var fs = require('fs'),
    path = require('path'),
    crypto = require('crypto');

module.exports = function(grunt) {
  grunt.registerTask('version', 'Set the versions for enqueued CSS/JS', function() {
    var options = this.options({
      file: '',
      css: '',
      cssHandle: '',
      js: '',
      jsHandle: ''
    });

    var scriptsPhp = options.file;

    // Hash the CSS
    var hashCss = md5(options.css);

    // Hash the JS
    var hashJs = md5(options.js);

    // Update scripts.php to reference the new versions
    var regexCss = new RegExp("(wp_enqueue_style\\('" + options.cssHandle + "',(\\s*[^,]+,){2})\\s*[^\\)]+\\);");
    var regexJs = new RegExp("(wp_register_script\\('" + options.jsHandle + "',(\\s*[^,]+,){2})\\s*[^,]+,\\s*([^\\)]+)\\);");

    var content = grunt.file.read(scriptsPhp);
    content = content.replace(regexCss, "$1 '" + hashCss + "');");
    content = content.replace(regexJs, "$1 '" + hashJs + "', " + "$3);");
    grunt.file.write(scriptsPhp, content);
    grunt.log.writeln('"' + scriptsPhp + '" updated with new CSS/JS versions.');
  });

  var md5 = function(filepath) {
    var hash = crypto.createHash('md5');
    hash.update(fs.readFileSync(filepath));
    grunt.log.write('Versioning ' + filepath + '...').ok();
    return hash.digest('hex');
  };
};
