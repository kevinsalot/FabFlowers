<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type"
        content="text/html; charset=utf-8" />
  <meta name="robots"
        content="all" />

  <title>FabFlowers</title>
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href="../rw_common/themes/cameo/styles.css" />
        <!--[if IE 6]><link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/cameo/ie6.css"  /><![endif]-->
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href="../rw_common/themes/cameo/colourtag-page2.css" />
  <link rel="stylesheet"
        type="text/css"
        media="print"
        href="../rw_common/themes/cameo/print.css" />
  <link rel="stylesheet"
        type="text/css"
        media="handheld"
        href="../rw_common/themes/cameo/handheld.css" />
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href="../rw_common/themes/cameo/css/width/800.css" />
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href="../rw_common/themes/cameo/css/icons/blue.css" />
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href=
        "../rw_common/themes/cameo/css/sidebar/sidebar_hide.css" />
<script type="text/javascript"
      src="../rw_common/themes/cameo/javascript.js">
</script>
<script type="text/javascript"
      charset="utf-8">
//<![CDATA[
                        var blankSrc = "../rw_common/themes/cameo/png/blank.gif";
//]]>
</script>
<style type="text/css">
/*<![CDATA[*/

                img {
                        behavior:       url("../rw_common/themes/cameo/png/pngbehavior.htc");
                }

/*]]>*/
</style>
</head>

<body>
  <div id="container">
    <!-- Start container -->

    <div id="pageHeader">
      <!-- Start page header -->

      <div id="grad">
        <img src=
        "../rw_common/themes/cameo/images/header_bottom_grad.png"
             alt=""
             style="width: 3000px; height: 66px;" />
      </div>

      <h1>FabFlowers</h1>

      <h2>love is a flower, you've got to let it grow</h2>
    </div><!-- End page header -->

    <div id="navcontainer">
      <!-- Start Navigation -->

      <div id="top_grad">
        <img src=
        "../rw_common/themes/cameo/images/menu_top_grad.png"
             alt=""
             style="width: 3000px; height: 32px;" />
      </div>

      <ul>
        <li><a href="../index.html"
           rel="self">FabFlowers</a></li>

        <li><a href="../MeetTheDesigner/MeetTheDesigner.html"
           rel="self">Meet the Designer</a></li>

        <li><a href="../Gallery/Gallery.html"
           rel="self">Gallery</a></li>

        <li><a href="Contact.php"
           rel="self"
           id="current"
           name="current">Contact</a></li>

        <li><a href="../FAQ/FAQ.html"
           rel="self">FAQs</a></li>
      </ul>

      <div class="clearer"></div>
    </div><!-- End navigation -->

    <div id="sidebarContainer">
      <!-- Start Sidebar wrapper -->

      <div id="sidebar">
        <!-- Start sidebar content -->

        <h1 class="sideHeader"></h1><!-- Sidebar header -->
        <!-- sidebar content you enter in the page inspector -->
        <!-- sidebar content such as the blog archive links -->
      </div><!-- End sidebar content -->
    </div><!-- End sidebar wrapper -->

    <div id="contentContainer">
      <!-- Start main content wrapper -->

      <div id="content">
        <!-- Start content -->
        <?php
        if(!array_key_exists('formMessage', $_SESSION))
        $_SESSION['formMessage'] = "";
        if(!array_key_exists('form_element0', $_SESSION))
        $_SESSION['form_element0'] = "";
        if(!array_key_exists('form_element1', $_SESSION))
        $_SESSION['form_element1'] = "";
        if(!array_key_exists('form_element2', $_SESSION))
        $_SESSION['form_element2'] = "";
        if(!array_key_exists('form_element3', $_SESSION))
        $_SESSION['form_element3'] = "";
        if(!array_key_exists('form_element4', $_SESSION))
        $_SESSION['form_element4'] = "";
        if(!array_key_exists('form_element5', $_SESSION))
        $_SESSION['form_element5'] = "";
        if(!array_key_exists('form_element6', $_SESSION))
        $_SESSION['form_element6'] = "";
        ?>

        <div class="message-text">
          <?php
          if (!$_SESSION['formMessage']) { 
          echo 'Please fill in the form below and I will get in touch with you as soon as possible.';
          } else {
           echo $_SESSION['formMessage'];
           }
           ?>
        </div>
        <br />

        <form action="./files/mailer.php"
              method="post"
              enctype="multipart/form-data">
          <label>Your Name:</label> *
          <br />
          <input class="form-input-field"
                type="text"
                value="<?php echo $_SESSION['form_element0']; ?>"
                name="form_element0"
                size="40" />
          <br />
          <br />
          <label>Preferred Contact Method:</label> *
          <br />
          <select name="form_element1">
            <option <?php if ($_SESSION['form_element1'] == "Phone") { echo "selected"; } ?>
                    value="Phone">
              Phone
            </option>

            <option <?php if ($_SESSION['form_element1'] == "Email") { echo "selected"; } ?>
                    value="Email">
              Email
            </option>
          </select>
          <br />
          <br />
          <label>Your Email:</label>
          <br />
          <input class="form-input-field"
                type="text"
                value="<?php echo $_SESSION['form_element2']; ?>"
                name="form_element2"
                size="40" />
          <br />
          <br />
          <label>Your Phone # (with area code):</label>
          <br />
          <input class="form-input-field"
                type="text"
                value="<?php echo $_SESSION['form_element3']; ?>"
                name="form_element3"
                size="40" />
          <br />
          <br />
          <label>Event Date:</label> *
          <br />
          <input class="form-input-field"
                type="text"
                value="<?php echo $_SESSION['form_element4']; ?>"
                name="form_element4"
                size="40" />
          <br />
          <br />
          <label>Event Type:</label> *
          <br />
          <input class="form-input-field"
                type="text"
                value="<?php echo $_SESSION['form_element5']; ?>"
                name="form_element5"
                size="40" />
          <br />
          <br />
          <label>Requested Services:</label> *
          <br />
          <textarea class="form-input-field"
                name="form_element6"
                rows="8"
                cols="38">
<?php echo $_SESSION['form_element6']; ?>
</textarea>
          <br />
          <br />
          <input class="form-input-button"
                type="reset"
                name="resetButton"
                value="Reset" /> <input class="form-input-button"
                type="submit"
                name="submitButton"
                value="Submit" />
        </form><?php session_destroy(); ?>
      </div><!-- End content -->

      <div class="clearer"></div>
    </div><!-- End main content wrapper -->

    <div id="footer">
      <!-- Start Footer -->

      <p>© FabFlowers 2011 <a href="#"
         id="rw_email_contact"
         name="rw_email_contact">Contact Me</a><script type=
         "text/javascript">
//<![CDATA[
var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":Al";var _rwObsfuscatedHref3 = "lie";var _rwObsfuscatedHref4 = "@fa";var _rwObsfuscatedHref5 = "b-f";var _rwObsfuscatedHref6 = "low";var _rwObsfuscatedHref7 = "ers";var _rwObsfuscatedHref8 = ".ne";var _rwObsfuscatedHref9 = "t";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7+_rwObsfuscatedHref8+_rwObsfuscatedHref9; document.getElementById('rw_email_contact').href = _rwObsfuscatedHref;
//]]>
</script></p>

      <div id="breadcrumbcontainer">
        <!-- Start the breadcrumb wrapper -->

        <ul>
          <li><a href=
          "../index.html">FabFlowers</a>&nbsp;&gt;&nbsp;</li>

          <li><a href=
          "Contact.php">Contact</a>&nbsp;&gt;&nbsp;</li>
        </ul>
      </div><!-- End breadcrumb -->
    </div><!-- End Footer -->
  </div><!-- End container -->
</body>
</html>
