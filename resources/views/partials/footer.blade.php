<footer>
    <div class="footer-top">
        <div class="footer-container">

            <div class="links">
                @foreach($footerLinks as $footerLink)
                <div class="links-list">
                    <h3>{{$footerLink['title']}}</h3>
                    <ul>
                        @foreach($footerLink['links'] as $links)
                        <li>{{$links}}</li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
            
            <div class="logo-footer">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
            </div>
          
        </div>
        <div class="copyright-container">
        <p>All Site Content TM and © 2020 DC Entertainment, unless otherwise <span>noted here</span>.All right reserved.<br><span>Cookies Settings</span></p>
    </div>
    </div>


    <div class="subfooter-container">
        <div class="sub-footer">
            <button class="signup-btn">Sign-up Now!</button>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="social">
                    @foreach($socials as $social)
                    <img src="{{ Vite::asset('resources' . $social['icon'])}}" alt="{{$social['name']}}">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</footer>