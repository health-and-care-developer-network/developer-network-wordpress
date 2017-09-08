/**
 * site.js
 * Handles all site related javascript functionality
 */
(function() {
    document.addEventListener('DOMContentLoaded', function() {

      // handle the submit your app and register interest pages
      //
      if (document.querySelector("#btnSubmitYourApp")) {
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
      }

        var mobileMenuIcon = document.querySelector(".menu__icon");
        var headerMenu = document.querySelector(".header__menu");

        var searchForm = document.querySelector(".header__search-form");
        var searchBox = document.querySelector(".header__search-box");

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

        var cancelFeed = function (e) {
            console.log(e);
            document.querySelector(".section__download-loading").classList.add("section--hidden");
            document.querySelector(".section__download-list--static").classList.remove("section--hidden");
        };

        var handleFeed = function (safeData) {
            var data = safeData || {},
                query = data.query || {},
                results = query.results || {},
                rss = results.rss || {},
                channel = rss.channel || {},
                items = channel.item || false,
                list, idx;

            if (!items) {
                cancelFeed();
                return;
            }

            // reverse their order
            // items.reverse();

            list = document.querySelectorAll(".section__download-list--dynamic .section__download");

            for(idx in list) {
                if (list.hasOwnProperty(idx)) {
                    list[idx].parentNode.removeChild(list[idx]);
                }
            }

            items.slice(0,8).map(addDynamicItem);
            document.querySelector(".section__download-loading").classList.add("section--hidden");
            document.querySelector(".section__download-list--dynamic").classList.remove("section--hidden");
        };

        var addDynamicItem = function (item) {
            var dynList = document.querySelector(".section__download-list--dynamic");
            var parentDiv, symbolDiv, aRef, textNode;

            parentDiv = document.createElement("div");
            symbolDiv = document.createElement("div");
            aRef = document.createElement("a");
            textNode = document.createTextNode(item.title);
            aRef.setAttribute("href", item.link);
            aRef.classList.add("section__download-content");
            aRef.appendChild(textNode);

            symbolDiv.classList.add("section__symbol");
            symbolDiv.classList.add("section__symbol--document");

            parentDiv.classList.add("section__download");

            parentDiv.appendChild(symbolDiv);
            parentDiv.appendChild(aRef);

            dynList.appendChild(parentDiv);
        };

        if (document.querySelector("body").classList.contains("page-template-landing-page")) {
            fetch("https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20xml%20where%20url%3D%22" + developerHost + "%2Flearn%2Ffeed%2F%22&format=json").then(
                function (response) {
                    return response.json();
                }
            ).catch(cancelFeed).then(handleFeed).catch(cancelFeed);
        }
    });
})();
