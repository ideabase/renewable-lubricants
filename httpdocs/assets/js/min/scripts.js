"use strict";$(".mobile-menu").on("click",function(){$(".mobile-dropdown").slideToggle("fast")}),Array.prototype.forEach.call(document.forms,function(a){a.querySelector('input[type="submit"]').addEventListener("click",function(){a.querySelectorAll(":required").forEach(function(a){a.checkValidity()||a.classList.add("invalid-input"),a.addEventListener("input",function(){a.checkValidity()?a.classList.remove("invalid-input"):a.classList.add("invalid-input")})})})});