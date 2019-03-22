// PRELOADER
$(window).on('load', function() {
  'use strict';
  $('#loading').addClass('hidden');
});

$(document).ready(function () {


  $.get( "lng" )
  .done(function( data ) {
      if(data == 'fr'){
          document.getElementById('language').innerHTML = "<img src='img/flags/fr.svg' width='30px' alt='Français'> &nbsp; Français";
          document.getElementById('switch').innerHTML = "<img src='img/flags/uk.svg' width='30px' alt='Français' id='change'> &nbsp; English";
      } else {
          document.getElementById('language').innerHTML = "<img src='img/flags/uk.svg' width='30px' alt='Français'> &nbsp; English";
          document.getElementById('switch').innerHTML = "<img src='img/flags/fr.svg' width='30px' alt='Français' id='change'> &nbsp; French";
      }
      //location.reload(true);
  });

  $( "#switch" ).click(function() {
      $.get( "switch" )
      .done(function( data ) {
          location.reload(true);
      });
  });
});


(function($) {
  'use strict';
  var keyActivitiesArr = [];
  var keyPartnersArr = [];
  var keyResourcesArr = [];
  var valuePropositionArr = [];
  var customerRelationshipArr = [];
  var customerSegmentsArr = [];
  var channelsArr = [];
  var revenueStreamsArr = [];
  var costStructureArr = [];


  /*====================================================*/
  /* VARIABLES                                           */
  /*====================================================*/
  var navBar = $('.custom-menu'),
    navbarLinks = $('.custom-menu .nav-link');

  /*====================================================*/
  /* STICKY NAVBAR                                      */
  /*====================================================*/
  $(window).on('scroll', function() {
    if ($(this).scrollTop() > 50) {
      $(navBar).addClass('navbar-is-sticky');
    } else {
      $(navBar).removeClass('navbar-is-sticky');
    }
  });

  $('.navbar-toggler').on('click', function(e) {
    $(this).toggleClass('menu-is-expanded');
  });

  $(document).on('click', '.navbar-collapse.show', function(e) {
    if ($(e.target).is('a')) {
      $(this).collapse('hide');
      $('.navbar-toggler').toggleClass('menu-is-expanded');
      // $('.Menu-Icon--Circle').css('transform', 'translateX(-50%) translateY(-50%) scale(1)');
    }
  });


  /*====================================================*/
  /* TABS INIT                                   */
  /*====================================================*/
  $('.js-tabs a').on('click', function(e) {
    e.preventDefault();
    $(this).tab('show');
  });

  /*====================================================*/
  /* TOOLTIPS                                           */
  /*====================================================*/
  $('[data-toggle="tooltip"]').tooltip();

  /*====================================================*/
  /* BUSINESS MODEL CANVAS                              */
  /*====================================================*/

  $("#keyActivities").click(function () {
    swal({
      title: 'Entrer le nom de l\' élément',
      input: 'text',
      inputAttributes: {
        autocapitalize: 'off',
        maxlength: 100,
        autocorrect: 'off'
      },
      showCancelButton: true,
      confirmButtonColor: '#00ebad',
      confirmButtonText: 'Add',
      inputValidator: (value) => {
        return !value && 'You need to write something!'
      }
    }).then((result) => {
      if(result.value){
      keyActivitiesArr.push(result.value);
      var html = "<div class='notes'>";
      for (var i = 0; i < keyActivitiesArr.length; i++) {
          html += "<div class='post-it-note' ondblclick=keyActivities('" + keyActivitiesArr[i] + "')>";
          html += "<p>" + keyActivitiesArr[i] + "</p>";
          html += '</div>';

      }
      html += '</div>';
      document.getElementById('keyActivitiesArr').innerHTML = html;
      dragula($('.notes').toArray());
      }
    })
  });

  $("#keyPartners").click(function () {
    swal({
      title: 'Entrer le nom de l\' élément',
      input: 'text',
      inputAttributes: {
        autocapitalize: 'off',
        maxlength: 100,
        autocorrect: 'off'
      },
      showCancelButton: true,
      confirmButtonColor: '#00ebad',
      confirmButtonText: 'Add',
      inputValidator: (value) => {
        return !value && 'You need to write something!'
      }
    }).then((result) => {
      if (result.value){
        keyPartnersArr.push(result.value);
        var html = "<div class='notes'>";
        for (var i = 0; i < keyPartnersArr.length; i++) {
          html += "<div class='post-it-note'>";
          html += "<p>" + keyPartnersArr[i] + "</p>";
          html += '</div>';

        }
        html += '</div>';
        document.getElementById('keyPartnersArr').innerHTML = html;
        dragula($('.notes').toArray());
      }
      })
  });  

  $("#keyResources").click(function () {
      swal({
          title: 'Entrer le nom de l\' élément',
          input: 'text',
          inputAttributes: {
              autocapitalize: 'off',
              maxlength: 100,
              autocorrect: 'off'
          },
          showCancelButton: true,
          confirmButtonColor: '#00ebad',
          confirmButtonText: 'Add',
          inputValidator: (value) => {
              return !value && 'You need to write something!'
          }
      }).then((result) => {
          if (result.value) {
          keyResourcesArr.push(result.value);
          var html = "<div class='notes'>";
          for (var i = 0; i < keyResourcesArr.length; i++) {
              html += "<div class='post-it-note'>";
              html += "<p>" + keyResourcesArr[i] + "</p>";
              html += '</div>';

          }
          html += '</div>';
          document.getElementById('keyResourcesArr').innerHTML = html;
          dragula($('.notes').toArray());
        }
      })
  });

  $("#valueProposition").click(function () {
    swal({
      title: 'Entrer le nom de l\' élément',
      input: 'text',
      inputAttributes: {
        autocapitalize: 'off',
        maxlength: 100,
        autocorrect: 'off'
      },
      showCancelButton: true,
      confirmButtonColor: '#00ebad',
      confirmButtonText: 'Add',
      inputValidator: (value) => {
        return !value && 'You need to write something!'
      }
    }).then((result) => {
      if (result.value) {
      valuePropositionArr.push(result.value);
      var html = "<div class='notes'>";
      for (var i = 0; i < valuePropositionArr.length; i++) {
        html += "<div class='post-it-note'>";
        html += "<p>" + valuePropositionArr[i] + "</p>";
        html += '</div>';

      }
      html += '</div>';
      document.getElementById('valuePropositionArr').innerHTML = html;
      dragula($('.notes').toArray());
    }
    })
  });

  $("#customerRelationship").click(function () {
    swal({
      title: 'Entrer le nom de l\' élément',
      input: 'text',
      inputAttributes: {
        autocapitalize: 'off',
        maxlength: 100,
        autocorrect: 'off'
      },
      showCancelButton: true,
      confirmButtonColor: '#00ebad',
      confirmButtonText: 'Add',
      inputValidator: (value) => {
        return !value && 'You need to write something!'
      }
    }).then((result) => {
      if (result.value) {
      customerRelationshipArr.push(result.value);
      var html = "<div class='notes'>";
      for (var i = 0; i < customerRelationshipArr.length; i++) {
        html += "<div class='post-it-note'>";
        html += "<p>" + customerRelationshipArr[i] + "</p>";
        html += '</div>';

      }
      html += '</div>';
      document.getElementById('customerRelationshipArr').innerHTML = html;
      dragula($('.notes').toArray());
    }
    })
  });

  $("#customerSegments").click(function () {
    swal({
      title: 'Entrer le nom de l\' élément',
      input: 'text',
      inputAttributes: {
        autocapitalize: 'off',
        maxlength: 100,
        autocorrect: 'off'
      },
      showCancelButton: true,
      confirmButtonColor: '#00ebad',
      confirmButtonText: 'Add',
      inputValidator: (value) => {
        return !value && 'You need to write something!'
      }
    }).then((result) => {
      if (result.value) {
      customerSegmentsArr.push(result.value);
      var html = "<div class='notes'>";
      for (var i = 0; i < customerSegmentsArr.length; i++) {
        html += "<div class='post-it-note'>";
        html += "<p>" + customerSegmentsArr[i] + " </p>";
        html += '</div>';

      }
      html += '</div>';
      document.getElementById('customerSegmentsArr').innerHTML = html;
      dragula($('.notes').toArray());
    }
    })
  });

  $("#channels").click(function () {
      swal({
          title: 'Entrer le nom de l\' élément',
          input: 'text',
          inputAttributes: {
              autocapitalize: 'off',
              maxlength: 100,
              autocorrect: 'off'
          },
          showCancelButton: true,
          confirmButtonColor: '#00ebad',
          confirmButtonText: 'Add',
          inputValidator: (value) => {
              return !value && 'You need to write something!'
          }
      }).then((result) => {
          if (result.value) {
          channelsArr.push(result.value);
          var html = "<div class='notes'>";
          for (var i = 0; i < channelsArr.length; i++) {
              html += "<div class='post-it-note'>";
              html += "<p>" + channelsArr[i] + "</p>";
              html += '</div>';

          }
          html += '</div>';
          document.getElementById('channelsArr').innerHTML = html;
          dragula($('.notes').toArray());
        }
      })
  });

  $("#costStructure").click(function () {
      swal({
          title: 'Entrer le nom de l\' élément',
          input: 'text',
          inputAttributes: {
              autocapitalize: 'off',
              maxlength: 100,
              autocorrect: 'off'
          },
          showCancelButton: true,
          confirmButtonColor: '#00ebad',
          confirmButtonText: 'Add',
          inputValidator: (value) => {
              return !value && 'You need to write something!'
          }
      }).then((result) => {
          if (result.value) {
          costStructureArr.push(result.value);
          var html = "<div class='notes'>";
          for (var i = 0; i < costStructureArr.length; i++) {
              html += "<div class='post-it-note'>";
              html += "<p>" + costStructureArr[i] + "</p>";
              html += '</div>';

          }
          html += '</div>';
          document.getElementById('costStructureArr').innerHTML = html;
          dragula($('.notes').toArray());
        }
      })
  });

  $("#revenueStreams").click(function () {
    swal({
      title: 'Entrer le nom de l\' élément',
      input: 'text',
      inputAttributes: {
        autocapitalize: 'off',
        maxlength: 100,
        autocorrect: 'off'
      },
      showCancelButton: true,
      confirmButtonColor: '#00ebad',
      confirmButtonText: 'Add',
      inputValidator: (value) => {
        return !value && 'You need to write something!'
      }
    }).then((result) => {
      if (result.value) {
      revenueStreamsArr.push(result.value);
      var html = "<div class='notes'>";
      for (var i = 0; i < revenueStreamsArr.length; i++) {
        html += "<div class='post-it-note'>";
        html += "<p>" + revenueStreamsArr[i] + "</p>";
        html += '</div>';

      }
      html += '</div>';
      document.getElementById('revenueStreamsArr').innerHTML = html;
      dragula($('.notes').toArray());
    }
    })
  });


  $("#print").click(function () {
    window.print();    
  });

})(jQuery);

function comingSoon() {
  swal({
    title: 'Bientôt disponible',
    animation: true,
    confirmButtonColor: '#00ebad',
    confirmButtonText: 'OK',
  })
}

function keyActivities(a){
  swal({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'No, cancel!',
      reverseButtons: true
  }).then((result) => {
      if (result.value) {
          swal(
              'Deleted!',
              'Your file has been deleted.',
              'success'
          )
      }
  })

}

