<!DOCTYPE>
<html lang="en">
<head>
<title>My Portfolio</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/main.css" media="screen" />
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
<script src="bootstrap/bootstrap.min.js"></script>
</head>

<body>
<div id="postHeader"> <a href="#">Links &#8250;&#8250;</a>&nbsp;&nbsp;<a href="#">Site Map &#8250;&#8250;</a>&nbsp;&nbsp;<a href="#">Contact &#8250;&#8250;</a> </div>
<!--//end #postHeader//-->
<div id="container">
  <nav id="navbar">
    <ul>
      <li><a href="#" class="btn">Home</a></li>
      <li><a href="#" class="btn">About</a></li>
      <li><a href="#" class="btn">Contact</a></li>
    </ul>
  </nav>
  <!--//end #navbar//-->
  <header id="header">
        <img src="images/logo.gif" alt="My logo">
 </header>
  <!--//end #headern//-->
  <hr />
  <section class="midBox">
     <div class="whiteBkg">
         <h2>My Mission Statement</h2>
         <p>
         For this project, I wanted to showcase what I've learned as a developer. I wanted to showcase the different technologies individually and in combination with other technologies. I wanted to build an environment where I can keep adding new skills learned and create new challenges for myself. I hope you enjoy it, the same way I do. </p>
     </div>
      <div class="boxWrap">
          <article class="box html">
              <a href="" class="btn">
                <span><span><span>
                        <img src="images/html.png" alt="html logo">
                        <h2>Hypertext markup language</h2>
                        <p>I think of this language as the building blocks that construct the foundation to most websites today. Browsers receive HTML documents and render them on your screen as full fledged webpages. This webpage is an  example of HTML used in combination with CSS and JavaScript to produce an outcome.</p>
                </span></span></span>
              </a>
          </article>
          <article class="box css">
              <a href="" class="btn">
                <span><span><span>
                        <img src="images/sass.png" alt="sass logo">
                        <h2>Cascading Style Sheet/Sass</h2>
                        <p>The language that makes the building blocks visually enticing and creates masterful visual effects. If HTML is the building blocks CSS would be the paint and sculpting of the blocks. Sass is a scripting language that makes CSS more powerful and eventually compiles into CSS.</p>
                </span></span></span>
              </a>
          </article>
          <article class="box js">
              <a href="" class="btn">
                <span><span><span>
                        <img src="images/js.png" alt="JavaScript logo">
                        <h2>JavaScript</h2>
                        <p>Scripting language that interacts directly with the browser and creates the interaction. Making clicking a button super fun.</p>
                </span></span></span>
              </a>
          </article>
      </div>
  </section>
  <section id="cellbox">
      <article class="cell">
        <div>
            <a href="#" class="btn"><span><span><span>
            <h2>Jquery</h2>
            <img src="images/jquery.jpg" alt="Jquery logo" class="jQ">
        </span></span></span></a>
        </div>
        <p class="news">Javascript framework that makes javascript simple</p>
        <ul class="news">
          <li class="news"><a href="#">Link</a><br />
            <em>Date<br />
            Puerorum amicas adplicat auris.</em></li>
          <li class="news"><a href="#">Link</a><br />
            <em>Date<br />
            Puerorum amicas adplicat auris.</em></li>
        </ul>
      </article>
      <!--//end #cell_1//-->
      <article class="cell two">
        <div>
            <a href="#" class="btn"><span><span><span>
                <h2>Bootstrap</h2>
                <img src="images/bootstrap.png" alt="bootstrap logo">
             </span></span></span></a>
        </div>
        <p>Complex Framework that has built in CSS and JavaScript to it that make bulding a website extremely simple. </p>
      </article>
      <!--//end #cell_2//-->
      <article class="cell three">
        <div>
            <a href="#" class="btn"><span><span><span>
                <h2>Git</h2>
                <img src="images/git.jpg" alt="git logo">
            </span></span></span></a>
        </div>
        <p>Repository where you can maintain files locally and share files remotely. </p>
      </article>
  </section>
  <!--//end #cell_3//-->
  <p>Jquery The interaction on the screen are all made with jquery. Clicking and hovoring that will that will create some fun animations. </p>
  <p>Bootstrap can be used to make some fairly complex website components with ease by just adding classes to your html. Anything from adding a corousel to simply adding a color specified by bootstrap.</p>
  
  <footer id="footer" > Copyright, &copy; <?php echo date('Y') ?> <a href="#">Mike Talk</a>
  </footer>
  <!--//end #footer//-->
</div>
<!--//end #centerColumn//-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</body>
</html>
