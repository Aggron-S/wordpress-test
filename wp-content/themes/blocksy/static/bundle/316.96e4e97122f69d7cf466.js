"use strict";(self.blocksyJsonP=self.blocksyJsonP||[]).push([[316],{316:function(t,e,n){n.r(e),n.d(e,{mount:function(){return p}});var u=n(194),r=n.n(u),c=n(601),o=n.n(c);let a=!1,s=null,i=null;const l=function(){return[...document.querySelectorAll(".quantity")].map((function(t){[...t.querySelectorAll("input")].map((function(t){t.hasInputListener||(t.hasInputListener=!0,t.addEventListener("input",(function(e){t.closest("tr")&&[...t.closest("tr").querySelectorAll(".quantity input")].filter((function(e){return e!==t})).map((function(t){return t.value=e.target.value})),document.activeElement===t&&(i=t.name),t.closest(".ct-cart-auto-update")&&(s&&clearTimeout(s),s=setTimeout((function(){r()("[name='update_cart']").trigger("click")}),300))})))}))}))};r()(document.body).on("updated_cart_totals",(function(){setTimeout((function(){[...document.querySelectorAll(`[name="${i}"]`)].map((function(t){t.focus()}))}),500),o().trigger("blocksy:frontend:init")}));const p=function(t,e){let{event:n}=e;if(r()&&!a&&(a=!0,r()(document.body).on("updated_cart_totals",l),l()),!t.classList.contains("ct-increase")&&!t.classList.contains("ct-decrease"))return;const u=t.parentNode.querySelector("input"),c=parseFloat(u.value,10)||0;if(t.classList.contains("ct-increase")){const t=u.getAttribute("max")&&parseFloat(u.getAttribute("max"),0)||1/0;u.value=c<t?Math.round(100*(c+parseFloat(u.step||"1")))/100:t}if(t.classList.contains("ct-decrease")){const t=u.getAttribute("min")?Math.round(100*parseFloat(u.getAttribute("min"),0))/100:0;u.value=c>t?Math.round(100*(c-parseFloat(u.step||"1")))/100:t}r()(u).trigger("change"),r()(u).trigger("input"),u.dispatchEvent(new Event("input",{bubbles:!0})),u.closest("tr")&&[...u.closest("tr").querySelectorAll(".quantity input")].filter((function(t){return t!==u})).map((function(t){return t.value=u.value}))}}}]);