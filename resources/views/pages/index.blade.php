@extends('layouts.app')

@section('content')
    <div id="non-skrollr">
        <div class="container-fluid">
            <div class="mast">
                <h1>ACM ICPC</h1>
                <h4>Amirkabir University of Technology</h4>
                free &amp; <b>open-source</b> way to a one-click blog/website on <b>GitHub</b> with Jekyll and MaterializeCSS
                <br>
                <h6>based on google&trade;'s <b>material design</b> specifications</h6>
                <h4><b>work-in-progress</b></h4>
                <a target="_blank" href="https://github.com/AUT-ICPC/ICPC-webApp" class="cyan darken-2 white-text text-darken-3 waves-effect waves-light btn"><i class="mdi-action-get-app"></i> View on github</a><br>
                <i class="mdi-navigation-arrow-drop-down" style="font-size: 200px;"></i>
            </div>
        </div>



        <div class="container-fluid card cyan z-depth-2 waves-effect waves-light">
            <div class="cover z-depth-1" style="background-image: url('img/icpc_re.png');">
                <div class="filter cyan" style="opacity: 0.7;">
                    <div class="cover-text cyan-text text-darken-4">
                        <span style="font-size: 50px;">< think, solve, balloon /></span>
                    </div>
                </div>
            </div>
            <div class="card-content white-text">
                <div class="card-title">
                    <h4>About ACM ICPC</h4>
                </div>
                Every year since 1977, the ACM has organized the ACM International Collegiate Programming Contest.
                This contest, which consists of a regional qualifying contest and the Finals, provides college students
                with the opportunity to demonstrate and sharpen their programming skills. During this contest, teams
                consisting of three students and one computer are to solve as many of the given problems as possible
                within 5 hours. The team with the most problems solved wins, where ``solved'' means producing the right
                outputs for a set of (secret) test inputs. Though the individual skills of the team members are important,
                in order to be a top team it is necessary to make use of synergy within the team. there are three factors
                crucial for being a good programming team:
                <br>
                <br>
                <li>Knowledge of standard algorithms and the ability to find an appropriate algorithm for every problem
                    in the set</li> <br>
                <li>Ability to code an algorithm into a working program</li> <br>
                <li>Having a strategy of cooperation with your teammates</li> <br> <br>

                For the first three categories, standard algorithms are well documented in the literature, and you should
                program these algorithms beforehand and take the listings with you to the contest. In this way, you can
                avoid making the same (small) mistakes repeatedly and you can concentrate on the difficult aspects of
                the problem.
                <br> <br>

                Another angle of practice is efficient programming. This does not mean type as fast as you can and
                subsequently spend a lot of time debugging. Instead, think carefully about the problem and all the cases
                which might occur. Then program your algorithm, and take the time to ensure that you get it right the
                first time with a minimum amount of debugging, since debugging usually takes a lot of valuable time.
                <br> <br>

                To become a team, it is important that you play a lot of training contests under circumstances which are
                as close to the real contest as possible: Five hours, one computer, a new set of problems each time, and
                a jury to judge your programs.
                <br> <br>
                This website tries to lead you in the way of becomming a good icpc contestant.

            </div>
        </div>

        <div class="row">
            <h1><br>News<br></h1>
            <div class="container-fluid">
                <div class="col s12 m6">
                    <ul>
                        <li class="card advantage cyan white-text darken-1 waves-effect waves-light">
                            <h4>completely-free</h4> Material is completely free for whatever use you may ever want to use it for under the terms of the MIT Licence.
                        </li>
                        <li class="card advantage cyan white-text waves-effect waves-light">
                            <h4>fully-open-source</h4> Material's source code is fully open source and is hosted at GitHub (https://github.com/naveenshaji/material/). It is released under the terms of the MIT Licence.
                        </li>
                        <li class="card advantage cyan white-text darken-1 waves-effect waves-light">
                            <h4>material-design</h4> Material is based on google's material design specifications. duh! All you need to know is that it look solid and feels solid.
                        </li>
                        <li class="card advantage cyan white-text waves-effect waves-light">
                            <h4>ease-of-access</h4> Your blog or website will be hosted on a GitHub repository and therefore, you will be able to just 'commit' new blog posts. Plus you get all the benefits of GitHub if you are making a collaborated blog.
                        </li>
                    </ul>
                </div>
                <div class="col s12 m6">
                    <ul>
                        <li class="card advantage cyan white-text waves-effect waves-light">
                            <h4>hosted-on-github</h4> Your website/blog can be hosted for free on GitHub, which means you get to take advantage of GitHub's servers which have proven themselves to provide almost 100% uptime.
                        </li>
                        <li class="card advantage cyan white-text darken-1 waves-effect waves-light">
                            <h4>feel-like-hax0r</h4> Commiting new blogposts written in markdown is sure to give you the feels. Having your blog hosted alongside code will make you feel like a mini-hax0r even if you are not one.
                        </li>
                        <li class="card advantage cyan white-text waves-effect waves-light">
                            <h4>write-in-markdown</h4> WSIWYG editors are for losers. Markdown ftw!!
                        </li>
                        <li class="card advantage cyan white-text darken-1 waves-effect waves-light">
                            <h4>mit-licence</h4> Material is released under the terms of the MIT Licence which give you a lot of freedom regarding editing the code involved.
                        </li>
                    </ul>
                </div>
            </div>
        </div>



        <div class="row">
            <h1><br>-get-started-<br></h1>
            <div class="container-fluid">
                There are 7 simple steps to get your website up and running using material. Keep scrolling to see em'. The steps mentioned here have been explained in order to cater to n00bs. If you think you are pro, then scroll faster. xP
            </div>
        </div>


    </div>
    <div class="row height-container">
        <div class="scroll-1">
            <div class="container-fluid card cyan z-depth-2 waves-effect waves-light">
                <div class="cover z-depth-1" style="background-image: url('img/0.jpg');">
                    <div class="filter cyan">
                        <div class="cover-text cyan-text text-darken-4">
                            One
                        </div>
                    </div>
                </div>
                <div class="card-content white-text">
                    <div class="card-title">Step - 1 - Get an account on GitHub.</div>
                    <b>Get an account on GitHub,</b> and verify your email. Remember that the username you choose will be the domain name of your website (unless you want to pay for a .com or something). Click on the button below to see detailed instructions regarding how you can accomplish this without getting your dick caught on a ceiling fan (or an oven, for that matter).
                </div>
                <div class="card-action cyan darken-2">
                    <button href="/material/" class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn">View Post</button>
                    <button class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn" href='#'>Bookmark!</button>
                </div>
            </div>
        </div>






        <div class="scroll-1">
            <div class="container-fluid card cyan z-depth-2 waves-effect waves-light">
                <div class="cover z-depth-1" style="background-image: url('img/0.jpg');">
                    <div class="filter cyan">
                        <div class="cover-text cyan-text text-darken-4">
                            Two
                        </div>
                    </div>
                </div>
                <div class="card-content white-text">
                    <div class="card-title">Step - 2 - Fork this repository.</div>
                    Now that you have an account on GitHub, you can safely go<a href="https://github.com/naveenshaji/material/"> here</a>and fork that repo. Just click on the tiny icon in top-right that says '<b>Fork</b>'. In case you have trouble finding said button, or if you want to know what forking or repository means and all that git-technical stuff, click on the button below.
                </div>
                <div class="card-action cyan darken-2">
                    <button href="/material/" class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn">View Post</button>
                    <button class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn" href='#'>Bookmark!</button>
                </div>
            </div>
        </div>






        <div class="scroll-1">
            <div class="container-fluid card cyan z-depth-2 waves-effect waves-light">
                <div class="cover z-depth-1" style="background-image: url('img/0.jpg');">
                    <div class="filter cyan">
                        <div class="cover-text cyan-text text-darken-4">
                            Three
                        </div>
                    </div>
                </div>
                <div class="card-content white-text">
                    <div class="card-title">Step - 3 - Rename forked repository.</div>
                    Go to the newly-forked repository's settings and edit its name to "<b>(username).github.io</b>" (without the quotes). Like for example naveenshaji.github.io or yournamehere.github.io &nbsp; <b>It should be your github username though</b>. If you don't know what your github username is, or how to rename said repository, or if you forgot what you were doing on this website, click the button below.
                </div>
                <div class="card-action cyan darken-2">
                    <button href="/material/" class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn">View Post</button>
                    <button class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn" href='#'>Bookmark!</button>
                </div>
            </div>
        </div>






        <div class="scroll-1">
            <div class="container-fluid card cyan z-depth-2 waves-effect waves-light">
                <div class="cover z-depth-1" style="background-image: url('img/0.jpg');">
                    <div class="filter cyan">
                        <div class="cover-text cyan-text text-darken-4">
                            Four
                        </div>
                    </div>
                </div>
                <div class="card-content white-text">
                    <div class="card-title">Step - 4 - Change to master branch</div>
                    Go to the newly-forked repository's settings and change the <b>default branch</b> to <b>master</b> from the drop-down menu. All your changes from now on must be done in the <b>master</b> branch. You may optionally delete the gh-pages branch to avoid accidentally pushing your changes to that branch, in which case you won't see the changes. Click button below for detailed instructions on how to acheive this.
                </div>
                <div class="card-action cyan darken-2">
                    <button href="/material/" class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn">View Post</button>
                    <button class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn" href='#'>Bookmark!</button>
                </div>
            </div>
        </div>






        <div class="scroll-1">
            <div class="container-fluid card cyan z-depth-2 waves-effect waves-light">
                <div class="cover z-depth-1" style="background-image: url('/material//img/0.jpg');">
                    <div class="filter cyan">
                        <div class="cover-text cyan-text text-darken-4">
                            Five
                        </div>
                    </div>
                </div>
                <div class="card-content white-text">
                    <div class="card-title">Step - 5 - Visit your website.</div>
                    Open the "<b>_config.yml</b>" file on GitHub and click edit. Set the baseurl to "".
                    Go to <b>http://(username).github.io/</b> If you see a website similar to this then you have successfully set up a material website. If not, then check your email to see if GitHub has sent you any page-build warnings or click on the troubleshooting button below. The button also helps if you don't know how to get to a website.
                </div>
                <div class="card-action cyan darken-2">
                    <button href="/material/" class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn">View Post</button>
                    <button class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn" href='#'>Bookmark!</button>
                </div>
            </div>
        </div>






        <div class="scroll-1">
            <div class="container-fluid card cyan z-depth-2 waves-effect waves-light">
                <div class="cover z-depth-1" style="background-image: url('/material//img/0.jpg');">
                    <div class="filter cyan">
                        <div class="cover-text cyan-text text-darken-4">
                            Six
                        </div>
                    </div>
                </div>
                <div class="card-content white-text">
                    <div class="card-title">Step - 6 - Configuration.</div>
                    Open the "<b>_config.yml</b>" file again. Click edit, and change the <b>title</b> property to the name you want displayed as title on your website and save. Changes should be visible on the site in a few minutes. Mess around with other values in the file. If you break something, revert. Click button below to see the rest of the stuff you can edit on this file including changing color themes.
                </div>
                <div class="card-action cyan darken-2">
                    <button href="/material/" class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn">View Post</button>
                    <button class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn" href='#'>Bookmark!</button>
                </div>
            </div>
        </div>






        <div class="scroll-1">
            <div class="container-fluid card cyan z-depth-2 waves-effect waves-light">
                <div class="cover z-depth-1" style="background-image: url('/material//img/0.jpg');">
                    <div class="filter cyan">
                        <div class="cover-text cyan-text text-darken-4">
                            Seven
                        </div>
                    </div>
                </div>
                <div class="card-content white-text">
                    <div class="card-title">Step - 7 - Adding posts to blog.</div>
                    The final step is a rather long one which aims to introduce you to markdown. Basically you just write your post on a new file created in your repo's "<b>_posts</b>" directory in a specific format, and it appears automatically on your website. Click the button below to learn more, including how to add images and links to your posts.
                </div>
                <div class="card-action cyan darken-2">
                    <button href="/material/" class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn">View Post</button>
                    <button class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn" href='#'>Bookmark!</button>
                </div>
            </div>
        </div>
        <div class="scroll-1">
            <div class="container-fluid card cyan z-depth-2 waves-effect waves-light">
                <div class="cover z-depth-1" style="background-image: url('/material//img/0.jpg');">
                    <div class="filter cyan">
                        <div class="cover-text cyan-text text-darken-4">
                            Support
                        </div>
                    </div>
                </div>
                <div class="card-content white-text">
                    <div class="card-title">Ran into issues?</div>
                    No sweat. Just go <a href="https://github.com/naveenshaji/material/issues/new">here</a> and let me know via that form, what issues you are experiencing regarding the set-up procedure. You can also report issues regarding bugs and feature requests.
                </div>
                <div class="card-action cyan darken-2">
                    <button href="/material/" class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn">View Post</button>
                    <button class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn" href='#'>Bookmark!</button>
                </div>
            </div>
        </div>






        <div class="scroll-1">
            <div class="container-fluid card cyan z-depth-2 waves-effect waves-light">
                <div class="cover z-depth-1" style="background-image: url('/material//img/0.jpg');">
                    <div class="filter cyan">
                        <div class="cover-text cyan-text text-darken-4">
                            Problem?
                        </div>
                    </div>
                </div>
                <div class="card-content white-text">
                    <div class="card-title">Troubleshooting</div>
                    Scroll through al the cards in this list all over again and read every single line to check if you've been correctly following. If your changes are not showing or if you see a page with just text, then you probably messed up steps 4 and 5. In case tou get a 404 error, then recheck steps 3-5. Click button below for more troubleshooting help.
                </div>
                <div class="card-action cyan darken-2">
                    <button href="/material/" class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn">View Post</button>
                    <button class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn" href='#'>Bookmark!</button>
                </div>
            </div>
        </div>






        <div class="scroll-1">
            <div class="container-fluid card cyan z-depth-2 waves-effect waves-light">
                <div class="cover z-depth-1" style="background-image: url('img/0.jpg');">
                    <div class="filter cyan">
                        <div class="cover-text cyan-text text-darken-4">
                            <3
                        </div>
                    </div>
                </div>
                <div class="card-content white-text">
                    <div class="card-title"><b>material</b> by <b>naveenshaji</b></div>
                    Thanks to MaterializeCSS, Skrollr, Scrolline.js, Jekyll and GitHub.<br>
                    They form an <b>integral part</b> of this project.<br>
                    And material would not have been possible without them awesome <b>open-source</b> frameworks.<br>
                    &copy; 2015 naveenshaji - Released under the <b>MIT Licence</b>.
                </div>
                <div class="card-action cyan darken-2">
                    <button href="/material/" class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn">Tech involved</button>
                    <button class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn" href='#'> Get the code</button>
                </div>
            </div>
        </div>
    </div>
@endsection