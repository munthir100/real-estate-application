(()=>{function e(e,t){for(var a=0;a<t.length;a++){var i=t[a];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}var t=function(){function t(){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,t)}var a,i,n;return a=t,(i=[{key:"init",value:function(){var e=[{name:"wrap-widgets",pull:"clone",put:!1}];$.each($(".sidebar-item"),(function(){e.push({name:"wrap-widgets",pull:!0,put:!0})}));var t=function(e){if(e.length>0){var t=[];$.each(e.find("li[data-id]"),(function(e,a){t.push($(a).find("form").serialize())})),Botble.showNotice("info",BotbleVariables.languages.notices_msg.processing_request),$httpClient.make().post(BWidget.routes.save_widgets_sidebar,{items:t,sidebar_id:e.data("id")}).then((function(t){var a=t.data;e.find("ul").html(a.data),Botble.callScroll($(".list-page-select-widget")),Botble.initResources(),Botble.initMediaIntegrate(),Botble.showSuccess(a.message)})).finally((function(){e.find(".widget_save i").remove()}))}};e.forEach((function(e,a){Sortable.create(document.getElementById("wrap-widget-"+(a+1)),{sort:0!==a,group:e,delay:0,disabled:!1,store:null,animation:150,handle:".widget-handle",ghostClass:"sortable-ghost",chosenClass:"sortable-chosen",dataIdAttr:"data-id",forceFallback:!1,fallbackClass:"sortable-fallback",fallbackOnBody:!1,scroll:!0,scrollSensitivity:30,scrollSpeed:10,onUpdate:function(e){e.from!==e.to&&t($(e.from).closest(".sidebar-item")),t($(e.item).closest(".sidebar-item"))},onAdd:function(e){e.from!==e.to&&t($(e.from).closest(".sidebar-item")),t($(e.item).closest(".sidebar-item"))}})}));var a=$("#wrap-widgets");a.on("click",".widget-control-delete",(function(e){e.preventDefault();var t=$(e.currentTarget),a=t.closest("li");t.addClass("button-loading"),Botble.showNotice("info",BotbleVariables.languages.notices_msg.processing_request),$httpClient.make().delete(BWidget.routes.delete,{widget_id:a.data("id"),position:a.data("position"),sidebar_id:t.closest(".sidebar-item").data("id")}).then((function(e){var t=e.data;Botble.showSuccess(t.message),a.fadeOut().remove()})).finally((function(){a.find(".widget-control-delete").removeClass("button-loading")}))})),a.on("click","#added-widget .widget-handle",(function(e){var t=$(e.currentTarget);t.closest("li").find(".widget-content").slideToggle(300),t.find(".fa").toggleClass("fa-caret-up"),t.find(".fa").toggleClass("fa-caret-down")})),a.on("click","#added-widget .sidebar-header",(function(e){var t=$(e.currentTarget);t.closest(".sidebar-area").find("> ul").slideToggle(300),t.find(".fa").toggleClass("fa-caret-up"),t.find(".fa").toggleClass("fa-caret-down")})),a.on("click",".widget_save",(function(e){e.preventDefault();var a=$(e.currentTarget);a.addClass("button-loading"),t(a.closest(".sidebar-item"))})),Botble.callScroll($(".list-page-select-widget"))}}])&&e(a.prototype,i),n&&e(a,n),t}();$(document).ready((function(){(new t).init()}))})();