import"./favorite.85fdb124.js";$(function(){$(function(){$.extend($.validator.messages,{minlength:"{0}\u6587\u5B57\u4EE5\u4E0A\u5165\u529B\u3057\u3066\u4E0B\u3055\u3044\u3002",maxlength:"{0}\u6587\u5B57\u4EE5\u4E0B\u3067\u5165\u529B\u3057\u3066\u4E0B\u3055\u3044\u3002",required:"\u5FC5\u9808\u9805\u76EE\u3067\u3059\u3002",digits:"\u534A\u89D2\u6570\u5B57\u3067\u5165\u529B\u3057\u3066\u304F\u3060\u3055\u3044\u3002",email:"E\u30E1\u30FC\u30EB\u306E\u5F62\u5F0F\u3067\u5165\u529B\u3057\u3066\u4E0B\u3055\u3044\u3002",number:"\u6570\u5B57\u3067\u5165\u529B\u3057\u3066\u304F\u3060\u3055\u3044\u3002",equalTo:"\u30E1\u30FC\u30EB\u30A2\u30C9\u30EC\u30B9\u3068\u78BA\u8A8D\u7528\u30E1\u30FC\u30EB\u30A2\u30C9\u30EC\u30B9\u304C\u4E00\u81F4\u3057\u307E\u305B\u3093\u3002"}),$.each({katakana:function(e,t){return this.optional(t)||/^[ア-ン゛゜ァ-ォャ-ョー「」、]+$/.test(e)},tel:function(e,t){return this.optional(t)||/^[0-9\-]+$/.test(e)}},function(e){$.validator.addMethod(e,this)}),$(".form01").validate({errorElement:"span",rules:{MailAddress:{email:!0},telNumber:{tel:!0,maxlength:13},zipCode:{digits:!0,maxlength:7},lastKana:{katakana:!0},firstKana:{katakana:!0},mailAddress:{email:!0},otherPCSkill:{maxlength:1e3},qualification:{maxlength:1e3},jobDescriptionA:{maxlength:5e3},jobDescriptionB:{maxlength:5e3},jobDescriptionC:{maxlength:5e3},jobDescriptionD:{maxlength:5e3},jobDescriptionE:{maxlength:5e3},toeflScore:{number:!0,digits:!0},toeicScore:{number:!0,digits:!0},message:{maxlength:1e3}},messages:{telNumber:{tel:"\u534A\u89D2\u82F1\u6570\u5B57\u3068\u30CF\u30A4\u30D5\u30F3\u306E\u307F\u3054\u5165\u529B\u304F\u3060\u3055\u3044\u3002"},lastKana:{katakana:"\u5168\u89D2\u30AB\u30BF\u30AB\u30CA\u3067\u3054\u5165\u529B\u304F\u3060\u3055\u3044\u3002"},firstKana:{katakana:"\u5168\u89D2\u30AB\u30BF\u30AB\u30CA\u3067\u3054\u5165\u529B\u304F\u3060\u3055\u3044\u3002"}}})}),$(".indicatorZip").on("click",h);function h(){let e=$("#zipCode"),t=$("#prefecture"),n=$("#city"),i=$("#street");if(e.val().length>=7){let l=e.val().slice(0,3)+e.val().slice(-4);new URL(window.location.href);let r=corp_url;$.ajaxSetup({headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")}}),$.ajax({url:r+"/form/selectZip",type:"POST",cache:!1,data:{zip:l}}).then((...o)=>{const[a,s,c]=o;let d=a[0].zip,m=a[0].kenCd,p=a[0].shikuCd,f=a[0].shikuMei,g=a[0].tyouiki;d!=null&&(t.val(m),n.children().remove(),n.append($("<option selected>").html(f).attr({value:p})),i.val(g))}).catch((...o)=>{})}}$("#prefecture").change(function(){let e=$(this).val();u(e)});function u(e){let t=$("#city");if(t.children().remove(),t.append($("<option>").html("\u9078\u629E\u3057\u3066\u304F\u3060\u3055\u3044").attr({value:""})),e&&e!==-1){new URL(window.location.href);let n=corp_url;$.ajaxSetup({headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")}}),$.ajax({url:n+"/form/selectPref",type:"POST",cache:!1,data:{pref:e}}).then((...i)=>{const[l,r,o]=i;l[0].forEach(function(a){let s=a.shikuCd,c=a.shikuMei;t.append($("<option>").html(c).attr({value:s}))})}).catch((...i)=>{})}}});
