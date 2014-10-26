

<div id="Basement" style="width:100%;margin:auto;">
    <div id="Slideshow">
      <div id="slice1">
        <p><img src="images/one.jpg""http://www.indiana.edu/~microbes/images/one.jpg" /></p>
        <p><b>Microbial diversity:</b> bacteria cultured from soils are used to measure microbial niche space, functional traits, and their phylogenetic distributions. This information is used to identify generalist and specialists, which provides insight into mechanisms of coexistence.
        </p>
      </div>
      <div id="slice2">
        <p><img src="http://www.indiana.edu/~microbes/images/two.jpg" /></p>
        <p><b>Field biology:</b> because microorganisms are found in all ecosystems, our research often involves field work in managed and natural habitats such as University Lake at Indiana University’s Research and Teaching Preserve.
        </p>
      </div>
      <div id="slice3">
        <p><img src="http://www.indiana.edu/~microbes/images/three.jpg" /></p>
        <p><b>Developing and testing theory:</b> our lab develops and tests theory related to microbial diversity. We are particularly interested in life history theory features such as dormancy, which can influence the persistence of genotypes, the maintenance of diversity, and the functioning of communities.
        </p>
      </div>
      <div id="slice4">
        <p><img src="http://www.indiana.edu/~microbes/images/four.jpg" /></p>
        <p><b>Microbial evolution:</b> owing to their rapid growth rates an large population size, microorganisms often undergo “rapid” evolutionary change owing to starvation or phage  phage predation. We study how these evolutionary changes feedback on ecological processes such as species interactions and ecosystem functioning.
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


