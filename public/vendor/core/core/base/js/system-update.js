(()=>{var e={7757:(e,t,r)=>{e.exports=r(5666)},7761:(e,t,r)=>{"use strict";r.d(t,{Z:()=>a});var n=r(1519),o=r.n(n)()((function(e){return e[1]}));o.push([e.id,'.half-circle-spinner,.half-circle-spinner *{box-sizing:border-box}.half-circle-spinner{border-radius:100%;height:60px;position:relative;width:60px}.half-circle-spinner .circle{border:6px solid transparent;border-radius:100%;content:"";height:100%;position:absolute;width:100%}.half-circle-spinner .circle.circle-1{animation:half-circle-spinner-animation 1s infinite;border-top-color:#ff1d5e}.half-circle-spinner .circle.circle-2{animation:half-circle-spinner-animation 1s infinite alternate;border-bottom-color:#ff1d5e}@keyframes half-circle-spinner-animation{0%{transform:rotate(0)}to{transform:rotate(1turn)}}',""]);const a=o},380:(e,t,r)=>{"use strict";r.d(t,{Z:()=>a});var n=r(1519),o=r.n(n)()((function(e){return e[1]}));o.push([e.id,".updating[data-v-7e6e5fba]{-webkit-backdrop-filter:blur(5px);backdrop-filter:blur(5px);background:rgba(0,0,0,.6);height:100%;left:0;overflow:hidden;position:fixed;top:0;width:100%;z-index:9999}.updating>.updating-wrapper[data-v-7e6e5fba]{height:100%;position:absolute;top:calc(30% - 100px);width:100%}.updating>.updating-wrapper>.updating-container[data-v-7e6e5fba]{margin:0 auto;max-width:500px;text-align:center}.updating>.updating-wrapper>.updating-container .percent[data-v-7e6e5fba]{color:#fefefe;font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;font-size:86px;margin-bottom:24px}.updating>.updating-wrapper>.updating-container .information[data-v-7e6e5fba]{color:#efefef;font-size:18px;margin:32px 0;padding:0 8px}.updating>.updating-wrapper>.updating-container .important[data-v-7e6e5fba]{color:#efefef}.updating .red[data-v-7e6e5fba]{color:#fdc9c9}.updating .red-shadow[data-v-7e6e5fba]{text-shadow:0 0 16px #ef0012}",""]);const a=o},1519:e=>{"use strict";e.exports=function(e){var t=[];return t.toString=function(){return this.map((function(t){var r=e(t);return t[2]?"@media ".concat(t[2]," {").concat(r,"}"):r})).join("")},t.i=function(e,r,n){"string"==typeof e&&(e=[[null,e,""]]);var o={};if(n)for(var a=0;a<this.length;a++){var i=this[a][0];null!=i&&(o[i]=!0)}for(var c=0;c<e.length;c++){var s=[].concat(e[c]);n&&o[s[0]]||(r&&(s[2]?s[2]="".concat(r," and ").concat(s[2]):s[2]=r),t.push(s))}},t}},5666:e=>{var t=function(e){"use strict";var t,r=Object.prototype,n=r.hasOwnProperty,o="function"==typeof Symbol?Symbol:{},a=o.iterator||"@@iterator",i=o.asyncIterator||"@@asyncIterator",c=o.toStringTag||"@@toStringTag";function s(e,t,r){return Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}),e[t]}try{s({},"")}catch(e){s=function(e,t,r){return e[t]=r}}function l(e,t,r,n){var o=t&&t.prototype instanceof v?t:v,a=Object.create(o.prototype),i=new B(n||[]);return a._invoke=function(e,t,r){var n=p;return function(o,a){if(n===d)throw new Error("Generator is already running");if(n===h){if("throw"===o)throw a;return O()}for(r.method=o,r.arg=a;;){var i=r.delegate;if(i){var c=N(i,r);if(c){if(c===m)continue;return c}}if("next"===r.method)r.sent=r._sent=r.arg;else if("throw"===r.method){if(n===p)throw n=h,r.arg;r.dispatchException(r.arg)}else"return"===r.method&&r.abrupt("return",r.arg);n=d;var s=u(e,t,r);if("normal"===s.type){if(n=r.done?h:f,s.arg===m)continue;return{value:s.arg,done:r.done}}"throw"===s.type&&(n=h,r.method="throw",r.arg=s.arg)}}}(e,r,i),a}function u(e,t,r){try{return{type:"normal",arg:e.call(t,r)}}catch(e){return{type:"throw",arg:e}}}e.wrap=l;var p="suspendedStart",f="suspendedYield",d="executing",h="completed",m={};function v(){}function g(){}function y(){}var b={};s(b,a,(function(){return this}));var w=Object.getPrototypeOf,x=w&&w(w(_([])));x&&x!==r&&n.call(x,a)&&(b=x);var k=y.prototype=v.prototype=Object.create(b);function E(e){["next","throw","return"].forEach((function(t){s(e,t,(function(e){return this._invoke(t,e)}))}))}function S(e,t){function r(o,a,i,c){var s=u(e[o],e,a);if("throw"!==s.type){var l=s.arg,p=l.value;return p&&"object"==typeof p&&n.call(p,"__await")?t.resolve(p.__await).then((function(e){r("next",e,i,c)}),(function(e){r("throw",e,i,c)})):t.resolve(p).then((function(e){l.value=e,i(l)}),(function(e){return r("throw",e,i,c)}))}c(s.arg)}var o;this._invoke=function(e,n){function a(){return new t((function(t,o){r(e,n,t,o)}))}return o=o?o.then(a,a):a()}}function N(e,r){var n=e.iterator[r.method];if(n===t){if(r.delegate=null,"throw"===r.method){if(e.iterator.return&&(r.method="return",r.arg=t,N(e,r),"throw"===r.method))return m;r.method="throw",r.arg=new TypeError("The iterator does not provide a 'throw' method")}return m}var o=u(n,e.iterator,r.arg);if("throw"===o.type)return r.method="throw",r.arg=o.arg,r.delegate=null,m;var a=o.arg;return a?a.done?(r[e.resultName]=a.value,r.next=e.nextLoc,"return"!==r.method&&(r.method="next",r.arg=t),r.delegate=null,m):a:(r.method="throw",r.arg=new TypeError("iterator result is not an object"),r.delegate=null,m)}function C(e){var t={tryLoc:e[0]};1 in e&&(t.catchLoc=e[1]),2 in e&&(t.finallyLoc=e[2],t.afterLoc=e[3]),this.tryEntries.push(t)}function L(e){var t=e.completion||{};t.type="normal",delete t.arg,e.completion=t}function B(e){this.tryEntries=[{tryLoc:"root"}],e.forEach(C,this),this.reset(!0)}function _(e){if(e){var r=e[a];if(r)return r.call(e);if("function"==typeof e.next)return e;if(!isNaN(e.length)){var o=-1,i=function r(){for(;++o<e.length;)if(n.call(e,o))return r.value=e[o],r.done=!1,r;return r.value=t,r.done=!0,r};return i.next=i}}return{next:O}}function O(){return{value:t,done:!0}}return g.prototype=y,s(k,"constructor",y),s(y,"constructor",g),g.displayName=s(y,c,"GeneratorFunction"),e.isGeneratorFunction=function(e){var t="function"==typeof e&&e.constructor;return!!t&&(t===g||"GeneratorFunction"===(t.displayName||t.name))},e.mark=function(e){return Object.setPrototypeOf?Object.setPrototypeOf(e,y):(e.__proto__=y,s(e,c,"GeneratorFunction")),e.prototype=Object.create(k),e},e.awrap=function(e){return{__await:e}},E(S.prototype),s(S.prototype,i,(function(){return this})),e.AsyncIterator=S,e.async=function(t,r,n,o,a){void 0===a&&(a=Promise);var i=new S(l(t,r,n,o),a);return e.isGeneratorFunction(r)?i:i.next().then((function(e){return e.done?e.value:i.next()}))},E(k),s(k,c,"Generator"),s(k,a,(function(){return this})),s(k,"toString",(function(){return"[object Generator]"})),e.keys=function(e){var t=[];for(var r in e)t.push(r);return t.reverse(),function r(){for(;t.length;){var n=t.pop();if(n in e)return r.value=n,r.done=!1,r}return r.done=!0,r}},e.values=_,B.prototype={constructor:B,reset:function(e){if(this.prev=0,this.next=0,this.sent=this._sent=t,this.done=!1,this.delegate=null,this.method="next",this.arg=t,this.tryEntries.forEach(L),!e)for(var r in this)"t"===r.charAt(0)&&n.call(this,r)&&!isNaN(+r.slice(1))&&(this[r]=t)},stop:function(){this.done=!0;var e=this.tryEntries[0].completion;if("throw"===e.type)throw e.arg;return this.rval},dispatchException:function(e){if(this.done)throw e;var r=this;function o(n,o){return c.type="throw",c.arg=e,r.next=n,o&&(r.method="next",r.arg=t),!!o}for(var a=this.tryEntries.length-1;a>=0;--a){var i=this.tryEntries[a],c=i.completion;if("root"===i.tryLoc)return o("end");if(i.tryLoc<=this.prev){var s=n.call(i,"catchLoc"),l=n.call(i,"finallyLoc");if(s&&l){if(this.prev<i.catchLoc)return o(i.catchLoc,!0);if(this.prev<i.finallyLoc)return o(i.finallyLoc)}else if(s){if(this.prev<i.catchLoc)return o(i.catchLoc,!0)}else{if(!l)throw new Error("try statement without catch or finally");if(this.prev<i.finallyLoc)return o(i.finallyLoc)}}}},abrupt:function(e,t){for(var r=this.tryEntries.length-1;r>=0;--r){var o=this.tryEntries[r];if(o.tryLoc<=this.prev&&n.call(o,"finallyLoc")&&this.prev<o.finallyLoc){var a=o;break}}a&&("break"===e||"continue"===e)&&a.tryLoc<=t&&t<=a.finallyLoc&&(a=null);var i=a?a.completion:{};return i.type=e,i.arg=t,a?(this.method="next",this.next=a.finallyLoc,m):this.complete(i)},complete:function(e,t){if("throw"===e.type)throw e.arg;return"break"===e.type||"continue"===e.type?this.next=e.arg:"return"===e.type?(this.rval=this.arg=e.arg,this.method="return",this.next="end"):"normal"===e.type&&t&&(this.next=t),m},finish:function(e){for(var t=this.tryEntries.length-1;t>=0;--t){var r=this.tryEntries[t];if(r.finallyLoc===e)return this.complete(r.completion,r.afterLoc),L(r),m}},catch:function(e){for(var t=this.tryEntries.length-1;t>=0;--t){var r=this.tryEntries[t];if(r.tryLoc===e){var n=r.completion;if("throw"===n.type){var o=n.arg;L(r)}return o}}throw new Error("illegal catch attempt")},delegateYield:function(e,r,n){return this.delegate={iterator:_(e),resultName:r,nextLoc:n},"next"===this.method&&(this.arg=t),m}},e}(e.exports);try{regeneratorRuntime=t}catch(e){"object"==typeof globalThis?globalThis.regeneratorRuntime=t:Function("r","regeneratorRuntime = r")(t)}},3379:(e,t,r)=>{"use strict";var n,o=function(){return void 0===n&&(n=Boolean(window&&document&&document.all&&!window.atob)),n},a=function(){var e={};return function(t){if(void 0===e[t]){var r=document.querySelector(t);if(window.HTMLIFrameElement&&r instanceof window.HTMLIFrameElement)try{r=r.contentDocument.head}catch(e){r=null}e[t]=r}return e[t]}}(),i=[];function c(e){for(var t=-1,r=0;r<i.length;r++)if(i[r].identifier===e){t=r;break}return t}function s(e,t){for(var r={},n=[],o=0;o<e.length;o++){var a=e[o],s=t.base?a[0]+t.base:a[0],l=r[s]||0,u="".concat(s," ").concat(l);r[s]=l+1;var p=c(u),f={css:a[1],media:a[2],sourceMap:a[3]};-1!==p?(i[p].references++,i[p].updater(f)):i.push({identifier:u,updater:v(f,t),references:1}),n.push(u)}return n}function l(e){var t=document.createElement("style"),n=e.attributes||{};if(void 0===n.nonce){var o=r.nc;o&&(n.nonce=o)}if(Object.keys(n).forEach((function(e){t.setAttribute(e,n[e])})),"function"==typeof e.insert)e.insert(t);else{var i=a(e.insert||"head");if(!i)throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");i.appendChild(t)}return t}var u,p=(u=[],function(e,t){return u[e]=t,u.filter(Boolean).join("\n")});function f(e,t,r,n){var o=r?"":n.media?"@media ".concat(n.media," {").concat(n.css,"}"):n.css;if(e.styleSheet)e.styleSheet.cssText=p(t,o);else{var a=document.createTextNode(o),i=e.childNodes;i[t]&&e.removeChild(i[t]),i.length?e.insertBefore(a,i[t]):e.appendChild(a)}}function d(e,t,r){var n=r.css,o=r.media,a=r.sourceMap;if(o?e.setAttribute("media",o):e.removeAttribute("media"),a&&"undefined"!=typeof btoa&&(n+="\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(a))))," */")),e.styleSheet)e.styleSheet.cssText=n;else{for(;e.firstChild;)e.removeChild(e.firstChild);e.appendChild(document.createTextNode(n))}}var h=null,m=0;function v(e,t){var r,n,o;if(t.singleton){var a=m++;r=h||(h=l(t)),n=f.bind(null,r,a,!1),o=f.bind(null,r,a,!0)}else r=l(t),n=d.bind(null,r,t),o=function(){!function(e){if(null===e.parentNode)return!1;e.parentNode.removeChild(e)}(r)};return n(e),function(t){if(t){if(t.css===e.css&&t.media===e.media&&t.sourceMap===e.sourceMap)return;n(e=t)}else o()}}e.exports=function(e,t){(t=t||{}).singleton||"boolean"==typeof t.singleton||(t.singleton=o());var r=s(e=e||[],t);return function(e){if(e=e||[],"[object Array]"===Object.prototype.toString.call(e)){for(var n=0;n<r.length;n++){var o=c(r[n]);i[o].references--}for(var a=s(e,t),l=0;l<r.length;l++){var u=c(r[l]);0===i[u].references&&(i[u].updater(),i.splice(u,1))}r=a}}}},3744:(e,t)=>{"use strict";t.Z=(e,t)=>{const r=e.__vccOpts||e;for(const[e,n]of t)r[e]=n;return r}}},t={};function r(n){var o=t[n];if(void 0!==o)return o.exports;var a=t[n]={id:n,exports:{}};return e[n](a,a.exports,r),a.exports}r.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return r.d(t,{a:t}),t},r.d=(e,t)=>{for(var n in t)r.o(t,n)&&!r.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:t[n]})},r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),r.nc=void 0,(()=>{"use strict";const e=Vue;var t=function(t){return(0,e.pushScopeId)("data-v-7e6e5fba"),t=t(),(0,e.popScopeId)(),t},n={class:"content"},o={key:0,class:"text-center"},a={key:0},i={key:1},c=t((function(){return(0,e.createElementVNode)("i",{class:"fa fa-check me-2"},null,-1)})),s=t((function(){return(0,e.createElementVNode)("span",null,"Click To Confirm!",-1)})),l={key:1,class:"updating"},u={class:"updating-wrapper"},p={class:"updating-container"},f={key:0,class:"loader"},d=["textContent"],h={class:"information"},m=["textContent"],v={key:1,class:"important red-shadow"},g=[t((function(){return(0,e.createElementVNode)("strong",null,"DO NOT CLOSE WINDOWS DURING UPDATE!",-1)}))],y={key:2};var b=r(7757),w=r.n(b),x=r(3379),k=r.n(x),E=r(7761),S={insert:"head",singleton:!1};k()(E.Z,S);E.Z.locals;function N(e,t,r,n,o,a,i){try{var c=e[a](i),s=c.value}catch(e){return void r(e)}c.done?t(s):Promise.resolve(s).then(n,o)}function C(e){return function(){var t=this,r=arguments;return new Promise((function(n,o){var a=e.apply(t,r);function i(e){N(a,n,o,i,c,"next",e)}function c(e){N(a,n,o,i,c,"throw",e)}i(void 0)}))}}const L={components:{HalfCircleSpinner:((e,t)=>{const r=e.__vccOpts||e;for(const[e,n]of t)r[e]=n;return r})({name:"HalfCircleSpinner",props:{animationDuration:{type:Number,default:1e3},size:{type:Number,default:60},color:{type:String,default:"#fff"}},computed:{spinnerStyle(){return{height:`${this.size}px`,width:`${this.size}px`}},circleStyle(){return{borderWidth:this.size/10+"px",animationDuration:`${this.animationDuration}ms`}},circle1Style(){return Object.assign({borderTopColor:this.color},this.circleStyle)},circle2Style(){return Object.assign({borderBottomColor:this.color},this.circleStyle)}}},[["render",function(t,r,n,o,a,i){return(0,e.openBlock)(),(0,e.createElementBlock)("div",{class:"half-circle-spinner",style:(0,e.normalizeStyle)(i.spinnerStyle)},[(0,e.createElementVNode)("div",{class:"circle circle-1",style:(0,e.normalizeStyle)(i.circle1Style)},null,4),(0,e.createElementVNode)("div",{class:"circle circle-2",style:(0,e.normalizeStyle)(i.circle2Style)},null,4)],4)}]])},props:{updateUrl:String,updateId:String,version:String,firstStep:String,firstStepMessage:String,lastStep:String,isOutdated:Boolean},data:function(){return{askToProcessUpdate:!1,performingUpdate:!1,results:[],realPercent:0,percent:0,percentInterval:0,step:this.firstStep,loading:!1}},watch:{realPercent:function(){var e=this;this.percentInterval||(this.percentInterval=setInterval((function(){e.percent>=e.realPercent||(100!==e.percent?e.percent+=1:clearInterval(e.percentInterval))}),100))}},methods:{performUpdate:function(){var e=this;return C(w().mark((function t(){return w().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return e.loading=!0,e.performingUpdate=!0,e.realPercent=5,e.results.push({text:e.firstStepMessage,error:!1}),t.prev=4,t.next=7,e.triggerUpdate();case 7:setTimeout((function(){return e.refresh()}),3e4),t.next=13;break;case 10:t.prev=10,t.t0=t.catch(4),e.loading=!1;case 13:case"end":return t.stop()}}),t,null,[[4,10]])})))()},triggerUpdate:function(){var e=this;return C(w().mark((function t(){return w().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.abrupt("return",e.$httpClient.makeWithoutErrorHandler().post(e.updateUrl,{step_name:e.step,update_id:e.updateId,version:e.version}).then((function(t){var r=t.data;if(!r.data||!r.data.next_step||!r.data.next_message)throw new Error("Something went wrong, could not update the system.");if(e.step=r.data.next_step,e.realPercent=r.data.current_percent,e.results.push({text:r.data.next_message,error:!1}),r.data.next_step!==e.lastStep)return e.triggerUpdate();e.percent=100,e.loading=!1,clearInterval(e.percentInterval)})).catch((function(t){var r=t.message;throw e.loading=!1,t.data&&t.data.message?r=t.data.message:t.response&&t.response.data.message&&(r=t.response.data.message),e.results.push({text:r,error:!0}),t})));case 1:case"end":return t.stop()}}),t)})))()},refresh:function(){window.location.reload()}}};var B=r(380),_={insert:"head",singleton:!1};k()(B.Z,_);B.Z.locals;const O=(0,r(3744).Z)(L,[["render",function(t,r,b,w,x,k){var E=(0,e.resolveComponent)("half-circle-spinner");return(0,e.openBlock)(),(0,e.createElementBlock)("div",n,[(0,e.renderSlot)(t.$slots,"default",{},void 0,!0),x.performingUpdate?(0,e.createCommentVNode)("",!0):((0,e.openBlock)(),(0,e.createElementBlock)("div",o,[x.askToProcessUpdate?(0,e.createCommentVNode)("",!0):((0,e.openBlock)(),(0,e.createElementBlock)("button",{key:0,type:"button",class:"btn btn-warning",onClick:r[0]||(r[0]=(0,e.withModifiers)((function(e){return x.askToProcessUpdate=!0}),["prevent"]))},[(0,e.createElementVNode)("i",{class:(0,e.normalizeClass)(["fa me-2",{"fa-download":b.isOutdated,"fa-refresh":!b.isOutdated}])},null,2),b.isOutdated?((0,e.openBlock)(),(0,e.createElementBlock)("span",a,"Download & Install Update")):((0,e.openBlock)(),(0,e.createElementBlock)("span",i,"Re-install The Latest Version"))])),x.askToProcessUpdate?((0,e.openBlock)(),(0,e.createElementBlock)("button",{key:1,type:"button",class:"btn btn-danger",onClick:r[1]||(r[1]=function(){return k.performUpdate&&k.performUpdate.apply(k,arguments)})},[c,(0,e.createTextVNode)(),s])):(0,e.createCommentVNode)("",!0)])),x.performingUpdate?((0,e.openBlock)(),(0,e.createElementBlock)("div",l,[(0,e.createElementVNode)("div",u,[(0,e.createElementVNode)("div",p,[x.loading?((0,e.openBlock)(),(0,e.createElementBlock)("div",f,[(0,e.createVNode)(E,{"animation-duration":1e3,size:32})])):(0,e.createCommentVNode)("",!0),(0,e.createElementVNode)("div",{class:"percent",textContent:(0,e.toDisplayString)("".concat(x.percent,"%"))},null,8,d),(0,e.createElementVNode)("div",h,[((0,e.openBlock)(!0),(0,e.createElementBlock)(e.Fragment,null,(0,e.renderList)(x.results,(function(t){return(0,e.openBlock)(),(0,e.createElementBlock)("p",{textContent:(0,e.toDisplayString)(t.text),class:(0,e.normalizeClass)(t.error?"bold text-pink red-shadow":"bold")},null,10,m)})),256))]),x.loading?((0,e.openBlock)(),(0,e.createElementBlock)("div",v,g)):((0,e.openBlock)(),(0,e.createElementBlock)("div",y,[(0,e.createElementVNode)("div",{class:"btn btn-info",onClick:r[2]||(r[2]=function(){return k.refresh&&k.refresh.apply(k,arguments)})},"Click Here To Exit")]))])])])):(0,e.createCommentVNode)("",!0)])}],["__scopeId","data-v-7e6e5fba"]]);"undefined"!=typeof vueApp&&vueApp.booting((function(e){e.component("system-update-component",O)}))})()})();