// npm package: tinymce
// github link: https://github.com/tinymce/tinymce

$(function() {
  'use strict';

  //Tinymce editor
  if ($("#tinymceExample").length) {
    tinymce.init({
      selector: '#tinymceExample',
      min_height: 200,
      default_text_color: 'red',
      plugins: [
        'advlist', 'autoresize', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
        'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen',
      ],
      toolbar1: ' styleselect | bold italic | bullist numlist outdent indent',
      image_advtab: true,
      templates: [{
          title: 'Test template 1',
          content: 'Test 1'
        },
        {
          title: 'Test template 2',
          content: 'Test 2'
        }
      ],
      content_css: []
    });
  }

});