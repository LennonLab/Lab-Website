

<div id="Basement" style="width:100%;margin:auto;">
    <div id="Slideshow">
      <div id="slice1">
        <p><img src="images/one.jpg""http://www.indiana.edu/~microbes/images/one.jpg" /></p>
        <p><b>Microbial diversity:</b> we study the functional traits of microbes to identify generalist and specialists, which provides insight into mechanisms of coexistence.
        </p>
      </div>
      <div id="slice2">
        <p><img src="http://www.indiana.edu/~microbes/images/two.jpg" /></p>
        <p><b>Field biology:</b> we study microbes in natural and managed ecosystems, including habitats such as University Lake at Indiana University's Research and Teaching <a href="http://www.indiana.edu/~preserve/">Preserve</a>. 
        </p>
      </div>
      <div id="slice3">
        <p><img src="http://www.indiana.edu/~microbes/images/three.jpg" /></p>
        <p><b>Developing and testing theory:</b> we study dormancy, which  influences the persistence of genotypes, the maintenance of diversity, and the functioning of communities.
        </p>
      </div>
      <div id="slice4">
        <p><img src="http://www.indiana.edu/~microbes/images/four.jpg" /></p>
        <p><b>Microbial evolution:</b> we study the “rapid” evolution of microbes and how this feeds back on ecological processes including species interactions and ecosystem functioning.
        </p>
      </div>
    </div>
   </div>
   
 <script type="text/javascript">
var element = document.getElementById("Slideshow");
var duration = 2500; /* fade duration in millisecond */
var hidtime = 100; /* time to stay hidden */
var showtime = 5000; /* time to stay visible */

var running = 0 /* Used to check if fade is running */
var iEcount = 1 /* Element Counter */

var iTotalE = element.getElementsByTagName('div').length;


function SetOpa(Opa) {
  element.style.opacity = Opa;
  element.style.MozOpacity = Opa;
  element.style.KhtmlOpacity = Opa;
  element.style.filter = 'alpha(opacity=' + (Opa * 100) + ');';
}
function StartFade() {
  if (running != 1) {
   running = 1
   fadeOut()
  }
}
function fadeOut() {
  for (i = 0; i <= 1; i += 0.01) {
    setTimeout("SetOpa(" + (1 - i) +")", i * duration);
  }
   setTimeout("FadeIn()", (duration + hidtime));
}
function FadeIn() {
  for (i = 0; i <= 1; i += 0.01) {
    setTimeout("SetOpa(" + i +")", i * duration);
  }
   if (iEcount == iTotalE) {
    iEcount = 1
    document.getElementById("slice" + iEcount).style.display = "block";
    document.getElementById("slice" + iTotalE).style.display = "none";
   } else {
    document.getElementById("slice" + (iEcount + 1)).style.display = "block";
    document.getElementById("slice" + iEcount).style.display = "none";
    iEcount = iEcount+1
   }
   setTimeout("fadeOut()", (duration + showtime));
}
   </script>


