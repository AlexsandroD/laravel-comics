  <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <ul>
                    {{-- <li v-for="(link, index) in links" :key="index"><a href=""><img :src="link.src" :alt="link.alt"><span>{{link.text}}</span></a></li> --}}

                </ul>
            </div>
        </div>
        <div class="footer-middle">
                <div class="links">
                    <div class="comics-shop">
                        <ul>
                            <li class="white">Dc comics</li>
                            {{-- <li v-for="(dcComic,index) in dcComics.text" :key="index"><a href="dcComic.link">{{dcComic}}</a></li> --}}
                        </ul>

                        <ul>
                            <li class="white">shop</li>
                            {{-- <li  v-for="(shop,index) in shops.text" :key="index"><a href="">{{shop}}</a></li> --}}
                        </ul>
                    </div>
                    <ul>
                        <li class="white">DC</li>
                         {{-- <li  v-for="(dc,index) in dcs.text" :key="index"><a href="">{{dc}}</a></li> --}}
                    </ul>
                    <ul>
                        <li class="white">Sites</li>
                         {{-- <li  v-for="(site,index) in sites.text" :key="index"><a href="">{{site}}</a></li> --}}
                    </ul>



                </div>
                <div class="dc-logo-big"><img src="{{asset('images/dc-logo-bg.png')}}" alt="dc-logo-big"></div>
        </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="btn"><a href="">Sign-up now!</a></div>
                    <div class="links-icons">
                        <span>follow us</span>
                        <ul>
                            {{-- <li v-for="(icon, index) in icons" :key="index"><a :href="icon.href"><img :src="icon.srcIcona" alt="icon.alt"></a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>

  </footer>
