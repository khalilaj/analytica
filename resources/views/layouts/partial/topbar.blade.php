 <!--top bar-->
 <div class="topbar">
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="/dealer/dashboard" class="logo"><img src="../../../../frontend/images/logo.png" alt=""></a>
                    </div>
                </div>
   
                <div class="top-right-nav px-2" style="padding:10px">
                    <button class="btn btn-warning btn-block" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <span>Logout</span> 
                    </button>
                    <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none">
                        @csrf
                    </form>
                </div>

        </div>
