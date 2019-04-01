
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(document).ready(function () {
    $('a[data-prompt="true"]').click(function (e) {
        var message = $(this).data('prompt-message') || "Are you sure?";
        var ask = confirm(message);

        if (ask) {
            return true;
        } else {
            e.stopPropagation();
            return false;
        }
    })
});
