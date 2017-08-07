/**
 * site.js
 * Handles all site related javascript functionality
 */
(function() {
    document.addEventListener('DOMContentLoaded', function() {
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

    }); // on DOMContentLoaded

})();



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
