(()=>{function n(n,e){for(var o=0;o<e.length;o++){var r=e[o];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(n,r.key,r)}}var e=function(){function e(){!function(n,e){if(!(n instanceof e))throw new TypeError("Cannot call a class as a function")}(this,e)}var o,r,i;return o=e,(r=[{key:"init",value:function(){$("#social_login_enable").on("change",(function(n){$(n.currentTarget).prop("checked")?$(".wrapper-list-social-login-options").show():$(".wrapper-list-social-login-options").hide()})),$(".enable-social-login-option").on("change",(function(n){var e=$(n.currentTarget);e.prop("checked")?(e.closest(".wrapper-content").find(".enable-social-login-option-wrapper").show(),e.closest(".form-group").removeClass("mb-0")):(e.closest(".wrapper-content").find(".enable-social-login-option-wrapper").hide(),e.closest(".form-group").addClass("mb-0"))}))}}])&&n(o.prototype,r),i&&n(o,i),e}();$(document).ready((function(){(new e).init()}))})();