jQuery(document).ready(function($) {

  // Signal New Features
  $( "#accordion-section-coeur_container_width" ).append( '<span class="newFeature">New</span>' );
  $( "#accordion-panel-coeur_layout" ).append( '<span class="newFeature">New</span>' );
  $( "#accordion-section-coeur_template" ).append( '<span class="newFeature">New</span>' );
  $( "#customize-control-coeur_option_container_style" ).append( '<span class="newFeature">New</span>' );
  $( "#accordion-section-coeur_template_material" ).append( '<span class="newFeature">New</span>' );

  // Show corresponding template options
  var postFormats = [
  { 'id' : 'classic',
    'option' : $('#accordion-section-coeur_template_classic .accordion-section-title'),
    'trigger' : $('#accordion-section-coeur_template input[value="classic"]')
  },
  {
    'id' : 'flat',
    'option' : $('#accordion-section-coeur_template_flat .accordion-section-title'),
    'trigger' : $('#accordion-section-coeur_template input[value="flat"]')
  },
  {
    'id' : 'material',
    'option' : $('#accordion-section-coeur_template_material .accordion-section-title'),
    'trigger' : $('#accordion-section-coeur_template input[value="material"]')
  },
  ],
  group = $('#customize-control-coeur_template_option input');

  // if( $('#accordion-section-coeur_template input[value="classic"]').is(':checked') ) {
  //   $('#accordion-section-coeur_template_classic').css('display', 'block');
  //   $('#accordion-section-coeur_template_flat .accordion-section-title').css('display', 'none');
  // }

  // Hide comments options depending on template
  if( $('#accordion-section-coeur_template input[value="flat"]').is(':checked') ) {
    $('#accordion-section-coeur_comments .accordion-section-title').css('display', 'none');
  }
  if( $('#accordion-section-coeur_template input[value="material"]').is(':checked') ) {
    $('#accordion-section-coeur_comments .accordion-section-title').css('display', 'none');
  }
  if( $('#accordion-section-coeur_template input[value="classic"]').is(':checked') ) {
    $('#accordion-section-coeur_comments .accordion-section-title').css('display', 'block');
  }

  // If format is check, show metabox
  for( var format in postFormats ) {
    if( postFormats[format]['trigger'].is(':checked') ) {
      postFormats[format]['option'].css('display', 'block');
    } else {
      postFormats[format]['option'].css('display', 'none');
    }
  }

  // New tempalte selected, hide and show sections
  group.change( function() {
    if ( $(this).val() === 'classic' ) {
      $('#accordion-section-coeur_comments .accordion-section-title').css( 'display', 'block' );
    } else if ( $(this).val() === 'flat' ) {
      $('#accordion-section-coeur_comments .accordion-section-title').css( 'display', 'none' );
    } else if ( $(this).val() === 'material' ) {
      $('#accordion-section-coeur_comments .accordion-section-title').css( 'display', 'none' );
    }
  });

  group.change( function() {
    $that = $(this);

    for( var format in postFormats ) {
      if( $that.val() === postFormats[format]['id']) {
        postFormats[format]['option'].css('display', 'block');
      } else {
        postFormats[format]['option'].css('display', 'none');
      }
    }
  });

  // Hide options
  if( $('#customize-control-coeur_option_container_style input[value="boxed"]').is(':checked') ) {
    $('#customize-control-coeur_option_container_width').css('display', 'none');
    $('#customize-control-coeur_inner_background_color').css('display', 'block');
  }
  if( $('#customize-control-coeur_option_container_style input[value="full_width"]').is(':checked') ) {
    $('#customize-control-coeur_option_container_width').css('display', 'block');
    $('#customize-control-coeur_inner_background_color').css('display', 'none');
  }

  $('#customize-control-coeur_option_container_style input[value="boxed"]').change(function(){
        if(this.checked) {
          $('#customize-control-coeur_option_container_width').fadeOut(300);
          $('#customize-control-coeur_inner_background_color').delay(400).fadeIn(300);
        } else {
          $('#customize-control-coeur_inner_background_color').fadeOut(300);
          $('#customize-control-coeur_option_container_width').delay(400).fadeIn(300);
        }
  });

  $('#customize-control-coeur_option_container_style input[value="full_width"]').change(function(){
        if(this.checked) {
          $('#customize-control-coeur_inner_background_color').fadeOut(300);
          $('#customize-control-coeur_option_container_width').delay(400).fadeIn(300);
        } else {
          $('#customize-control-coeur_option_container_width').fadeOut(300);
          $('#customize-control-coeur_inner_background_color').delay(400).fadeIn(300);
        }
  });

});