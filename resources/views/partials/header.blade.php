@vite('resources/css/app.css')

    <header>
        <div class="headerContainer">
        <a class="headerLinks" href="/">
            <img class= "removeWhitespace" src="/images/homeDomeLogo.png" alt="homeDomeLogo"
            height=60 width=60>
              <h3 class= "removeWhitespace">HomeDome</h3>
            </a>

        <form id="searchBar" action="" method="GET" >
            <input  type="text" name="query" placeholder="Search products..." required>
            <button type="submit">Search</button>
        </form>




     <p > Hello ,<a class="headerLinks" href="Sign In">Sign In or Sign Up</a></p>


        <a href="/">
                <img  src="/images/shopping_cart_icon.png" alt="shopping basket" height=50 width=50 >
                    </a>

       </div>
        <section id= "categories" >


            <a class= "headerLinks" href="/furniture">Furniture</a>
            <a class= "headerLinks" href="/appliances">Appliances</a>
            <a class= "headerLinks" href="/homeDecor">Home Decor</a>
            <a class= "headerLinks" href="/kitchenWare">Kitchen Ware</a>
            <a class= "headerLinks" href="/lighting">Lighting</a>
              <a class= "headerLinks" href="/aboutUs">About Us</a>
              <a class= "headerLinks" href="/ourProducts">Our Products</a>

        </section>
    </header>
