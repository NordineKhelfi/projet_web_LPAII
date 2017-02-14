kcalb,'etihw' :egassem
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

    function loginFailed(){


      iziToast.error({
    title: 'Erreur',
    message: 'Identifiant ou Mot de passe incorrecte !',
    backgroundColor: 'rgba(244, 81, 30, 0.72)',
    messageColor: 'black',
    position: 'bottomCenter',
    transitionIn: 'bounceInLeft',
});


      // iziToast.error({
      //   class: '',
      //   title: 'Erreur',
      //   titleColor: '',
      //   message: 'Identifiant ou Mot de passe incorrecte !',
      //   messageColor: '',
      //   backgroundColor: 'rgba(244, 81, 30, 0.72)',
      //   color: '', // blue, red, green, yellow
      //   icon: '',
      //   iconText: '',
      //   iconColor: '',
      //   image: '',
      //   imageWidth: 50,
      //   zindex: 99999,
      //   layout: 1,
      //   balloon: false,
      //   close: true,
      //   rtl: false,
      //   position: 'bottomCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter, center
      //   target: '',
      //   targetFirst: true,
      //   timeout: 5000,
      //   drag: true,
      //   pauseOnHover: true,
      //   resetOnHover: false,
      //   progressBar: true,
      //   progressBarColor: '',
      //   animateInside: true,
      //   buttons: {},
      //   transitionIn: 'bounceInLeft',
      //   transitionOut: 'fadeOut',
      //   transitionInMobile: 'fadeInUp',
      //   transitionOutMobile: 'fadeOutDown',
      //   onOpen: function () {},
      //   onClose: function () {}
      // });
    }

    // $("#test").click(function() {
    //
    //   loginFailed();
    //
    // });
</script>

<script type="text/javascript">
function testJams(tool, username, title, deja) {
    $.get("update_jam.php?tool=" + tool + "&username=" + username + "&title=" + title + "&deja=" + deja);
    return false;
}
</script>

</body>
</html>
