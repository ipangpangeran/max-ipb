(function(){'use strict';window.reEmbed=window.reEmbed||window.reEmbedit||{};var n=/Android|iPhone|iPod|iPad|Windows Phone/.test(navigator.userAgent);var q=0;function r(a){if(!(3<q)){q++;a.source="script";var b="//telemetry.reembed.com/?",c;for(c in a)b+=c+"="+encodeURIComponent(a[c])+"&";b+="ts="+(new Date).getTime();document.createElement("img").src=b}}function ca(){if(!document.querySelector)return document.location.href;var a=document.querySelector('link[rel="canonical"]');return a&&a.href?a.href:(a=document.querySelector('meta[property="og:url"]'))&&a.content?a.content:document.location.href}
function t(a){a=a||window.event;a.preventDefault?a.preventDefault():a.returnValue=!1}function da(a){for(;a.hasChildNodes();)a.removeChild(a.lastChild)}function u(a){var b=a.getAttribute("width");a=a.getAttribute("height");return b&&0>b.indexOf("%")&&a&&0>a.indexOf("%")&&(b=parseFloat(b),a=parseFloat(a),0<a&&0<b)?b/a:0}function w(a){var b=u(a);if(b&&(.1>=Math.abs(b-16/9)||.1>=Math.abs(b-4/3)))return b;b=x(a,"width");a=x(a,"height");return 0<b&&0<a&&1.4>b/a?1.33333333333:1.77777777778}
function x(a,b){var c=y(a,b),c=-1<c.indexOf("%")&&a.parentElement?parseFloat(c)/100*x(a.parentElement,b):"auto"==c&&a.parentElement&&1>=a.parentElement.children.length?x(a.parentElement,b):parseFloat(c),d=a.getAttribute(b);!c&&d&&(c=0<d.indexOf("%")&&a.parentElement?parseFloat(d)/100*x(a.parentElement,b):parseFloat(d));return c}function z(a,b,c){a=a.createElement(b);for(var d in c)a.setAttribute(d,c[d]);return a}function A(a,b){return z(document,a,b)}
function ea(a){var b="";try{try{b=Document.prototype.createElement.call(document,"script")}catch(c){b=HTMLDocument.prototype.createElement.call(document,"script")}}catch(d){document.createElement("img").src="https://assets.reembed.com/report-error/onHTMLDOUMENT/",b=document.createElement("script")}b.type="text/javascript";b.src=a;return b}function C(a,b){return"undefined"===typeof a.getElementsByClassName?a.querySelectorAll("."+b):a.getElementsByClassName(b)}
function y(a,b){if(window.getComputedStyle)return window.getComputedStyle(a).getPropertyValue(b);if(a.currentStyle){var c=b.replace(/(\-[a-z])/g,function(a){return a.toUpperCase().replace("-","")});return a.currentStyle[c]}return""}function fa(a){a=y(a,"width");return-1<a.indexOf("%")||"auto"===a?0:parseInt(a,10)}function D(a,b){a.parentNode&&"object"===a.parentNode.nodeName.toLowerCase()?a.parentNode.parentNode.replaceChild(b,a.parentNode):a.parentNode.replaceChild(b,a);return b}
function E(a,b){for(var c=0,d=a.length,e;c<d;c++)if(e=a[c],"string"===typeof e||"number"===typeof e)b.innerHTML+=e;else if(e)if("string"===typeof e[0]){var f=document.createElement(e.shift()),h,g;"[object Object]"==={}.toString.call(e[0])&&(h=e.shift());for(g in h)h[g]&&f.setAttribute(g,h[g]);b.appendChild(E(e,f))}else e.nodeType?b.appendChild(e):E(e,b);return b}
function ga(a){function b(f){if("readystatechange"!=f.type||"complete"==e.readyState)("load"==f.type?c:e)[g](k+f.type,b,!1),!d&&(d=!0)&&a.call(c,f.type||f)}var c=window,d=!1,e=c.document,f=e.addEventListener,h=f?"addEventListener":"attachEvent",g=f?"removeEventListener":"detachEvent",k=f?"":"on";"complete"==e.readyState?a.call(c,"lazy"):(e[h](k+"DOMContentLoaded",b,!1),e[h](k+"readystatechange",b,!1),c[h](k+"load",b,!1))};function F(a){for(var b=[];a&&a!==document.body;a=a.parentElement)a.clientHeight&&4<a.scrollHeight-a.clientHeight&&b.push(a);return b}function G(a,b){if(a.height&&-1<(""+a.height).indexOf("%"))return!1;var c=x(a,"height");if(!c||150==c)return!1;var d=F(a);a.setAttribute("height",c+b);var e=F(a);return 0!==d.length-e.length?(a.setAttribute("height",c),!1):!0};var I=[4,4,1,1];function J(a){var b=[],c=y(a,"width");y(a,"height");var d=y(a,"padding-bottom");a=y(a,"padding-top");if(0<d.indexOf("%")&&30<parseFloat(d)||0<parseFloat(c)&&.3<parseFloat(d)/parseFloat(c))b.push("padding-bottom"),b.push("height"),5<parseFloat(a)&&b.push("padding-top");if(0<a.indexOf("%")&&30<parseFloat(a)||0<parseFloat(c)&&.3<parseFloat(a)/parseFloat(c))b.push("padding-top"),b.push("height");return b}
function K(a){a=a.parentElement;for(var b=0,c=I.length;b<c&&a&&!(a.children.length>I[b]);b++){if(0<J(a).length)return!0;a=a.parentElement}return!1}
function L(a){a=a.parentElement;for(var b,c=0,d=I.length;c<d&&a&&!(a.children.length>I[c]);c++){b=J(a);if(0<b.length){c=0;for(d=b.length;c<d;c++){var e=a,f=b[c],h="height"===f?"auto":"0px",g=e.style.cssText;""!==g&&(g+=";");h=" "+f+": "+h+" !important; ";f=new RegExp("("+(""+f).replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g,"\\$&")+".*?;|$)","i");e.style.cssText=g.replace(f,h)}break}a=a.parentElement}};function ha(a,b,c){function d(){if(!e){e=!0;if(!document.querySelectorAll)return!1;for(var d=document.querySelectorAll("div.reembed-widget"),h=0;h<d.length;h++){var g=d[h];if(g){var k=y(g,"color");g.innerHTML='<iframe allowtransparency="true" frameborder="0" scrolling="no" src="//widgets.reembed.com/widget/videos/top/'+a+"/"+b+"/#color="+k+"&rurl="+encodeURIComponent(ca())+"&pcolors="+encodeURIComponent(c.i.join(";"))+'" style="width:100%;height:100%;"></iframe>'}}}}var e=!1;window.addEventListener?
window.addEventListener("load",d,!1):window.attachEvent&&window.attachEvent("onload",d);ga(function(){window.setTimeout(d,1500)})};var M=!1;function N(){if(!M&&"undefined"===typeof reEmbedit_test){M=!0;var a=document.createElement("link");a.rel="stylesheet";a.href="//cdn.reembed.com/player/core150512-0.css";ia.appendChild(a)}};var ia=document.getElementsByTagName("head")[0];function O(a,b,c){this.height=b.height||x(a,"height");this.width=b.width||x(a,"width");if(!this.width||!this.height)throw RangeError("Unable to detect valid width or height");this.startVideo=0;this.b=a;this.id=ja++;this.title=b.title;this.list=b.list;this.behavior=c.behavior;this.e=b.e;this.f=b.f;this.f||(this.e=!0);this.u=n;this.d=b.d||0;this.d>this.list.length&&(this.d=this.list.length-1);this.H=this.d;this.v=this.list.length;this.g=this.d;K(a)&&(this.behavior=0);b=55+c.k;if(1===this.behavior&&
G(a,b))this.height+=b;else if(0===this.behavior&&a.parentElement){var d=w(a);this.width=Math.round(fa(a.parentElement));this.height=b+this.width/d}if(!this.width||!this.height)throw RangeError("Unable to detect valid width or height");L(a);da(a);ka(this,a);a=this.height;this.e&&(a-=25);b=this.width;this.f&&(b-=this.f.size);c.behavior=1;this.video=new P(this.A,{src:this.list[this.d].src,type:this.list[this.d].type,c:this.list[this.d].provider,width:b,height:a},c);var e=this;la(this);Q(this.video,function(a){var b=
e.list,c,d;for(c=e.d-1;-1<c;c--)a.Playlist.insertBeginning({src:b[c].src,type:b[c].type});a.Playlist.positionInQ=e.d;c=e.d+1;for(d=b.length;c<d;c++)a.Playlist.insertEnd({src:b[c].src,type:b[c].type});ma(e,a)});return this}var ja=0;
function ka(a,b){a.A=document.createElement("div");a.a=document.createElement("ul");a.a.className="rem_playlist_ul";a.e&&(a.a.style.marginTop="25px");a.a.style.zIndex="10";a.f&&(a.a.style.width=a.f.size+"px");a.b=document.createElement("div");a.b.id="rem_playlist"+a.id;a.b.className="rem_playlist"+(a.e?" rem_inline_list":"")+" rem_playlist_default";a.b.style.width=a.width+"px";a.b.style.height=a.height+"px";a.e||(a.b.style.height=a.height+"px");var c="none";a.e&&(c="block");a.b=E([["div",{"class":"rem_playlist_toolbar",
style:"display: "+c+";"},["span",{"class":"rem_playlist_title"},a.title],["span",{"class":"rem_playlist_actions"},["span",{"class":"rem_playlist_skip_control previous"}],["span",{"class":"rem_playlist_info"},["span",{"class":"rem_playlist_current"},""+(a.H+1)],["span",{"class":"rem_playlist_divider"},"/"],["span",{"class":"rem_playlist_total"},""+a.v]],["span",{"class":"rem_playlist_skip_control next"}],["a",{"class":"rem_toggle_inline_playlist",href:"#",style:a.f?"display:none":""},"Playlist"]]],
["div",{"class":"rem_video_wrapper"},a.A],a.a],a.b);for(var c=0,d=a.list.length;c<d;c++)a.list[c].position=c,a.list[c].b=na(a,a.list[c]);a.b=D(b,a.b);n&&(a.a.style.cssText+=" opacity: 0.2; overflow: hidden;");R(a);S(a);T(a)}
function la(a){document.onclick=function(b){b=b||window.event;/rem_toggle_inline_playlist/i.test((b.target||b.srcElement).getAttribute("class"))||T(a);return!0};C(a.b,"rem_toggle_inline_playlist")[0].onclick=function(b){if(a.w)T(a);else{a.w=!0;a.a.style.display="block";var c=C(a.b,"rem_toggle_inline_playlist")[0];c.textContent?c.textContent="CLOSE":c.innerText="CLOSE"}t(b)};C(a.b,"previous")[0].onclick=function(b){R(a)&&U(a,a.g-1);t(b)};C(a.b,"next")[0].onclick=function(b){S(a)&&U(a,a.g+1);t(b)}}
function T(a){a.f||(a.w=!1,a.a.style.display="none",a=C(a.b,"rem_toggle_inline_playlist")[0],a.textContent?a.textContent="PLAYLIST":a.innerText="PLAYLIST")}function U(a,b){a.u&&alert("You must start a video before you choose another one from the list.");a.g!==b&&Q(a.video,function(a){a.Vast&&(b+=Math.min(a.Vast.preslots,a.Vast.videoAds));a.Playlist.positionInQ=b;a.Playlist.playNextVideo()})}
function na(a,b){var c=document.createElement("li");c.className="rem_playlist_list-item";c.onclick=function(){U(a,b.position);T(a)};E([["a",["span",{"class":"rem_playlist_img-wrapper"},["img",{"class":"rem_playlist_img-caption",src:b.image}]],["span",{"class":"rem_playlist_title"},b.title],["span",{"class":"rem_playlist_description"},b.description]]],c);a.a.appendChild(c);return c}
function ma(a,b){if(n)b.one("nextvideo",function(){a.u=!1;a.a.style.cssText+="opacity: 1; overflow-y: auto"});b.on("nextvideo",function(){var b=this.Playlist.positionInQ-1;this.Vast&&(b-=Math.min(this.Vast.preslots,this.Vast.videoAds));a.g=b;C(a.b,"rem_playlist_current")[0].innerHTML=b+1;var d;a.e&&(d=a.a.style.display,a.a.style.display="block");var e=a.a.offsetHeight,f=a.a.getElementsByTagName("li")[b].offsetHeight,h=a.a.getElementsByTagName("li")[b].offsetTop,g=a.a.scrollTop;h+f>a.a.offsetTop+e+
g&&(a.a.scrollTop=h-e+f);h<g&&(a.a.scrollTop=h);a.e&&(a.a.style.display=d);d=a.list[b].b;a.q&&(a.q.className="rem_playlist_list-item");d.className="rem_playlist_list-item playing_video";a.q=d;R(a);S(a)})}function S(a){var b=C(a.b,"next")[0];if(a.g>=a.v-1)return b.className+=" disabled",!1;b.className="rem_playlist_skip_control next";return!0}function R(a){var b=C(a.b,"previous")[0];if(0>=a.g)return b.className+=" disabled",!1;b.className="rem_playlist_skip_control previous";return!0};function V(a,b,c){if(/MSIE 6\.0|MSIE 7\.0|Googlebot|-Google|Baiduspider|FBAN|Maxthon/i.test(navigator.userAgent))return this;this.plid=oa(c);if(!1===this.plid||!(this.plid in b))return this;this.j=pa(this.plid,b);this.videos=[];this.playlists=[];this.p=[];this.D=!!b[this.plid].enableVimeo;this.G=!!b[this.plid].enableNative;qa(this);W(this);try{ha(this.plid.split("_")[0],this.plid.split("_")[1],this.j)}catch(d){}var e=this;setInterval(function(){W(e)},120);setTimeout(function(){window.reEmbeditQ&&
(window.reEmbedQ=window.reEmbeditQ);if("undefined"!==typeof window.reEmbedQ){for(var a;window.reEmbedQ.length;)a=window.reEmbedQ.shift(),e.setupPlaylist(a[0],a[1]);try{delete window.reEmbedQ}catch(b){window.reEmbedQ=void 0}}},0)}
function pa(a,b){var c=b[a],d=encodeURIComponent(document.title.toString()),e="";void 0!==document.getElementsByName("description")[0]&&(e=encodeURIComponent(document.getElementsByName("description")[0].content));return{plid:a,O:d,N:e,n:c.skin,behavior:parseInt(c.behavior,10),i:c.colors,t:c.logo,s:c.actionCall,k:parseInt(c.pady,10)||0,I:parseInt(c.hasAds,10),preslots:parseInt(c.preslots,10),Q:parseInt(c.postslots,10),M:c.nonLinearSlots,L:!!c.noSharing,K:!!c.noEmbedding,B:!!c.annotations,J:!!c.b1,
F:c.customDomain,R:!!c.showTitle,C:!!c.autoplayOnViewport}}
function W(a){if(document&&document.body)for(var b=a.find(),c=0,d=b.length;c<d;c++)a:{var e=a,f=b[c],h=void 0;b:{if(h=f.getAttribute("data-reembed"))if(h=JSON.parse(h),h.no_replace&&parseInt(h.no_replace,10)){h=!1;break b}h=!0}if(h){try{h=void 0;var g={};if("VIDEO"===f.tagName)g.c="html5",g.autoplay=null===f.getAttribute("autoplay")?!1:!0,g.src="";else{var k,l=f;k="OBJECT"===l.tagName?l.getAttribute("data"):l.getAttribute("src");if(!k)throw Error("Could not extract src");l=k;if(0<=l.indexOf("embedly.com")){var p=
/embedly\.com\/widgets\/(?:card|media)\.html\?(?:url|src)=(.*?)(?:&|$|#)/.exec(l);k=p?decodeURIComponent(p[1]):l}else k=l;g.c=X(k);if(!g.c)throw Error("Could not detect provider");if("vimeo"==g.c&&!e.D)throw Error("vimeo not enabled");g.autoplay=/autoplay=1/i.test(k);g.src=Y(k,g.c).replace(/^\s+|\s+$/g,"");g.h=Z(k,g.c);if(!g.src&&!g.h)throw Error("Could not detect videoId or playlistId");var m;c:{var aa=g.c,v=l=void 0;if("youtube"===aa||"dailymotion"===aa)if(l=/start(?:=|%3D)([^`]*?)(?:&|\?|%26|#|$)/,
v=l.exec(k)){m=parseInt(v[1],10)||0;break c}m=0}m&&(g.start=m);var B;c:{var ba=g.c,v=l=void 0;if("youtube"===ba||"dailymotion"===ba)if(l=/end(?:=|%3D)([^`]*?)(?:&|\?|%26|#|$)/,v=l.exec(k)){B=parseInt(v[1],10)||0;break c}B=0}B&&(g.end=B)}h=g}catch(Ga){break a}if("IFRAME"===f.tagName)try{f.dispatchEvent(new window.Event("load"))}catch(Ha){g=void 0,document.createEvent?(g=document.createEvent("HTMLEvents"),g.initEvent("load",!0,!0)):document.createEventObject&&(g=document.createEventObject(),g.T="load"),
f.dispatchEvent?f.dispatchEvent(g):f.fireEvent&&f.fireEvent("onLoad",g)}if(h.h){N();try{e.playlists.push(new ra(f,h,e.j))}catch(va){r({code:"ytplaylist_fail",error:va.message,h:h.h,tech:h.c})}}else try{e.videos.push(new P(f,h,e.j))}catch(H){H.message&&"~"==H.message.charAt(0)||r({code:"iframe_fail",error:H.message,V:h.src,tech:h.c})}}}}function oa(a){for(var b=0,c=a.length;b<c;b++)if(a[b].regex.test(window.location.href))return a[b].plid}
function qa(a){var b=document,c=["IFRAME","EMBED","OBJECT"],d;a.G&&c.push("VIDEO");for(var e=0,f=c.length;e<f;++e)d=c[e],a.p.push(b.getElementsByTagName(d.toUpperCase()))}V.prototype.find=function(){for(var a=[],b=0,c=this.p.length;b<c;++b)for(var d=this.p[b],e=0,f=d.length;e<f;++e)/vjs-tech/.test(d[e].className)||a.push(d[e]);return a};function Z(a,b){var c;return"youtube"===b&&(c=/list(?:=|%3D)([^`]*?)(?:&|\?|%26|#|$)/,c=c.exec(a))?c[1]:""}
function Y(a,b){var c;return"youtube"===b?(c=/(?:v\/+|v=|vi\/+|embed\/+|\.be\/+)([^`]*?)(?:\?|%3F|&|%26|#|$)/,(c=c.exec(a))&&"videoseries"!==c[1]?c[1]:""):"dailymotion"===b?(c=/(?:dai.ly|embed|swf|video)\/+(?:video\/+)?([^`]*?)(?:_|\?|%3F|&|%26|#|$)/,(c=c.exec(a))?c[1]:""):"vimeo"===b?(c=/(?:video\/+|clip_id=)([^`]*?)(?:_|\?|%3F|&|%26|#|$)/,(c=c.exec(a))?c[1]:""):a}var sa=/^(?:https?:)?\/\/(www\.)?(youtube\.com|youtube-nocookie\.com|youtu\.be|dailymotion\.com|dai\.ly|(?:player\.)?vimeo\.com)\//;
function X(a){if(!sa.test(a)||!a)return"";a=a.toLowerCase().match(sa);return"youtube.com"===a[2]||"youtube-nocookie.com"===a[2]||"youtu.be"===a[2]?"youtube":"dailymotion.com"===a[2]||"dai.ly"===a[2]?"dailymotion":"player.vimeo.com"===a[2]||"vimeo.com"===a[2]?"vimeo":""}
V.prototype.setupPlaylist=function(a,b){var c={f:b.listbar,d:b.videoStartPosition,width:b.width,height:b.height};N();var d=document.getElementById(a);if(b.P){c.c="youtube";c.h=Z(b.P,"youtube");try{this.playlists.push(new ra(d,c,this.j))}catch(e){console.log(e)}}else{for(var f=b.list,h,g=0,k=f.length;g<k;g++)h=X(f[g].file),f[g].src=Y(f[g].file,h),(f[g].provider=h)?h="video/"+h:(h=f[g].file,h=/\.og[gv]$/.test(h)?"video/ogg":/\.webm$/.test(h)?"video/webm":/\.mpe?g$/.test(h)?"video/mpeg":/\.mp4$/.test(h)?
"video/mp4":/\.flv$/.test(h)?"video/flv":/\.3gp$/.test(h)?"video/3gp":""),f[g].type=h;c.list=f;try{this.playlists.push(new O(d,c,this.j))}catch(l){}}};var ta=/\.(m3u8?|ts)$/,ua={7:3},wa={vimeo:0};
function P(a,b,c){this.c=b.c;this.plid=c.plid.split("_")[1];this.src=b.src;this.type=b.type;this.autoplay=b.autoplay&&!n;this.poster="";this.start=b.start;this.end=b.end;this.o=[];this.l=null;this.r=[];this.m=c;this.className="video-js vjs-skin"+this.m.n+" vjs-tech";if("html5"===this.c&&xa(a))throw Error("~Invalid video element");"EMBED"===a.tagName&&a.parentElement&&"OBJECT"===a.parentElement.tagName&&(a=a.parentElement);this.behavior=c.behavior;this.k=c.k;var d=ua[this.m.n]||30;this.c in wa&&(d=
wa[this.c]);c=d+ +c.k;b.width&&b.height?(this.width=b.width,this.height=b.height):(K(a)&&(this.behavior=0),1==this.behavior&&(b=ya(a,c),this.width=b[0],this.height=b[1]));"VIDEO"===a.tagName&&(this.o=za(a),this.poster=a.poster||"");L(a);"IFRAME"===a.tagName?(a.src="",a.allowFullscreen=!0):a=D(a,A("iframe",{width:this.width,height:this.height,scrolling:"no",src:"about:blank",frameborder:0,allowfullscreen:""}));var e=this;setTimeout(function(){Aa(e,a)},0);var f=setInterval(function(){a&&a.contentWindow?
!a.contentWindow._X_REM_NEST&&a.parentNode&&(Aa(e,a),setTimeout(function(){r({code:"reframe"})},1E3)):clearInterval(f)},1E3);0===this.behavior&&Ba(a,c);return this}
function Aa(a,b){var c=b.contentWindow,d=c.document,e=Ca(a);d.open();c._X_REM_NEST=!0;c.iframeElement=b;c.reEmbed_custom_vast_param=window.reEmbed_custom_vast_param;c.setup=function(b){Da(a,b,e)};d.write('<!DOCTYPE html><html><head><meta charset="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"><style>#v1{width: 100% !important;height: 100% !important;}html,body{width:100%;height:100%;margin:0;padding:0;overflow:hidden;}</style></head><body onload="setup(window);"></body></html>');d.close()}
function za(a){var b=[];a=a.getElementsByTagName("source");for(var c=0;c<a.length;c++)b.push({type:a[c].type,src:a[c].src});return b}
function Ca(a){var b=a.m,c={techOrder:"youtube dailymotion vimeo html5 flash vpaid".split(" "),reEmbed:{pings:{video_provider:a.c,plid:b.plid,isReembeded:0,pTitle:b.O,pDesc:b.N},version:{css:"player/core150512-0.css",js:"player/core150512-0.js"},color1:b.i[0],color2:b.i[1],color3:b.i[2],color4:b.i[3],pady:b.k,skin:b.n,behavior:a.behavior,noBranding:b.J,noSharing:b.L,noEmbedding:b.K,customDomain:b.F,annotations:b.B,showTitle:b.R,autoplayOnViewport:b.C},hasAds:b.I,nonLinearSlots:b.M,preslots:b.preslots,postslots:b.Q};b.s&&(c.reEmbed.actionCall=
b.s);b.t&&(c.reEmbed.logo=b.t);a.autoplay&&(c.autoplay=a.autoplay);a.start&&(c.start=a.start);a.end&&(c.end=a.end);return c}function Q(a,b){a.l?b(a.l):a.r.push(b)}
function Da(a,b,c){function d(){var a=b.vjs(k,c,function(){g.l=a;for(var b=g.r,c=0,d=b.length;c<d;c++)b[c](a)})}var e=b.document,f=e.head||e.getElementsByTagName("head")[0],h=!1,g=a,k=z(e,"video",{id:"v1",controls:"",preload:"none",poster:a.poster,"class":a.className,width:a.width,height:a.height,src:"",style:"visibility: hidden"});if("html5"!=a.c)k.appendChild(z(e,"source",{src:a.src,type:a.type||"video/"+a.c}));else for(var l=0,p=a.o.length;l<p;l++)k.appendChild(z(e,"source",a.o[l]));e.body.appendChild(k);
var m=e.createElement("script");m.async=!0;m.src="//cdn.reembed.com/player/core150512-0.js";m.onload=m.onreadystatechange=function(){if(!(h||this.readyState&&"loaded"!==this.readyState&&"complete"!==this.readyState)){h=!0;if(b.vjs)d();else var a=b.setInterval(function(){b.vjs&&(d(),b.clearInterval(a))},50);m.onload=m.onreadystatechange=null;f.removeChild(m)}};f.appendChild(m);l=e.createElement("link");l.rel="stylesheet";l.href="//cdn.reembed.com/player/core150512-0.css";f.appendChild(l);"youtube"==a.c&&(e=e.createElement("script"),
e.src="https://www.youtube.com/iframe_api",e.async=!0,f.appendChild(e),(new Image).src="//img.youtube.com/vi/"+a.src+"/0.jpg")}
function Ba(a,b){var c;c=w(a);c=Math.abs(c-16/9)<Math.abs(c-4/3)?16/9:4/3;var d;d="display: inline-block;position: relative;"+("padding-top: "+b+"px;");d+="padding-bottom: "+100/c+"%;";d+="width: 100%;";d+="height: 0px;max-height: 100%;";c=A("div",{style:d});a.parentNode&&(a.parentNode.replaceChild(c,a),c.appendChild(a));a.style.cssText="position: absolute;width:100%;height:100%;top:0;left:0;"}
function ya(a,b){var c,d;d=x(a,"width");c=x(a,"height");var e=u(a);e&&(.1>=Math.abs(e-16/9)||.1>=Math.abs(e-4/3))&&!(.2>=Math.abs(e-d/c))&&(b+=d/e-c);0>=b?c+=b:G(a,b)&&(c+=b);if(!d||!c)throw RangeError("Unable to detect valid width or height");return[d,c]}function xa(a){if(-1<a.className.indexOf("akamai-video"))return!0;var b=a.getAttribute("src");return 0>=a.getElementsByTagName("source").length&&!b||b&&ta.test(b)?!0:!1};window.__rempl_callback=[];
function ra(a,b,c){var d=document.createElement("div"),e=b.h;this.height=b.height||x(a,"height");this.width=b.width||x(a,"width");if(!this.width||!this.height)throw RangeError("Unable to detect valid width or height");Ea(this,d);a.parentNode.replaceChild(d,a);this.S=window.__rempl_callback;var f=this;Fa(f,e,function(a,g){if(a)r({code:"rem911",error:a.message}),f.video=new P(d,b,c);else if(0==g.list.length)f.video=new P(d,b,c),r({code:"rem912",error:"zero length ytpl: "+e});else{var k;a:{k=b.src;var l=
g.list;if(k)for(var p=0,m=l.length;p<m;p++)if(k==l[p].src){k=p;break a}k=0}f.U=new O(d,{title:g.title,list:g.list,height:f.height,width:f.width,f:b.f,e:b.e,d:k},c)}})}function Ea(a,b){b.className+=" video-js";E([["div",{style:"background: #000;"}]],b);b.style.width=a.width+"px";b.style.height=a.height+"px"}
function Fa(a,b,c){var d=document.getElementsByTagName("head")[0],e=-1+a.S.push(function(b){if(b.error)c.call(a,Error(b.error),null);else if(b.list){for(var d={title:"",list:[]},e,k=0,l=b.list.length;k<l;k++)e=b.list[k],d.list.push({image:e.thumbnails["120"],title:e.title,description:e.description,src:e.id,type:"video/youtube",provider:"youtube"});c.call(a,null,d)}else c.call(a,Error("list not defined"),null)});b=ea("//rdata.reembed.com/playlist?id="+b+"&provider=youtube&fields=title,list&callback=__rempl_callback["+
e+"]");d.appendChild(b);b.onerror=function(a){c.call(this,a,null)}};window.reEmbedit=window.reEmbed;window.reEmbed=new V(0,{"1555_5535_f46222ffcf5f39a2ef0638f602ca8993":{"skin":"7","behavior":"1","pady":"0","hasAds":"1","preslots":"1","postslots":"0","enableNative":true,"colors":["#495a6c","#ffffff","#60b0ff","#0070de"],"nonLinearSlots":["3"]}},[{"regex":/#remnoreplace$/,"plid":false},{"regex":/./,"plid":"1555_5535_f46222ffcf5f39a2ef0638f602ca8993"}]);})()