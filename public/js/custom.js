// PRELOADER
$(window).on('load', function() {
  'use strict';
  $('#loading').addClass('hidden');
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
      confirmButtonText: 'Ajouter',
      inputValidator: (value) => {
        return !value && 'You need to write something!'
      }
    }).then((result) => {
      keyActivitiesArr.push(result.value);
      var html = "<div class='notes'>";
      for (var i = 0; i < keyActivitiesArr.length; i++) {
        html += "<div class='post-it-note'>";
          html += "<p>" + keyActivitiesArr[i] + "</p>";
        html += '</div>';

      }
      html += '</div>';
      document.getElementById('keyActivitiesArr').innerHTML = html;
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
      confirmButtonText: 'Ajouter',
      inputValidator: (value) => {
        return !value && 'You need to write something!'
      }
    }).then((result) => {
      keyPartnersArr.push(result.value);
      var html = "<div class='notes'>";
      for (var i = 0; i < keyPartnersArr.length; i++) {
        html += "<div class='post-it-note'>";
        html += "<p>" + keyPartnersArr[i] + "</p>";
        html += '</div>';

      }
      html += '</div>';
      document.getElementById('keyPartnersArr').innerHTML = html;
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
          confirmButtonText: 'Ajouter',
          inputValidator: (value) => {
              return !value && 'You need to write something!'
          }
      }).then((result) => {
          keyResourcesArr.push(result.value);
          var html = "<div class='notes'>";
          for (var i = 0; i < keyResourcesArr.length; i++) {
              html += "<div class='post-it-note'>";
              html += "<p>" + keyResourcesArr[i] + "</p>";
              html += '</div>';

          }
          html += '</div>';
          document.getElementById('keyResourcesArr').innerHTML = html;
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
      confirmButtonText: 'Ajouter',
      inputValidator: (value) => {
        return !value && 'You need to write something!'
      }
    }).then((result) => {
      valuePropositionArr.push(result.value);
      var html = "<div class='notes'>";
      for (var i = 0; i < valuePropositionArr.length; i++) {
        html += "<div class='post-it-note'>";
        html += "<p>" + valuePropositionArr[i] + "</p>";
        html += '</div>';

      }
      html += '</div>';
      document.getElementById('valuePropositionArr').innerHTML = html;
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
      confirmButtonText: 'Ajouter',
      inputValidator: (value) => {
        return !value && 'You need to write something!'
      }
    }).then((result) => {
      customerRelationshipArr.push(result.value);
      var html = "<div class='notes'>";
      for (var i = 0; i < customerRelationshipArr.length; i++) {
        html += "<div class='post-it-note'>";
        html += "<p>" + customerRelationshipArr[i] + "</p>";
        html += '</div>';

      }
      html += '</div>';
      document.getElementById('customerRelationshipArr').innerHTML = html;
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
      confirmButtonText: 'Ajouter',
      inputValidator: (value) => {
        return !value && 'You need to write something!'
      }
    }).then((result) => {
      customerSegmentsArr.push(result.value);
      var html = "<div class='notes'>";
      for (var i = 0; i < customerSegmentsArr.length; i++) {
        html += "<div class='post-it-note'>";
        html += "<p>" + customerSegmentsArr[i] + " </p>";
        html += '</div>';

      }
      html += '</div>';
      document.getElementById('customerSegmentsArr').innerHTML = html;
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
          confirmButtonText: 'Ajouter',
          inputValidator: (value) => {
              return !value && 'You need to write something!'
          }
      }).then((result) => {
          channelsArr.push(result.value);
          var html = "<div class='notes'>";
          for (var i = 0; i < channelsArr.length; i++) {
              html += "<div class='post-it-note'>";
              html += "<p>" + channelsArr[i] + "</p>";
              html += '</div>';

          }
          html += '</div>';
          document.getElementById('channelsArr').innerHTML = html;
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
          confirmButtonText: 'Ajouter',
          inputValidator: (value) => {
              return !value && 'You need to write something!'
          }
      }).then((result) => {
          costStructureArr.push(result.value);
          var html = "<div class='notes'>";
          for (var i = 0; i < costStructureArr.length; i++) {
              html += "<div class='post-it-note'>";
              html += "<p>" + costStructureArr[i] + "</p>";
              html += '</div>';

          }
          html += '</div>';
          document.getElementById('costStructureArr').innerHTML = html;
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
      confirmButtonText: 'Ajouter',
      inputValidator: (value) => {
        return !value && 'You need to write something!'
      }
    }).then((result) => {
      revenueStreamsArr.push(result.value);
      var html = "<div class='notes'>";
      for (var i = 0; i < revenueStreamsArr.length; i++) {
        html += "<div class='post-it-note'>";
        html += "<p>" + revenueStreamsArr[i] + "</p>";
        html += '</div>';

      }
      html += '</div>';
      document.getElementById('revenueStreamsArr').innerHTML = html;
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