/**
 * site.js
 * Handles all site related javascript functionality
 */
(function() {
    document.addEventListener('DOMContentLoaded', function() {

      // handle the submit your app and register interest pages
      //
      var btnStyle = document.querySelector("#btnSubmitYourApp").style;
      btnStyle.display = 'none';

      var chkTerms = document.getElementById("field_ge6ll-0").checked;
      var radioYes = document.getElementById("field_qi633-0");
      var radioNo = document.getElementById("field_qi633-1");

      // add listener for radioYes click
      radioYes.addEventListener('click', function(el){
        handleTAndC(btnStyle);
      });

      // add listener for radioNo click
      radioNo.addEventListener('click', function(el){
        btnStyle.display = 'none';
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
  var chkTAndC = document.getElementById("field_ge6ll-0");
  chkTAndC.addEventListener('click', function(e){
    if (chkTAndC.checked) {
      btnStyle.display = 'block';
    }
    else {
      btnStyle.display = 'none';
    }
  });

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
