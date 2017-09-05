/**
 * site.js
 * Handles all site related javascript functionality
 */
(function() {
    document.addEventListener('DOMContentLoaded', function() {

      // handle the submit your app and register interest pages
      //
      var btnStyle = document.querySelector('#btnSubmitYourApp').style;
      btnStyle.display = 'none';

      var chkTerms = document.querySelector("#field_ge6ll-0").checked;
      var radioYesNo = document.getElementById('field_qi633-0');
      // console.log(radioYesNo);

      Array.prototype.map.call(document.getElementsByName("item_meta[5922]"), function(el) {
        el.addEventListener('click', function(e) {
          handleTAndC(btnStyle);
        });
      });

      Array.prototype.map.call(document.getElementsByName("item_meta[9434]"), function(el) {
        el.addEventListener('click', function(e) {
          handleTAndC(btnStyle);
        });
      });

        var mobileMenuIcon = document.querySelector(".menu__icon");
        var headerMenu = document.querySelector(".header__menu");

        var searchForm = document.querySelector(".header__search-form");
        var searchBox = document.querySelector(".header__search-box");

        // var mask = new Mask(window.location.href, ['.q-link']);
        var selectorTypes = ['.q-link'];
        dispelLinks(getLink(window.location.href), selectorTypes);


        mobileMenuIcon.addEventListener("click", function() {
            if (mobileMenuIcon.classList.contains("menu__icon--clicked")) {
                mobileMenuIcon.classList.remove("menu__icon--clicked");
                headerMenu.classList.remove("header__menu--display");
            } else {
                mobileMenuIcon.classList.add("menu__icon--clicked");
                headerMenu.classList.add("header__menu--display");
            }
        });

        searchForm.addEventListener("click", function() {
            if (searchForm.classList.contains("header__search--disabled")) {
                searchForm.classList.remove("header__search--disabled");
                searchBox.focus();
            }
        });

        searchForm.addEventListener("submit", function(e) {
            if (searchBox.value == "") {
                e.preventDefault();
                return;
            }

            searchForm.classList.add("header__search--loading")
        });

        searchBox.addEventListener("blur", function() {
            if (searchForm.classList.contains("header__search--disabled")) {
                return;
            }
            searchForm.classList.add("header__search--disabled");
        });

        // Manage the CTA's
        //
        if (document.getElementById('btnSubmitApp')) {
          btnSubmitApp = document.getElementById('btnSubmitApp');
          btnSubmitApp.addEventListener('click', function(){
            window.location.href = '/apps/submit-your-app';
          });
        }

        if (document.getElementById('btnRegisterInterest')) {
          btnRegisterInterest = document.getElementById('btnRegisterInterest');
          btnRegisterInterest.addEventListener('click', function(){
            window.location.href = '/apps/register-your-interest';
          });
        }

    }); // on DOMContentLoaded

})();


var handleTAndC = function(btnStyle) {
  var chkTAndC = new Array();
  chkTAndC.push(document.getElementById("field_ge6ll-0"));

  if (chkTAndC.length > 0) {
    Array.prototype.map.call(chkTAndC, function(el) {
      el.addEventListener('click', function(e) {
        var chkTerms = el.checked;
        if (chkTerms) {
          btnStyle.display = 'block';
        }
        else {
          btnStyle.display = 'none';
        }
      });
    });

  }
} // handleTAndC

var getLink = function(u) {
  var components = u.replace(/\/$/, '').split('/');
  return components[components.length-1];
} // getLink

var dispelLinks = function(link, types) {
  var links = document.querySelectorAll(types.join(' '));
  Array.prototype.forEach.call(links, function(item) {
      if (getLink(item.href) == link) {
        item.style.display = 'none';
      }
  });
} // dispelLinks
