<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Burguer</title>
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
   <!-- CSS -->
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
   <header class="header">

      <div id="menu-btn" class="fas fa-bars icons"></div>
      <div id="search-btn" class="fas fa-search icons"></div>

      <nav class="navbar">
         <a href="#home">home</a>
         <a href="#menu">menu</a>
         <a href="#about">Sobre</a>
         <span class="space"><a href="#home" class="logo"><img src="images/logo.png"></a></span>
         <a href="./php/CadastroCliente.php">Cad.Cliente</a>
         <a href="./php/CadastroProduto.php">Cad.Produto</a>
         <a href="./php/CadastroFornecedor.php">Cad.Fornec</a>
      </nav>

      <a href="#" class="fas fa-shopping-cart icons"></a>

      <form action="" class="search-form">
         <input type="search" name="" placeholder="search here..." id="search-box">
         <label for="search-box" class="fas fa-search icons"></label>
      </form>

   </header>

   <section class="home" id="home">

      <div class="content">
         <img data-aos="fade-up" data-aos-delay="150" src="images/burger-baner.png" alt="">
         <h3 data-aos="fade-up" data-aos-delay="300">Delicioso que Te Deixa Louco</h3>
         <p data-aos="fade-up" data-aos-delay="450">Temos promoções todos os finais de semana de
            Sex á Dom dás 18h ás 22h. Acompanhe as nossas redes para saber mais!.
         </p>
         <a data-aos="fade-up" data-aos-delay="600" href="#menu" class="btn">Nosso Menu</a>
      </div>

   </section>

   <section class="service">

      <div class="box" data-aos="fade-up" data-aos-delay="150">
         <i class="fas fa-hamburger"></i>
         <h3>Melhor Qualidade</h3>
         <p>Com ingredientes frescos e de qualidade.</p>
      </div>

      <div class="box" data-aos="fade-up" data-aos-delay="300">
         <i class="fas fa-shipping-fast"></i>
         <h3>Entrega Grátis</h3>
         <p>Entregamos na sua sem custos adicionais.</p>
      </div>

      <div class="box" data-aos="fade-up" data-aos-delay="450">
         <i class="fas fa-headset"></i>
         <h3>Suporte 24/7</h3>
         <p>Oferemos suporte na nossa plataforma.</p>
      </div>

   </section>

   <section class="menu" id="menu">

      <div class="heading">
         <img src="images/title-img.png" alt="">
         <h3>Nosso Menu</h3>
      </div>

      <div class="box-container">

         <div class="box" data-aos="fade-up" data-aos-delay="150">
            <img src="images/product-1.png" alt="">
            <div class="content">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>X-Burguer Duplo</h3>
               <div class="price">$29.99</div>
               <a href="#" class="btn">Comprar</a>
            </div>
         </div>

         <div class="box" data-aos="fade-up" data-aos-delay="300">
            <img src="images/product-2.png" alt="">
            <div class="content">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>X-Egg Bacon</h3>
               <div class="price">$14.99</div>
               <a href="#" class="btn">Comprar</a>
            </div>
         </div>

         <div class="box" data-aos="fade-up" data-aos-delay="450">
            <img src="images/product-3.png" alt="">
            <div class="content">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>X-Chicken Salada</h3>
               <div class="price">$17.99</div>
               <a href="#" class="btn">Comprar</a>
            </div>
         </div>

         <div class="box" data-aos="fade-up" data-aos-delay="600">
            <img src="images/product-4.png" alt="">
            <div class="content">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>X-Salada Duplo</h3>
               <div class="price">$29.99</div>
               <a href="#" class="btn">Comprar</a>
            </div>
         </div>

         <div class="box" data-aos="fade-up" data-aos-delay="750">
            <img src="images/product-5.png" alt="">
            <div class="content">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>X-Chicken Cheddar</h3>
               <div class="price">$17.99</div>
               <a href="#" class="btn">Comprar</a>
            </div>
         </div>

         <div class="box" data-aos="fade-up" data-aos-delay="900">
            <img src="images/product-6.png" alt="">
            <div class="content">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>X-Burguer</h3>
               <div class="price">$14.99</div>
               <a href="#" class="btn">Comprar</a>
            </div>
         </div>
      </div>
   </section>

   <br />

   <div class="sobre">
      <img src="images/title-img.png" alt="">
      <h3>Sobre</h3>
   </div>

   <section class="about" id="about">

      <div class="image" data-aos="fade-right" data-aos-delay="150">
         <img src="images/about-img.png" alt="">
      </div>

      <div class="content" data-aos="fade-left" data-aos-delay="300">
         <h3 class="title">O hambúrguer mais Delicioso!</h3>
         <p>Todos os nossos hamburgueres são de qualidade, com ingredientes frecos e da Melhor
            qualidade resultando no melhor sabor que é do Burguer!.
         </p>
         <div class="icons">
            <h3> <i class="fas fa-check"></i> Melhor Preço </h3>
            <h3> <i class="fas fa-check"></i> Melhor Serviço </h3>
            <h3> <i class="fas fa-check"></i> 100% Fresco </h3>
            <h3> <i class="fas fa-check"></i> backed buns </h3>
            <h3> <i class="fas fa-check"></i> Queijo Natural </h3>
            <h3> <i class="fas fa-check"></i> Veg & Non-Veg </h3>
         </div>
         <a href="#" class="btn">Ler Mais</a>
      </div>

   </section>

   <section class="footer">
      <p class="credit"> criado por <span>Giovana Sanches</span> | todos os direitos reservados! </p>
   </section>

   <script src="js/script.js"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

   <script>
      AOS.init({
         duration: 800,
      });
   </script>

</body>

</html>