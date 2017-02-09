<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
<script src="js/my_script.js"></script>

<script>
  $( window ).resize(function() {

    //console.log("Je me resize !! ");
    $_SESSION['gWidth'] = $(window).width();
    console.log("resize. gWidth =  " + $_SESSION['gWidth']);

  });

  $("#signup").click(function() {

    if($(window).width() < 768 ){
      window.location.href = "sign_up.php";
    }

  });

  $("#connect").click(function() {

    if($(window).width() < 768 ){
      window.location.href = "main_login.php";
    }

  });

  $(".various").fancybox({
  		maxWidth	: 800,
  		maxHeight	: 600,
  		fitToView	: false,
  		width		: '70%',
  		height		: '70%',
  		autoSize	: false,
  		closeClick	: false,
  		openEffect	: 'none',
  		closeEffect	: 'none'
  	});

</script>
<script type="text/javascript">
function testJams(tool, username, title, deja) {
    $.get("update_jam.php?tool=" + tool + "&username=" + username + "&title=" + title + "&deja=" + deja);
    return false;
}
</script>

</body>
</html>
