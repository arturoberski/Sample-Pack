<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="./assets/jquery-3.1.1.min.js"></script>
  <script src="./assets/style.js"></script>
  <link rel="stylesheet" href="./assets/style.css">
  <title>Sample &amp; Pack</title>
</head>

<body>
  <main id="wrapper">
    <nav id="navigation">
      <div class="container">
        <ul id="navigation-list">
          <li>Home</li>
          <li>Products</li>
          <li><a href="/index.php"><img src="assets/images/logo.jpg" alt="logo"></a></li>
          <li>About us</li>
          <li>Contact</li>
        </ul>
      </div>
    </nav>
    <header id="header">
      <div class="container">
        <p id="title" style="color:
          <?php
            if(isset($_GET['color']) && !empty($_GET['color']) && (preg_match("/^[a-zA-Z ]*$/",$_GET['color']))){
              echo $_GET['color'];
            }
          ?>"><?php
            if(isset($_GET['text']) && !empty($_GET['text']) && (preg_match("/^[a-zA-Z ]*$/",$_GET['text']))){
              echo $_GET['text'];
            } else {
              echo "This is just a sample page";
            }
          ?>
        </p>
        <button class="button">push the button</button>
      </div>
    </header>
    <section id="articles">
      <div class="container">
        <article class="article">
          <p class="title">A heading title</p>
          <div class="image-container">
            <div class="article-image">
              <img src="assets/images/sample_image.jpg" alt="sample_image">
            </div>
            <p class="image-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.</p>
          </div>
          <p class="article-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.</p>
          <p class="article-text additional-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.</p>
          <p class="read-more">— read more</p>
        </article>
        <article class="article">
          <p class="title">A much longer heading title</p>
          <div class="image-container">
            <div class="article-image">
              <img src="assets/images/sample_image.jpg" alt="sample_image">
            </div>
            <p class="image-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.</p>
          </div>
          <p class="article-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget.</p>
          <p class="article-text additional-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.</p>
          <p class="read-more">— read more</p>
        </article>
        <article class="article">
          <p class="title">A heading title</p>
          <div class="image-container">
            <div class="article-image">
              <img src="assets/images/sample_image.jpg" alt="sample_image">
            </div>
            <p class="image-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.</p>
          </div>
          <p class="article-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.</p>
          <p class="article-text additional-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.</p>
          <p class="read-more">— read more</p>
        </article>
      </div>
    </section>
    <section id="contact">
      <div class="container">
        <p>Contact us</p>
        <form method="post">
          <input name="name" value="" placeholder="name" type="text" maxlength="40" autocomplete="off">
          <input name="e-mail" value="" placeholder="e-mail" type="text" maxlength="40" autocomplete="off">
          <input name="phone" value="" placeholder="phone" type="text" maxlength="20" autocomplete="off">
          <textarea name="message" value="" placeholder="your message" maxlength="400"autocomplete="off"></textarea>
          <input class="button" type="button" value="send message">
        </form>
        <div id="formData"></div>
      </div>
    </section>
    <footer id="footer">
      <div class="back-btn">back to top</div>
      <div class="container">
        <ul>
          <li>— home</li>
          <li>— products</li>
          <li>— about us</li>
          <li>— contact</li>
        </ul>
        <div id="network-icons">
          <a target="_blank" href="https://twitter.com/"><img src="assets/images/twitter_icon.jpg" alt="twitter_icon" title="Share on twitter"></a>
          <a target="_blank" href="https://facebook.com/"><img src="assets/images/facebook_icon.jpg" alt="facebook_icon" title="Share on facebook"></a>
        </div>
        <p>Copyright &copy; 2017 Sample &amp; Pack, Inc.</p>
      </div>
    </footer>
  </main>
</body>

</html>
