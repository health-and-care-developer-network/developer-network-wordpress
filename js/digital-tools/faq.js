(function() {
    function expander(e) {
        var faqItem = e.target.parentElement;
        var status = faqItem.getAttribute("data-status");
        faqItem.setAttribute("data-status", status == 'closed' && 'open' || 'closed');
    }

    document.addEventListener("DOMContentLoaded", function(event) {
        var faqs = document.querySelectorAll(".faq_content .faq-item");

        Array.prototype.forEach.call(faqs, function(item) {
            item.addEventListener('click', expander, false);
        });
    });
})();
