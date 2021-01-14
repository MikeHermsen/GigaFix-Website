<!-- When using out-dated-version of browser it will tell you to use an other browser -->
<script>
        document.documentElement.className="js";
        var supportsCssVars=function(){var e,t=document.createElement("style");
        return t.innerHTML="root: { --tmp-var: bold;}",
                document.head.appendChild(t),
                e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),
                t.parentNode.removeChild(t),e};
        supportsCssVars()||alert("Please view this in a modern browser such as latest version of Chrome or Microsoft Edge.");
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-168076541-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-168076541-1');
</script>



