(()=>{function t(t,a){for(var i=0;i<a.length;i++){var r=a[i];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,r.key,r)}}var a=function(){function a(t){!function(t,a){if(!(t instanceof a))throw new TypeError("Cannot call a class as a function")}(this,a),this.$container=t,this.$avatarView=this.$container.find(".avatar-view"),this.$triggerButton=this.$avatarView.find(".mt-overlay .btn-outline"),this.$avatar=this.$avatarView.find("img"),this.$avatarModal=this.$container.find("#avatar-modal"),this.$loading=this.$container.find(".loading"),this.$avatarForm=this.$avatarModal.find(".avatar-form"),this.$avatarSrc=this.$avatarForm.find(".avatar-src"),this.$avatarData=this.$avatarForm.find(".avatar-data"),this.$avatarInput=this.$avatarForm.find(".avatar-input"),this.$avatarSave=this.$avatarForm.find(".avatar-save"),this.$avatarWrapper=this.$avatarModal.find(".avatar-wrapper"),this.$avatarPreview=this.$avatarModal.find(".avatar-preview"),this.support={fileList:!!$('<input type="file">').prop("files"),fileReader:!!window.FileReader,formData:!!window.FormData}}var i,r,e;return i=a,e=[{key:"isImageFile",value:function(t){return t.type?/^image\/\w+$/.test(t.type):/\.(jpg|jpeg|png|gif)$/.test(t)}}],(r=[{key:"init",value:function(){this.support.datauri=this.support.fileList&&this.support.fileReader,this.support.formData||this.initIframe(),this.initTooltip(),this.initModal(),this.addListener()}},{key:"addListener",value:function(){this.$triggerButton.on("click",$.proxy(this.click,this)),this.$avatarInput.on("change",$.proxy(this.change,this)),this.$avatarForm.on("submit",$.proxy(this.submit,this))}},{key:"initTooltip",value:function(){this.$avatarView.tooltip({placement:"bottom"})}},{key:"initModal",value:function(){this.$avatarModal.modal("hide"),this.initPreview()}},{key:"initPreview",value:function(){var t=this.$avatar.prop("src");this.$avatarPreview.empty().html('<img src="'+t+'" alt="avatar">')}},{key:"initIframe",value:function(){var t="avatar-iframe-"+Math.random().toString().replace(".",""),a=$('<iframe name="'+t+'" style="display:none;"></iframe>'),i=!0,r=this;this.$iframe=a,this.$avatarForm.attr("target",t).after(a),this.$iframe.on("load",(function(){var t,a,e;try{a=this.contentWindow,t=(e=(e=this.contentDocument)||a.document)?e.body.innerText:null}catch(t){}t?r.submitDone(t):i?i=!1:Botble.showError("Image upload failed!"),r.submitEnd()}))}},{key:"click",value:function(){this.$avatarModal.modal("show")}},{key:"change",value:function(){var t,i;this.support.datauri?(t=this.$avatarInput.prop("files")).length>0&&(i=t[0],a.isImageFile(i)&&this.read(i)):(i=this.$avatarInput.val(),a.isImageFile(i)&&this.syncUpload())}},{key:"submit",value:function(){return this.$avatarSrc.val()||this.$avatarInput.val()?this.support.formData?(this.ajaxUpload(),!1):void 0:(Botble.showError("Please select image!"),!1)}},{key:"read",value:function(t){var a=this,i=new FileReader;i.readAsDataURL(t),i.onload=function(){a.url=this.result,a.startCropper()}}},{key:"startCropper",value:function(){var t=this;this.active?this.$img.cropper("replace",this.url):(this.$img=$('<img src="'+this.url+'" alt="avatar">'),this.$avatarWrapper.empty().html(this.$img),this.$img.cropper({aspectRatio:1,rotatable:!0,preview:this.$avatarPreview.selector,done:function(a){var i=['{"x":'+a.x,'"y":'+a.y,'"height":'+a.height,'"width":'+a.width+"}"].join();t.$avatarData.val(i)}}),this.active=!0)}},{key:"stopCropper",value:function(){this.active&&(this.$img.cropper("destroy"),this.$img.remove(),this.active=!1)}},{key:"ajaxUpload",value:function(){var t=this,a=this.$avatarForm.attr("action"),i=new FormData(this.$avatarForm[0]);this.submitStart(),$httpClient.make().post(a,i).then((function(a){return t.submitDone(a.data)})).finally((function(){return t.submitEnd()}))}},{key:"syncUpload",value:function(){this.$avatarSave.trigger("click")}},{key:"submitStart",value:function(){this.$loading.fadeIn(),this.$avatarSave.attr("disabled",!0).text("Saving...")}},{key:"submitDone",value:function(t){try{t=$.parseJSON(t)}catch(t){}t&&!t.error&&t.data?(this.url=t.data.url,this.support.datauri||this.uploaded?(this.uploaded=!1,this.cropDone()):(this.uploaded=!0,this.$avatarSrc.val(this.url),this.startCropper()),this.$avatarInput.val(""),Botble.showSuccess(t.message)):Botble.showError(t.message)}},{key:"submitEnd",value:function(){this.$loading.fadeOut(),this.$avatarSave.removeAttr("disabled").text("Save")}},{key:"cropDone",value:function(){this.$avatarSrc.val(""),this.$avatarData.val(""),this.$avatar.prop("src",this.url),$(".user-menu img").prop("src",this.url),$(".user.dropdown img").prop("src",this.url),this.stopCropper(),this.initModal()}}])&&t(i.prototype,r),e&&t(i,e),a}();$(document).ready((function(){new a($(".crop-avatar")).init()}))})();