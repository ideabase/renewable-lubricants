$(document).ready(function(){$(".hero-image-caption").addClass("animation");var a=$("header");mns="main-nav-scrolled",bns="body-nav-scrolled",body=$("body"),hnav=$("header").height(),$(window).scroll(function(){$(this).scrollTop()>hnav+175?(a.addClass(mns),body.addClass(bns)):(a.removeClass(mns),body.removeClass(bns))}),$(".head-line").html(function(){var a=$(this).text().trim().split(" "),b=a.shift();return(a.length>0?"<span class='first-word'>"+b+"</span> ":b)+a.join(" ")}),$(".hero-image-caption__level").html(function(){var a=$(this).text().trim().split(" "),b=a.shift();return(a.length>0?"<span class='first-word'>"+b+"</span> ":b)+a.join(" ")});document.getElementById("nav-trigger"),document.getElementById("nav"),document.getElementsByClassName("nav-label"),document.getElementById("body");window.matchMedia("(min-width: 900px)");$(".nav > .has-children > a").click(function(a){return a.stopImmediatePropagation(),$(this).toggleClass("active").next("ul").toggleClass("active"),$(".nav__level2").not($(this).siblings()).removeClass("active"),!1}),$("html").click(function(){$(".nav__level2").removeClass("active")}),$(".leader").click(function(a){return a.stopImmediatePropagation(),$(this).toggleClass("active"),$(".leader").not($(this)).removeClass("active"),!1});var b=function(a,b){this.el=a||{},this.multiple=b||!1,this.el.find(".link").on("click",{el:this.el,multiple:this.multiple},this.dropdown)};b.prototype.dropdown=function(a){var b=a.data.el;$this=$(this),$next=$this.next(),$next.slideToggle(),$this.parent().toggleClass("open"),a.data.multiple||b.find(".submenu").not($next).slideUp().parent().removeClass("open")};new b($("#accordion"),!1);$(".more-link").click(function(a){$(this).closest(".FAQ").toggleClass("show-more"),a.preventDefault()})});