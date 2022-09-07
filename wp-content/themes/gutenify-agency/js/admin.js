"use strict";

var _wp = wp,
    apiFetch = _wp.apiFetch;
jQuery(function ($) {
  var redirectToKitPage = function redirectToKitPage(res) {
    // if( res?.status && 'active' === res.status ) {
    window.location = "".concat(window.gutenify_agency.gutenify_kit_gallery); // }
  }; // Activate Gutenify.


  $(document).on('click', '.gutenify-agency-activate-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-agency-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins/gutenify/gutenify',
      method: 'POST',
      data: {
        "status": "active"
      }
    }).then(function (res) {
      redirectToKitPage(res);
    })["catch"](function () {
      redirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-agency-install-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-agency-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins',
      method: 'POST',
      data: {
        "slug": "gutenify",
        "status": "active"
      }
    }).then(function (res) {
      redirectToKitPage(res);
    })["catch"](function () {
      redirectToKitPage({});
    });
  });
});