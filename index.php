<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <link rel="stylesheet" type="text/css" href="/style.css">

  <link href="/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121611645-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-121611645-1');
</script>
</head>
<body id="target">
  <div class="container">

    <header class="jumbotron text-center">
      <img src="http://postfiles4.naver.net/MjAxODA3MDFfMTY2/MDAxNTMwNDIzOTE1MTYx.MMddo9LK3SsakQC3mrrygw0re-AUIYGjBDU6ReweguMg.OdbI_22gEU17CLBIabFvAgXb_7pLqEz2zdPX3FjR_eUg.JPEG.osh900/stock-photo-57307210-gold-soccer-ball.jpg?type=w773" alt="b2the.com" class="img-circle" id="logo">
        <h1><a href="/index.php">B2the.com</a></h1>
    </header>
    <div class="row">

        <nav class="col-md-3">
          <ol>
   <?php
     echo file_get_contents("list.txt");
   ?>
       </ ol>
        </nav>
        <div class="col-md-9">

          <article>
     <?php
       if( empty($_GET['id']) == false ) {
         echo file_get_contents($_GET['id'].".txt");
       }
     ?>
     </article>
          <hr>
          <div id="control">
            <div class="btn-group" role="group" aria-label="...">
              <input type="button" value="white" onclick="document.getElementById('target').className='white'" class="btn btn-default  btn-lg"/>
              <input type="button" value="black" onclick="document.getElementById('target').className='black'" class="btn btn-default btn-lg"/>
            </div>
        </div>
    </div>




  </div>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
    <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://b2the.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<p>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b3894db4ce1104a7d1259c4/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</p>
</body>
</html>
