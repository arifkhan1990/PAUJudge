<nav class="pauoj-navbar sticky">
    <div class="navId">
        <ul>
            <div class="left-nav">
                <a href="{{ url('/') }}" class="active"><img src="images\logo.gif" alt="" id="logo"><span id="title">PAU OJ</span></a>
                <li><a href="{{ url('problems') }}">Problem</a></li>
                <li><a href="{{ url('contest') }}">Contest</a></li>
                <li><a href="{{ url('coder_rank') }}">Rank</a></li>
                <li><a href="">Learn</a></li>
                <li><a href="">Blog</a></li>
            </div>
            <div class="right-nav">
                <li class="li-pos"><a href="{{ url('signup_signin') }}"><i class="fa fa-user-plus fa-fw"></i>Sign up</a></li>
                <li class="li-pos"><a href="{{ url('signup_signin') }}"><i class="fa fa-sign-in fa-fw"></i>Login</a></li>
                <!--&lt;!&ndash;<li><a href=""><i class="fa fa-user fa-fw"></i>User</a></li>&ndash;&gt;-->
                <!--&lt;!&ndash;<li><a href=""><i class="fa fa-comment-alt fa-fw"></i>Messages</a></li>&ndash;&gt;-->
                <!--&lt;!&ndash;<li><a href=""><i class="fa fa-bell fa-fw"></i>Notafications</a></li>&ndash;&gt;-->
            </div>
        </ul>
    </div>
</nav>
