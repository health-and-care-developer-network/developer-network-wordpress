/**
 * site.js
 *
 * Handles all site related javascript functionality
 */
(function () {
    document.addEventListener('DOMContentLoaded', function () {

        // handle the word counter for the submit your app
        //
        if (document.getElementById("btnSubmitYourApp")) {
          // count the words in the given string
          //

            function trimWords(s) {
                return s.replace(/(^\s*)|(\s*$)/gi, "");
            }

            function compressSpaces(s) {
                return s.replace(/[ ]{2,}/gi, " ");
            }

            function suppressNewline(s) {
                return s.replace(/\n /, "\n");
            }

            function cleanWords(s) {
                return !s && "" || suppressNewline(compressSpaces(trimWords(s)));
            }

            function getWords(s) {
                return cleanWords(s).split(' ');
            }

            function countWords(s) {
                return getWords(s).length;
            }

            function stripChars(str, max) {
                var words;
                if (max < 1) {
                    return "";
                }

                while (words = getWords(str), words.length > max) {
                    str = str.substring(0, str.length - (words[words.length - 1].length + 1));
                }

                return str;
            }

            function maxWordsDisplay(show) {
                document.getElementById('boxMaxWords').style.display = show && 'block' || 'none';
            }
            
            function setCounter(txt) {
                document.getElementById('boxMaxWordsCounter').innerHTML = txt;
            }

            // loop through the fields we want to check wordcount for
            [
                ['field_c53r1', 50],
                ['field_tm75d', 100],
                ['field_xl8j2', 100],
                ['field_gfoif', 100],
                ['field_6bllz', 100]
            ].forEach(function (o) {
                var el = document.getElementById(o[0]);
                var max_words = o[1];

                // create an element to display the number of words against the maximum
                // this can be reintroduced when I can figure it out...

                // var myCtr = document.createElement('div');
                // myCtr.className = 'boxMaxWords';
                // el.appendChild(myCtr);

                el.addEventListener('keyup', function () {
                    var num_words = countWords(el.value);

                    if (num_words > max_words) {
                        el.value = stripChars(el.value, max_words);
                        // update word count after stripping
                        num_words = countWords(el.value);
                    }

                    setCounter(num_words + '/' + max_words);
                    maxWordsDisplay(true);
                });

                el.addEventListener('focus', function () {
                    setCounter(countWords(el.value) + '/' + max_words);
                    maxWordsDisplay(true);
                });

                el.addEventListener('blur', function () {
                    maxWordsDisplay(false);
                });
            });

        } // btnSubmitYourApp

        // handle the submit your app and register interest pages
        //
        if (document.querySelector("#btnSubmitYourApp")) {
            var btnStyle = document.querySelector("#btnSubmitYourApp").style;
            btnStyle.display = 'none';

            if (document.getElementById("field_qi633-0")) {
                var radioYes = document.getElementById("field_qi633-0");
            }
            if (document.getElementById("field_qi633-1")) {
                var radioNo = document.getElementById("field_qi633-1");
            }

            if (document.getElementById("field_ge6ll-0")) {
                var chkTerms = document.getElementById("field_ge6ll-0");
            }

            // add listener for radioYes click
            if (radioYes) {
                radioYes.addEventListener('click', function (el) {
                    handleTAndC(btnStyle);
                });
            }

            // add listener for radioNo click
            if (radioNo) {
                radioNo.addEventListener('click', function (el) {
                    btnStyle.display = 'none';
                });
            }

        } // does btnSubmitYourApp button exist?

        if (document.getElementById("btnRegisterYourInterest")) {
            var btnRyiStyle = document.getElementById("btnRegisterYourInterest").style;
            btnRyiStyle.display = 'none';

            if (document.getElementById("field_tandcs-0")) {
                var chkTerms = document.getElementById("field_tandcs-0");
                chkTerms.addEventListener('click', function (e) {
                    if (chkTerms.checked) {
                        btnRyiStyle.display = 'block';
                    }
                    else {
                        btnRyiStyle.display = 'none';
                    }
                });
            }
            else {
                // just display register your interest button
                btnRyiStyle.display = 'block';
            }
        } // got a btnRegisterYourInterest button?

        /******/

        var mobileMenuIcon = document.querySelector(".menu__icon");
        var headerMenu = document.querySelector(".header__menu");

        var searchForm = document.querySelector(".header__search-form");
        var searchBox = document.querySelector(".header__search-box");

        // var mask = new Mask(window.location.href, ['.q-link']);
        var selectorTypes = ['.q-link'];
        dispelLinks(getLink(window.location.href), selectorTypes);


        mobileMenuIcon.addEventListener("click", function () {
            if (mobileMenuIcon.classList.contains("menu__icon--clicked")) {
                mobileMenuIcon.classList.remove("menu__icon--clicked");
                headerMenu.classList.remove("header__menu--display");
            } else {
                mobileMenuIcon.classList.add("menu__icon--clicked");
                headerMenu.classList.add("header__menu--display");
            }
        });

        searchForm.addEventListener("click", function () {
            if (searchForm.classList.contains("header__search--disabled")) {
                searchForm.classList.remove("header__search--disabled");
                searchBox.focus();
            }
        });

        searchForm.addEventListener("submit", function (e) {
            if (searchBox.value == "") {
                e.preventDefault();
                return;
            }

            searchForm.classList.add("header__search--loading")
        });

        searchBox.addEventListener("blur", function () {
            if (searchForm.classList.contains("header__search--disabled")) {
                return;
            }
            searchForm.classList.add("header__search--disabled");
        });

        // Manage the CTA's
        //
        if (document.getElementById('btnSubmitApp')) {
            btnSubmitApp = document.getElementById('btnSubmitApp');
            btnSubmitApp.addEventListener('click', function () {
                window.location.href = '/apps/submit-your-app';
            });
        }

        if (document.getElementById('btnRegisterInterest')) {
            btnRegisterInterest = document.getElementById('btnRegisterInterest');
            btnRegisterInterest.addEventListener('click', function () {
                window.location.href = '/apps/register-your-interest';
            });
        }

    }); // on DOMContentLoaded

})();

var handleTAndC = function (btnStyle) {
    var chkTAndC = document.getElementById("field_ge6ll-0");
    if (!chkTAndC) {
        btnStyle.display = 'block';
    }
    else {
        chkTAndC.addEventListener('click', function (e) {
            if (chkTAndC.checked) {
                btnStyle.display = 'block';
            }
            else {
                btnStyle.display = 'none';
            }
        });
    }

} // handleTAndC

var getLink = function (u) {
    var components = u.replace(/\/$/, '').split('/');
    return components[components.length - 1];
} // getLink

var dispelLinks = function (link, types) {
    var links = document.querySelectorAll(types.join(' '));
    Array.prototype.forEach.call(links, function (item) {
        if (getLink(item.href) == link) {
            item.style.display = 'none';
        }
    });
} // dispelLinks
