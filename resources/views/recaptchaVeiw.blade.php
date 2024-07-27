<html>
  <head>
    <title>reCAPTCHA demo: Explicit render after an onload callback</title>
    
  </head>
  <body>
    <form action="?" method="POST">
    <script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '6LdnPrwpAAAAACihka7cxz2v-xWjf6lRdQByF57b'
        });
      };
    </script>
      <div id="html_element"></div>
      <br>
      <input type="submit" value="Submit">
    </form>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>
  </body>
</html>